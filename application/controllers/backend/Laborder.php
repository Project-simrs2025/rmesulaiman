<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *"); // untuk testing bisa *, nanti batasi ke domain tertentu
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

class Laborder extends CI_Controller {

    function __construct(){
        parent::__construct();
        error_reporting(0);
        $this->load->model('backend/Laborder_model','laborder_model');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function index(){
        $data['title'] = 'Data Lab Order';
        // default filter: hari ini
        $data['tanggal_awal']  = $this->input->get('tanggal_awal') ?: date("Y-m-d");
        $data['tanggal_akhir'] = $this->input->get('tanggal_akhir') ?: date("Y-m-d");

        $this->load->view('backend/menuhorizontal',$data);
        $this->load->view('backend/_partials/templatejs');
        $this->load->view('backend/v_laborder',$data);
    }



    public function api_list()
    {
        $tanggal_awal  = $this->input->get_post('tanggal_awal', true);
        $tanggal_akhir = $this->input->get_post('tanggal_akhir', true);

        if (empty($tanggal_awal) || empty($tanggal_akhir)) {
            $tanggal_awal  = date('Y-m-d');
            $tanggal_akhir = date('Y-m-d');
        }

        $list = $this->laborder_model->get_datatables($tanggal_awal, $tanggal_akhir);

        $data = [];
        foreach ($list as $row) {
            $data[] = [
                'id_pasien'      => $row->id_pasien,
                'id_kunjungan'   => $row->id_kunjungan,
                'id_transaksi_invoice_detail' => $row->id_transaksi_invoice_detail,
                'nama_pasien'    => $row->nama_pasien,
                'no_rm'          => $row->no_rm,
                'nama_petugas'   => $row->nama_petugas,
                'nama_penjamin'  => $row->nama_penjamin,
                'jenis_visit'    => $row->jenis_visit,
                'nama_lokasi'    => $row->nama_lokasi,
                'charge_item'    => $row->charge_item,
                'keterangan'     => $row->keterangan,
                'jenis'          => $row->jenis ?? '-',   // ✅ tambahkan jenis
                'id_detail'      => $row->id_detail,
            ];
        }

        $output = [
            "status"          => "success",
            "draw"            => intval($this->input->post('draw')),
            "recordsTotal"    => $this->laborder_model->count_all($tanggal_awal, $tanggal_akhir),
            "recordsFiltered" => $this->laborder_model->count_filtered($tanggal_awal, $tanggal_akhir),
            "data"            => $data
        ];

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($output));
    }



    // Controller Laborder.php
    public function api_check_new()
    {
        $today   = date('Y-m-d');
        $last_id = $this->input->get_post('last_id');

        $this->postgres = $this->load->database('postgres', TRUE);

        // cek data baru hari ini & status = 1 (Belum Sampel) atau 3 (Sudah Sampel)
        $query = $this->postgres->query("
            SELECT MAX(lo.id) AS last_id
            FROM lab_order lo
            LEFT JOIN transaksi_invoice_detail tid ON tid.id = lo.id_transaksi_invoice_detail
            WHERE lo.waktu_input::date = ?
              AND tid.status_hapus = 'N'
              AND tid.jenis IN ('M','S','PT')
              AND lo.status::int IN (1,3)
        ", [$today]);

        $row     = $query->row();
        $new_id  = $row ? (int)$row->last_id : 0;

        $found_new = ($new_id > (int)$last_id);

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode([
                "last_id"   => $new_id,
                "found_new" => $found_new
            ]));
    }



}
