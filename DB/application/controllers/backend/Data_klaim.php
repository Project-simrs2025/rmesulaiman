<?php

class Data_klaim extends CI_Controller
{
	function __construct()
	{
		ob_clean(); // bersihkan output sebelumnya
		parent::__construct();
		ini_set('display_errors', 0);
		if ($this->session->userdata('logged') != TRUE) {
			$url = base_url('login');
			redirect($url);
		};
		$this->load->model('Site_model', 'site_model');
		$this->load->model('backend/Data_klaim_model', 'data_klaim_model');
		$this->load->model('backend/Admission_model', 'admission_model');
		$this->load->library('upload');
		$this->load->library('validation/RmeFormValidation');
		$this->load->library('Pdf');
		$this->load->helper('text');
		$this->load->helper('url');
		$this->load->helper('tanggal');
		$this->load->helper('count');
		$this->load->helper('download');
		date_default_timezone_set("Asia/Jakarta");
	}

	// TAMPILAN INDEX ADMISSION
	public function index()
	{
		// AMBIL DATA UNIT
		$unit = $this->site_model->get_unit_data();
		$data['nama_prov'] = $unit['nama_prov'];
		$data['nama_kab'] = $unit['nama_kab'];
		$data['nama_kec'] = $unit['nama_kec'];
		$data['nama_kel'] = $unit['nama_kel'];
		$data['alamat'] = $unit['alamat'];
		// AMBIL DATA SETTINGS
		$getsettings = $this->site_model->get_settings_data();
		$data['site_title'] = $getsettings['nama'];
		$data['telepon'] = $getsettings['telepon'];
		$data['email'] = $getsettings['email'];
		$data['images'] = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];
		$data['site_favicon'] = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];
		$data['title'] = 'Data Klaim';
		

		$this->load->view('backend/menuhorizontal', $data);
		$this->load->view('backend/_partials/templatejs');
		$this->load->view('backend/v_data_klaim', $data);
	}


	public function get_ajax_list()
	{
		$list = $this->data_klaim_model->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $d) {
			$no++;
			$row = array();
			$row[] = format_indo($d->waktu_input);
			$row[] = $d->nama_pasien;
			$row[] = $d->no_rm;
			$row[] = $d->no_sep;
			$row[] = '<a class="btn icon btn-dark download" href="javascript:void()" title="Download All" data-id_kunjungan="'.$d->id.'"><i class="bi bi bi-download"></i> Download Berkas</a>';
			$data[] = $row;
		}
		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->data_klaim_model->count_all(),
			"recordsFiltered" => $this->data_klaim_model->count_filtered(),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}
	public function download_all()
	{
	    $id_kunjungan = $this->uri->segment(4);
	    $get_id_kun = $this->data_klaim_model->get_id_kunjungan($id_kunjungan);
	    $rows = $get_id_kun->row(); 
	    $no_sep = $rows->no_sep;
	    $id_pasien = $rows->id_pasien;

	    $get_no_rm = $this->data_klaim_model->get_pasien($id_pasien);
	    $rows2 = $get_no_rm->row(); 
	    $no_rm = $rows2->no_rm;
	    $nama = $rows2->nama;

	    if (empty($no_sep)) {
		    $nama_berkas_klaim = $no_rm . ' ' . $nama;
		} else {
		    $nama_berkas_klaim = $no_sep;
		}


		if ($get_id_kun && $get_id_kun->num_rows() > 0) {
		    $unit = $this->site_model->get_unit_data();
		    $settings = $this->site_model->get_settings_data();

		    if (!$unit || !$settings) {
		        show_error('Data unit atau settings tidak ditemukan.', 404);
		        return;
		    }

		    $pdf = new PDF('P', 'mm', 'A4');
		    $pdf->setPrintHeader(false);
		    $pdf->setFooterFont([PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA]);
		    $pdf->setFooterMargin(PDF_MARGIN_FOOTER);
		    $pdf->setDefaultMonospacedFont(PDF_FONT_MONOSPACED);
		    $pdf->setAutoPageBreak(true, PDF_MARGIN_BOTTOM);
		    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

		    // Kirim PDF yang sama ke semua renderer
		    $this->_render_pdfrm9($id_kunjungan, $pdf);
		    $this->_render_pdfrm2a($id_kunjungan, $pdf);
		    $this->_render_pdfrm2b($id_kunjungan, $pdf);
		    

		    $pdf->Output($nama_berkas_klaim.'.pdf', 'I');
		} else {
			echo $this->session->set_flashdata('msg','empty-kunjungan');
			redirect('backend/data_klaim');
		}
	}
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// RM 9 URUTAN 1
	public function _render_pdfrm9($id_kunjungan, $pdf)
	{

		// Ambil data unit
		$unit = $this->site_model->get_unit_data();
		$nama_prov = $unit['nama_prov'];
		$nama_kab = $unit['nama_kab'];
		$nama_kec = $unit['nama_kec'];
		$nama_kel = $unit['nama_kel'];
		$alamat = $unit['alamat'];
		$city_sign = $unit['nama_kab'];
		$lokasi = $alamat . ', Kelurahan ' . $nama_kel . ', Kecamatan ' . $nama_kec . ', ' . $nama_kab . ', ' . $nama_prov;

		// Ambil data settings
		$getsettings = $this->site_model->get_settings_data();
		$site_title = $getsettings['nama'];
		$telepon = $getsettings['telepon'];
		$email = $getsettings['email'];
		$images = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];



		// Ambil data FORM RME berdasarkan ID
		$berkas_klaim = 'rm9';
		$formData = $this->data_klaim_model->get_by_id_rm9($id_kunjungan,$berkas_klaim);
		if (!$formData) {
            return;
        }
		$link = $formData->nama_berkas;
		$jsonRaw = $formData->data_json;
		$id_kunjungan = $formData->id_kunjungan;
		$id_pasien_rme = $formData->id_pasien_rme;
		$decodedData = json_decode($jsonRaw, true); // JSON ke array

		$idBerkas = $decodedData['id'] ?? null;

		$post = $this->data_klaim_model->get_edit_data($id_kunjungan);

		// Menyesuaikan jenis kelamin
		$post->jenkel = ($post->jenkel == 2) ? 'Perempuan' : 'Laki-laki';

		$nama_pasien = $post->nama_pasien;
		$nik = $post->nik;
		$pendidikan_terakhir = $post->pendidikan_terakhir;
		$nama_pekerjaan = $post->nama_pekerjaan;
		$no_rm = $post->no_rm;
		$tgl_lahir = $post->tanggal_lahir;
		$umur = countumur($post->tanggal_lahir);
		$jenkel = $post->jenkel;
		$alamatt = $post->alamat;
		$nama_agama = $post->nama_agama;
		$no_hp = $post->no_handphone;
		$tgl_admit2 = $post->tgl_admit;
		$post->umur = countumur($post->tanggal_lahir);
		$tgl_admit = format_indo(date($post->tgl_admit));
		$tgl_discharge = $post->tgl_discharge ? format_indo(date($post->tgl_discharge)) : "";
		$nama_lantai = $post->nama_lantai;
		$nama_dokter = $post->nama_dokter;
		$nama_poli = $post->nama_poli;
		$nama_ruangan = $post->nama_ruangan;
		$no_bad = $post->no_bad;
		$nama_jenis_pasien = $post->nama_jenis_pasien;
		$kelas = $post->kelas;
		$lama = countme($post->tgl_admit);


		// Simpan data perawat jika user level 13
		$levelUser = $this->session->all_userdata()['level'];
		if ($levelUser == 13) {
			$post->id_perawat = $this->session->all_userdata()['id'];
			$post->nama_perawat = $this->session->all_userdata()['name'];
		}

		$postmenu = $this->admission_model->get_menu($link);
		$judulRM = $postmenu->isi;
		$namaRM = $postmenu->rm;
		$linkRM = $postmenu->link;
		$dokters = $decodedData['dokter_umum'];
		$result_dokter = $this->data_klaim_model->get_karyawan_by_nama($dokters);
		
		$imagesttd = BASE_STORAGE . '/pmo/images/pegawai/' . $result_dokter;
		// $imagesttd = FCPATH . 'assets/images/logo/787205dc7cf0a063e492c50da0b885a4.jpg';
		// ... Inisialisasi PDF seperti sebelumnya
		
		$pdf->AddPage();
		$pdf->SetFont('times', '', 11);

		// HEADER PDF
		// Matikan GAMBAR HEADER
		$pdf->Image($images, 10,10, 20, 20, '', '', 1, 0);
		$pdf->SetFont('times','B',16);
		$pdf->Cell(190,4,$site_title,0,1,'C');
		$pdf->SetFont('times','B',10);
		$pdf->MultiCell(45, 5, '', 0, 'C', 0, 0, '', '', true);
		$pdf->MultiCell(100, 5, $lokasi."\n", 0, 'C', 0, 1, '' ,'', true);
		$pdf->Cell(10,4,'',0,1);
		$pdf->writeHTML("<hr>", true, false, false, false, '');

		// FONT UTAMA
		$pdf->SetFont('times','',10);

		// =================== HALAMAN PERTAMA ====================
		$html1 = '
	    <h3 align="right">' . htmlspecialchars($namaRM) . '</h3>
	    <h2 align="center">' . htmlspecialchars($judulRM) . '</h2>

	    <table class="table-borderless" cellpadding="5" cellspacing="0" width="100%">
	        <tr>
	            <td><b>Nama Pasien : </b>' . htmlspecialchars($nama_pasien) . '</td>
	            <td><b>Jenis Kelamin :  </b>' . htmlspecialchars($jenkel) . '</td>
	        </tr>
	        <tr>
	            <td><b>Tanggal Lahir : </b>' . htmlspecialchars($tgl_lahir) . '</td>
	            <td><b>No. RM : </b>' . htmlspecialchars($no_rm) . '</td>
	        </tr>
	    </table>

	    <table cellpadding="5" cellspacing="0" style="border:1px solid black; width:100%;">
	        <tr><td width="50%" style="border:1px solid black;"><b>Tanggal Masuk : </b>' . htmlspecialchars($tgl_admit) . '</td><td  style="border:1px solid black;"><b>Ruang Rawat Terakhir :</b>' . htmlspecialchars($nama_ruangan) . '</td></tr>
	        <tr><td width="50%" style="border:1px solid black;"><b>Tanggal Keluar/ Meninggal :</b> ' . htmlspecialchars($tgl_discharge) . '</td><td  style="border:1px solid black;"><b>Penanggung Pembayaran :</b>' . htmlspecialchars($decodedData['penanggung_pembayaran']) . '</td></tr>
	        <tr><td colspan="2" style="border:1px solid black;"><b>Dokter Penanggung Jawab (DPJP) :</b> ' . htmlspecialchars($nama_dokter) . '</td></tr>
	    </table>

	    <table cellpadding="5" cellspacing="0" style="border:1px solid black; width:100%;">
	        <tr><td colspan="2" style="border:1px solid black;"><b>Rawat tim dokter: </b>' . ($decodedData['rawat_tim_dokter'] === "ya" ? "Ya" : "Tidak") . '</td></tr>
	        <tr><td width="50%">1. dr : ' . htmlspecialchars($decodedData['dokter_umum_1']) . '</td><td>2. dr :' . htmlspecialchars($decodedData['dokter_umum_2']) . '</td></tr>
	        <tr><td width="50%">3. dr : ' . htmlspecialchars($decodedData['dokter_umum_3']) . '</td><td>4. dr :' . htmlspecialchars($decodedData['dokter_umum_4']) . '</td></tr>
	    </table>

	    <table cellpadding="5" cellspacing="0" style="border:1px solid black; width:100%;">
	        <tr><td width="20%" style="border:1px solid black;"><b>Alasan di Rawat</b></td><td width="80%" style="border:1px solid black;">' . htmlspecialchars($decodedData['alasan_dirawat']) . '</td></tr>
	        <tr><td width="20%" style="border:1px solid black;"><b>Diagnosa Masuk</b></td><td width="80%" style="border:1px solid black;">' . htmlspecialchars($decodedData['diagnosa_masuk']) . '</td></tr>
	        <tr><td width="20%" style="border:1px solid black;"><b>Diagnosa Keluar</b></td><td width="40%" style="border:1px solid black;">' . htmlspecialchars($decodedData['diagnosa_keluar']) . '</td><td width="40%" style="border:1px solid black;"><b>ICD10 Utama :</b>' . htmlspecialchars($decodedData['icd10_utama']) . '</td></tr>
	    </table>

	    <table cellpadding="5" cellspacing="0" style="border:1px solid black; width:100%;">
	        <tr><td colspan="2" style="border:1px solid black;"><b>Diagnosa Sekunder</b></td></tr>';

		for ($i = 1; $i <= 5; $i++) {
		    if (!empty($decodedData["diagnosis_sekunder_$i"])) {
		        $html1 .= '<tr><td width="20%"></td><td width="80%">' . $i . '. ' . htmlspecialchars($decodedData["diagnosis_sekunder_$i"]) . '</td></tr>';
		    }
		}

		$html1 .= '</table>

		    <table cellpadding="5" cellspacing="0" style="border:1px solid black; width:100%;">
		        <tr><td width="20%" style="border:1px solid black;"><b>Penyebab Kematian (Secara Klinis)</b></td><td width="80%" style="border:1px solid black;">' . htmlspecialchars($decodedData['penyebab_kematian']) . '</td></tr>
		        <tr><td width="20%" style="border:1px solid black;"><b>Pemeriksaan Fisik Yang Penting</b></td><td width="80%" style="border:1px solid black;">' . htmlspecialchars($decodedData['pemeriksaan_fisik']) . '</td></tr>
		    </table>';

		

		$html1 .= '<table cellpadding="5" cellspacing="0" style="border:1px solid black; width:100%;">';
		$html1 .= '<tr>
		    <td width="20%" style="border:1px solid black;"><b>Hasil Laboratorium</b></td>
		    <td width="80%" style="border:1px solid black;">';

		// Awal tabel hasil lab (di dalam <td>)
		$html1 .= '<table cellpadding="4" cellspacing="0" border="1" width="100%">
		    <thead>
		        <tr style="background-color:#fff;">
		            <th width="20%"><b>Tanggal Input</b></th>
		            <th width="70%"><b>Nama Pemeriksaan</b></th>
		            <th width="10%" align="center"><b>Qty</b></th>
		        </tr>
		    </thead>
		    <tbody>';

		$invoice_data = $this->data_klaim_model->get_invoice_data($id_kunjungan);
		$lab_rows = '';
		$last_kunjungan = null;

		foreach ($invoice_data as $invoice) {
		    foreach ($invoice['details'] as $detail) {
		        

		        $lab_rows .= '<tr>
		            <td width="20%">' . date('d-m-Y', strtotime($detail['tanggal_input'])) . '</td>
		            <td width="70%">' . htmlspecialchars($detail['nama_transaksi']) . '</td>
		            <td align="center" width="10%">' . htmlspecialchars($detail['qty']) . '</td>
		        </tr>';
		    }
		}

		if (empty($lab_rows)) {
		    $lab_rows = '<tr><td colspan="3" align="center">- Tidak ada data laboratorium -</td></tr>';
		}

		$html1 .= $lab_rows;

		// Tutup tabel hasil lab dan td
		$html1 .= '</tbody></table>';
		$html1 .= '</td></tr>
		<tr><td width="20%" style="border:1px solid black;"><b>Penunjang Lain</b></td><td width="80%" style="border:1px solid black;">' . htmlspecialchars($decodedData['penunjang_lain']) . '</td></tr>
		    <tr><td width="20%" style="border:1px solid black;"><b>Tindakan Operasi</b></td><td width="40%" style="border:1px solid black;">' . htmlspecialchars($decodedData['tindakan_operasi']) . '</td><td width="40%" style="border:1px solid black;"><b>ICD9 CM :</b>' . htmlspecialchars($decodedData['icd9cm']) . '</td></tr>
		    <tr><td width="20%" style="border:1px solid black;"><b>Keadaan Umum Pasien Saat Pulang</b></td>
		        <td colspan="2" style="border:1px solid black;"><b>Keadaan Umum : </b>' . htmlspecialchars($decodedData['keadaan_umum']) . '<br/>
		        <b>GCS : E:</b>' . htmlspecialchars($decodedData['gcs_e']) . '<b> M:</b>' . htmlspecialchars($decodedData['gcs_m']) . '<b> V:</b>' . htmlspecialchars($decodedData['gcs_v']) . '<br/>
		        <b>Tensi:</b>' . htmlspecialchars($decodedData['tensi']) . '<b> Respirasi:</b>' . htmlspecialchars($decodedData['respirasi']) . '<br/>
		        <b>Nadi:</b>' . htmlspecialchars($decodedData['nadi']) . '<b> Suhu:</b>' . htmlspecialchars($decodedData['suhu']) . '</td>
		    </tr>
		</table>';


			// CETAK HALAMAN 1
			$pdf->writeHTML($html1, true, false, true, false, '');

			// HALAMAN BARU
			$pdf->AddPage();
			$caraPulang = $decodedData['cara_pulang'];
			$opsiCaraPulang = [
			    'PBJ',
			    'Pulang Atas <br/>Permintaan Sendiri',
			    'Meninggal',
			    'Rujuk ..............',
			    'Lain – lain'
			];
			// =================== HALAMAN KEDUA ====================
			$html2 = '<table cellpadding="5" cellspacing="0" style="border:1px solid black; width:100%;">
			    <tr>
			        <td width="20%" style="border:1px solid black;"><b>Cara Pulang Pasien :</b><br/>';

			foreach ($opsiCaraPulang as $opsi) {
			    if (strpos(strtolower($caraPulang), 'rujuk') !== false && strpos(strtolower($opsi), 'rujuk') !== false) {
			        $checked = '[v]';
			    } else {
			        $checked = (strtolower($caraPulang) === strtolower($opsi)) ? '[v]' : '[ ]';
			    }
			    $html2 .= '<b>'.$checked.'</b> ' . $opsi . '<br/>';
			}

			$html2 .= '</td>
			    <td width="80%" style="border:1px solid black;"><b>Instruksi dn Edukasi Lanjutan ( Follow Up ): </b>' . $decodedData['instruksi_edukasi'] . '<br/><hr>
			    	<b>Kontrol Tanggal: </b>' . $decodedData['kontrol_tanggal'] . '<br/>
			    	<b>   Di: </b>' . $decodedData['kontrol_lokasi'] . '<br/><hr>
			    	<b>Diet: </b>' . $decodedData['diet'] . '<br/><hr>
			    	<b>Latihan: </b>' . $decodedData['latihan'] . '<br/><hr>
			    	<b>Segera kembali ke RS, Langsung ke Gawat Darurat, bila terjadi : </b>' . $decodedData['kembali_ke_rs_bila'] . '<br/>
			    </td>
			    
			</tr></table>';

			$resep_list = $this->data_klaim_model->get_resep_by_kunjungan($id_kunjungan);
			// Buat HTML table rows
			$obat_rows = '';
			$no = 1;
			foreach ($resep_list as $resep) {
				$resepa = $resep['eticket_a'];
				$resepb = $resep['eticket_b'];
				$resepc = $resep['eticket_c'];
				$deskripsi_signa = $resep['deskripsi_signa'];
				if (is_null($resep['deskripsi_signa']) || $resep['deskripsi_signa'] === '') {
				    $dosis = trim("$resepa $resepb $resepc");
				    $carapemberian = $resep['instruksi1_nama'].'/ '.$resep['instruksi2_nama'];
				} else {
				    $dosis = $resep['deskripsi_signa'];
				    $carapemberian = $resep['instruksi1_nama'].'/ '.$resep['instruksi2_nama'];
				}

			    $obat_rows .= '<tr>
			        <td width="45%">' . htmlspecialchars($resep['nama_brand']) . '</td>
			        <td width="5%">' . htmlspecialchars($resep['qty']) . '</td>
			        <td width="7%">' . htmlspecialchars($dosis) . '</td>
			        <td width="10%">' . htmlspecialchars($resep['frekuensi']) . '</td>
			        <td width="33%">' . $carapemberian . '</td>
			    </tr>';
			}

			if (empty($obat_rows)) {
			    $obat_rows = '<tr><td colspan="3">- Tidak ada data resep -</td></tr>';
			}
			$html2 .= '
			    <h3 align="center">Terapi Pulang</h3>
			    <table cellpadding="4" cellspacing="0" border="1" width="100%">
			        <thead>
			            <tr style="background-color:#fff;">
			                <th width="45%"><b>Nama Obat</b></th>
			                <th width="5%"><b>Qty</b></th>
			                <th width="7%"><b>Dosis</b></th>
			                <th width="10%"><b>Frekuensi</b></th>
			                <th width="33%"><b>Cara Pemberian</b></th>
			            </tr>
			        </thead>
			        <tbody>
			            ' . $obat_rows . '
			        </tbody>
			    </table>

			    <br><br>';
			$html2 .= '    <h4 align="center">Tanggal : ' . $decodedData['tanggal_tanda_tangan'] . ' Jam : ' . $decodedData['jam_tanda_tangan'] . '</h4>
			    <h4 align="center">Yang Membuat,</h4>

			    <div align="center">
			        <img src="' . $imagesttd . '" width="80" height="80" />
			    </div>

			    <h4 align="center">' . $decodedData['dokter_umum'] . '</h4>';

		
		
		$pdf->writeHTML($html2, true, false, true, false, '');

	}
	// RM 9 URUTAN 1
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// RM 2A URUTAN 2
    public function _render_pdfrm2a($id_kunjungan, $pdf)
	{
	    // Ambil data unit
		$unit = $this->site_model->get_unit_data();
		$nama_prov = $unit['nama_prov'];
		$nama_kab = $unit['nama_kab'];
		$nama_kec = $unit['nama_kec'];
		$nama_kel = $unit['nama_kel'];
		$alamat = $unit['alamat'];
		$city_sign = $unit['nama_kab'];
		$lokasi = $alamat . ', Kelurahan ' . $nama_kel . ', Kecamatan ' . $nama_kec . ', ' . $nama_kab . ', ' . $nama_prov;

		// Ambil data settings
		$getsettings = $this->site_model->get_settings_data();
		$site_title = $getsettings['nama'];
		$telepon = $getsettings['telepon'];
		$email = $getsettings['email'];
		$images = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];

		// Ambil data FORM RME berdasarkan ID
		$berkas_klaim = 'rm2';
		$formData = $this->data_klaim_model->get_by_id_rm2a($id_kunjungan,$berkas_klaim);
		if (!$formData) {
            return;
        }
		$link = $formData->nama_berkas;
		$jsonRaw = $formData->data_json;
		$id_kunjungan = $formData->id_kunjungan;
		$id_pasien_rme = $formData->id_pasien_rme;
		$decodedData = json_decode($jsonRaw, true); // JSON ke array

		$idBerkas = $decodedData['id'] ?? null;

		$post = $this->data_klaim_model->get_edit_data($id_kunjungan);

		// Menyesuaikan jenis kelamin
		$post->jenkel = ($post->jenkel == 2) ? 'Perempuan' : 'Laki-laki';

		$nama_pasien = $post->nama_pasien;
		$nik = $post->nik;
		$pendidikan_terakhir = $post->pendidikan_terakhir;
		$nama_pekerjaan = $post->nama_pekerjaan;
		$no_rm = $post->no_rm;
		$tgl_lahir = $post->tanggal_lahir;
		$umur = countumur($post->tanggal_lahir);
		$jenkel = $post->jenkel;
		$alamatt = $post->alamat;
		$nama_agama = $post->nama_agama;
		$no_hp = $post->no_handphone;
		$tgl_admit2 = $post->tgl_admit;
		$post->umur = countumur($post->tanggal_lahir);
		$tgl_admit = format_indo(date($post->tgl_admit));
		$tgl_discharge = $post->tgl_discharge ? format_indo(date($post->tgl_discharge)) : "";
		$nama_lantai = $post->nama_lantai;
		$nama_dokter = $post->nama_dokter;
		$nama_poli = $post->nama_poli;
		$nama_ruangan = $post->nama_ruangan;
		$no_bad = $post->no_bad;
		$nama_jenis_pasien = $post->nama_jenis_pasien;
		$kelas = $post->kelas;
		$lama = countme($post->tgl_admit);


		// Simpan data perawat jika user level 13
		$levelUser = $this->session->all_userdata()['level'];
		if ($levelUser == 13) {
			$post->id_perawat = $this->session->all_userdata()['id'];
			$post->nama_perawat = $this->session->all_userdata()['name'];
		}

		$postmenu = $this->admission_model->get_menu($link);
		$judulRM = $postmenu->isi;
		$namaRM = $postmenu->rm;
		$linkRM = $postmenu->link;
		$dokters = $decodedData['dokter_umum'];
		$result_dokter = $this->data_klaim_model->get_karyawan_by_nama($dokters);
		
		$imagesttd = BASE_STORAGE . '/pmo/images/pegawai/' . $result_dokter;
		// $imagesttd = FCPATH . 'assets/images/logo/787205dc7cf0a063e492c50da0b885a4.jpg';
		// ... Inisialisasi PDF seperti sebelumnya


	    $pdf->AddPage();
		$pdf->SetFont('times', '', 11);

		// HEADER PDF
		// Matikan GAMBAR HEADER
		$pdf->Image($images, 10,10, 20, 20, '', '', 1, 0);
		$pdf->SetFont('times','B',16);
		$pdf->Cell(190,4,$site_title,0,1,'C');
		$pdf->SetFont('times','B',10);
		$pdf->MultiCell(45, 5, '', 0, 'C', 0, 0, '', '', true);
		$pdf->MultiCell(100, 5, $lokasi."\n", 0, 'C', 0, 1, '' ,'', true);
		$pdf->Cell(10,4,'',0,1);
		$pdf->writeHTML("<hr>", true, false, false, false, '');

		// FONT UTAMA
		$pdf->SetFont('times','',10);

		// LANJUT DESAIN PDF NYA DISINI>>>

		// LANJUT DESAIN PDF NYA DISINI>>>
		$pdf->writeHTML($html2, true, false, true, false, '');
	}
	// RM 2A URUTAN 2
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// RM 2B URUTAN 3
	public function _render_pdfrm2b($id_kunjungan, $pdf)
	{
	    // Ambil data unit
		$unit = $this->site_model->get_unit_data();
		$nama_prov = $unit['nama_prov'];
		$nama_kab = $unit['nama_kab'];
		$nama_kec = $unit['nama_kec'];
		$nama_kel = $unit['nama_kel'];
		$alamat = $unit['alamat'];
		$city_sign = $unit['nama_kab'];
		$lokasi = $alamat . ', Kelurahan ' . $nama_kel . ', Kecamatan ' . $nama_kec . ', ' . $nama_kab . ', ' . $nama_prov;

		// Ambil data settings
		$getsettings = $this->site_model->get_settings_data();
		$site_title = $getsettings['nama'];
		$telepon = $getsettings['telepon'];
		$email = $getsettings['email'];
		$images = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];

		// Ambil data FORM RME berdasarkan ID
		$berkas_klaim = 'rm2b';
		$formData = $this->data_klaim_model->get_by_id_rm2b($id_kunjungan,$berkas_klaim);
		if (!$formData) {
            return;
        }
		$link = $formData->nama_berkas;
		$jsonRaw = $formData->data_json;
		$id_kunjungan = $formData->id_kunjungan;
		$id_pasien_rme = $formData->id_pasien_rme;
		$decodedData = json_decode($jsonRaw, true); // JSON ke array

		$idBerkas = $decodedData['id'] ?? null;

		$post = $this->data_klaim_model->get_edit_data($id_kunjungan);

		// Menyesuaikan jenis kelamin
		$post->jenkel = ($post->jenkel == 2) ? 'Perempuan' : 'Laki-laki';

		$nama_pasien = $post->nama_pasien;
		$nik = $post->nik;
		$pendidikan_terakhir = $post->pendidikan_terakhir;
		$nama_pekerjaan = $post->nama_pekerjaan;
		$no_rm = $post->no_rm;
		$tgl_lahir = $post->tanggal_lahir;
		$umur = countumur($post->tanggal_lahir);
		$jenkel = $post->jenkel;
		$alamatt = $post->alamat;
		$nama_agama = $post->nama_agama;
		$no_hp = $post->no_handphone;
		$tgl_admit2 = $post->tgl_admit;
		$post->umur = countumur($post->tanggal_lahir);
		$tgl_admit = format_indo(date($post->tgl_admit));
		$tgl_discharge = $post->tgl_discharge ? format_indo(date($post->tgl_discharge)) : "";
		$nama_lantai = $post->nama_lantai;
		$nama_dokter = $post->nama_dokter;
		$nama_poli = $post->nama_poli;
		$nama_ruangan = $post->nama_ruangan;
		$no_bad = $post->no_bad;
		$nama_jenis_pasien = $post->nama_jenis_pasien;
		$kelas = $post->kelas;
		$lama = countme($post->tgl_admit);


		// Simpan data perawat jika user level 13
		$levelUser = $this->session->all_userdata()['level'];
		if ($levelUser == 13) {
			$post->id_perawat = $this->session->all_userdata()['id'];
			$post->nama_perawat = $this->session->all_userdata()['name'];
		}

		$postmenu = $this->admission_model->get_menu($link);
		$judulRM = $postmenu->isi;
		$namaRM = $postmenu->rm;
		$linkRM = $postmenu->link;
		$dokters = $decodedData['dokter_umum'];
		$result_dokter = $this->data_klaim_model->get_karyawan_by_nama($dokters);
		
		$imagesttd = BASE_STORAGE . '/pmo/images/pegawai/' . $result_dokter;
		// $imagesttd = FCPATH . 'assets/images/logo/787205dc7cf0a063e492c50da0b885a4.jpg';
		// ... Inisialisasi PDF seperti sebelumnya


	    $pdf->AddPage();
		$pdf->SetFont('times', '', 11);

		// HEADER PDF
		// Matikan GAMBAR HEADER
		$pdf->Image($images, 10,10, 20, 20, '', '', 1, 0);
		$pdf->SetFont('times','B',16);
		$pdf->Cell(190,4,$site_title,0,1,'C');
		$pdf->SetFont('times','B',10);
		$pdf->MultiCell(45, 5, '', 0, 'C', 0, 0, '', '', true);
		$pdf->MultiCell(100, 5, $lokasi."\n", 0, 'C', 0, 1, '' ,'', true);
		$pdf->Cell(10,4,'',0,1);
		$pdf->writeHTML("<hr>", true, false, false, false, '');

		// FONT UTAMA
		$pdf->SetFont('times','',10);

		// LANJUT DESAIN PDF NYA DISINI>>>

		// LANJUT DESAIN PDF NYA DISINI>>>
		// CETAK HALAMAN 4
		$pdf->writeHTML($html2, true, false, true, false, '');
	}
	// RM 2B URUTAN 3
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	

    
	
}
