<?php
class Laborder_model extends CI_Model
{
    var $table = 'lab_order lo';
    // hanya cari di charge_item
    var $column_search = array(
        'tid.charge_item',
        'p.no_rm',
        'p.nama',
        'k.nama',
        'mkh.nama',
        "CASE WHEN adm.id IS NOT NULL THEN 'Rawat Inap' ELSE 'Rawat Jalan' END",
        'rg.nama_ruangan',
        'mp.name'
    );

    var $order = array('lo.id' => 'desc');

    public function __construct(){
        parent::__construct();
        $this->postgres = $this->load->database('postgres', TRUE);
    }

    private function _get_datatables_query($tanggal_awal,$tanggal_akhir){
        $this->postgres->select("
            lo.id_pasien,
            lo.id_kunjungan,
            MIN(lo.id) AS id_min,
            MIN(lo.id_transaksi_invoice_detail) AS id_transaksi_invoice_detail,
            tid.charge_item,
            p.nama AS nama_pasien,
            p.no_rm,
            k.nama AS nama_petugas,
            mkh.nama AS nama_penjamin,
            tid.id_detail,
            CASE 
                WHEN adm.id IS NOT NULL THEN 'Rawat Inap'
                ELSE 'Rawat Jalan'
            END AS jenis_visit,
            COALESCE(rg.nama_ruangan || ' / ' || tb.no_bad, mp.name) AS nama_lokasi,   -- ✅ revisi
            CASE 
                WHEN MAX(lo.status::int) = 3 THEN 'Sudah Sampel'
                WHEN MAX(lo.status::int) = 1 THEN 'Belum Sampel'
                ELSE '-'
            END AS keterangan,
            tid.jenis
             
        ", false);



        $this->postgres->from('lab_order lo');
        $this->postgres->join('transaksi_invoice_detail tid', 'tid.id = lo.id_transaksi_invoice_detail','left');
        $this->postgres->join('master_pasien p', 'p.id = lo.id_pasien','left');
        $this->postgres->join('master_karyawan k', 'k.id = tid.id_user','left');
        $this->postgres->join('master_kategori_harga mkh', 'mkh.id = tid.id_kategori_harga','left');
        $this->postgres->join('admission adm', 'adm.id_kunjungan = tid.id_kunjungan','left');
        $this->postgres->join('tbl_ruangan rg', 'rg.id_ruangan = adm.ruang','left');
        $this->postgres->join('tbl_bad tb', 'tb.id_bad = adm.bad','left');  // ✅ join bed
        $this->postgres->join('antrian an', 'an.id_kunjungan = tid.id_kunjungan','left');
        $this->postgres->join('master_poly mp', 'mp.id = an.id_poly','left');

        // filter tanggal
        $this->postgres->where("lo.waktu_input >=", $tanggal_awal . ' 00:00:00');
        $this->postgres->where("lo.waktu_input <=", $tanggal_akhir . ' 23:59:59');

        // hanya status_hapus = 'N'
        $this->postgres->where("tid.status_hapus", 'N');

        // hanya jenis tertentu
        $this->postgres->where_in("tid.jenis", array('M','S','PT'));

        // group by: hapus lo.status_sampel karena kita pakai MAX(lo.status_sampel)
        $this->postgres->group_by([
            'lo.id_pasien',
            'lo.id_kunjungan',
            'tid.charge_item',
            'p.nama',
            'p.no_rm',
            'k.nama',
            'mkh.nama',
            'adm.id',
            'rg.nama_ruangan',
            'tb.no_bad',     // ✅ tambah
            'mp.name',
            'tid.jenis',   // ✅ tambahkan
            'tid.id_detail'
        ]);

        // global search (tetap seperti sebelumnya)
        $search_value = isset($_POST['search']['value']) ? trim($_POST['search']['value']) : '';
        if ($search_value !== '') {
            $this->postgres->group_start();
            foreach ($this->column_search as $item) {
                $this->postgres->or_like("LOWER($item)", strtolower($search_value));
            }
            $this->postgres->group_end();
        }

        // filter per kolom (tetap seperti sebelumnya)
        if (isset($_POST['columns'])) {
            foreach ($_POST['columns'] as $colIdx => $col) {
                if (!empty($col['search']['value'])) {
                    $colSearch = strtolower(trim($col['search']['value']));
                    $columnName = $this->column_search[$colIdx] ?? null;
                    if ($columnName) {
                        $this->postgres->like("LOWER($columnName)", $colSearch);
                    }
                }
            }
        }

        // Filter tipe visit
        $tipe_visit = isset($_POST['tipe_visit']) ? $_POST['tipe_visit'] : '';
        if (!empty($tipe_visit)) {
            if ($tipe_visit === 'Rawat Inap') {
                $this->postgres->where("adm.id IS NOT NULL", null, false);
            } elseif ($tipe_visit === 'Rawat Jalan') {
                $this->postgres->where("adm.id IS NULL", null, false);
            }
        }



        // order
        // order
        // Override DataTables order agar default selalu dipakai
        $this->postgres->order_by("
            CASE 
                WHEN MAX(lo.status::int) = 1 THEN 0  -- Belum Sampel paling atas
                WHEN MAX(lo.status::int) = 3 THEN 1  -- Sudah Sampel setelahnya
                ELSE 2
            END
        ", "", false);
        $this->postgres->order_by("id_min", "desc");


    }


    function get_datatables($tanggal_awal,$tanggal_akhir){
        $this->_get_datatables_query($tanggal_awal,$tanggal_akhir);

        if($_POST['length'] != -1) {
            $this->postgres->limit($_POST['length'], $_POST['start']);
        }

        $query = $this->postgres->get();
        return $query ? $query->result() : [];
    }

    function count_filtered($tanggal_awal,$tanggal_akhir){
        $this->_get_datatables_query($tanggal_awal,$tanggal_akhir);
        $query = $this->postgres->get();
        return $query ? $query->num_rows() : 0;
    }

    public function count_all($tanggal_awal,$tanggal_akhir){
        $sql = "
            SELECT COUNT(DISTINCT (lo.id_pasien, lo.id_kunjungan, tid.charge_item)) AS jml
            FROM lab_order lo
            LEFT JOIN transaksi_invoice_detail tid ON tid.id = lo.id_transaksi_invoice_detail
            LEFT JOIN master_pasien p ON p.id = lo.id_pasien
            WHERE lo.waktu_input >= ? 
              AND lo.waktu_input <= ?
              AND tid.status_hapus = 'N'
              AND tid.jenis IN ('M','S','PT')
        ";
        $query = $this->postgres->query($sql, [$tanggal_awal . ' 00:00:00', $tanggal_akhir . ' 23:59:59']);
        return $query && $query->row() ? (int)$query->row()->jml : 0;
    }
}
