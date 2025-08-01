<?php

class Data_klaim extends CI_Controller
{
	function __construct()
	{
		ob_clean(); // bersihkan output sebelumnya
		parent::__construct();
		ini_set('display_errors', 0);
		// if ($this->session->userdata('logged') != TRUE) {
		// 	$url = base_url('login');
		// 	redirect($url);
		// };
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

			$temp_dir = FCPATH . 'temp_pdf/'.$d->no_sep.'.pdf';
	        if (!file_exists($temp_dir)) {
		        $status = '<i class="text-danger float-end bi bi-exclamation-circle"></i>';
		    } else {
		        $status = '<i class="text-success float-end bi bi-check-circle"></i>';
		    }

			$no++;
			$row = array();
			$row[] = format_indo($d->waktu_input);
			$row[] = $d->nama_pasien;
			$row[] = $d->no_rm;
			$row[] = $d->no_sep;
			$row[] = $status;
			$row[] = '<a class="btn icon btn-dark download" href="javascript:void()" title="Download All" data-id_kunjungan="'.$d->id.'"><i class="bi bi bi-download"></i> Gabung Berkas</a>';
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

	 

	    if ($get_id_kun && $get_id_kun->num_rows() > 0) {
	        $unit = $this->site_model->get_unit_data();
	        $settings = $this->site_model->get_settings_data();

	        if (!$unit || !$settings) {
	            show_error('Data unit atau settings tidak ditemukan.', 404);
	            return;
	        }

	        // Pastikan folder temp_pdf ada
	        $temp_dir = FCPATH . 'temp_pdf/';
	        if (!is_dir($temp_dir)) {
	            mkdir($temp_dir, 0777, true);
	        }

	        $pdf = new PDF('P', 'mm', 'A4');
		    $pdf->setPrintHeader(false);
		    $pdf->setFooterFont([PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA]);
		    $pdf->setFooterMargin(PDF_MARGIN_FOOTER);
		    $pdf->setDefaultMonospacedFont(PDF_FONT_MONOSPACED);
		    $pdf->setAutoPageBreak(true, PDF_MARGIN_BOTTOM);
		    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

		    //Kirim PDF yang sama ke semua renderer
		    $this->_render_pdfrm9($id_kunjungan, $pdf);
		    
		    
		    $this->_render_pdfrm2a($id_kunjungan, $pdf);
		    $this->_render_pdfrm2b($id_kunjungan, $pdf);
		    $this->_render_pdfrm3($id_kunjungan, $pdf);
		    $this->_render_pdfrm7($id_kunjungan, $pdf);
		    // $this->_render_pdfrm10($id_kunjungan, $pdf);
		    $this->_render_pdfrmcppt($id_kunjungan, $pdf);
		    $this->_render_pdfrm12b($id_kunjungan, $pdf);
		    $this->_render_pdfrm12c($id_kunjungan, $pdf);
		    $this->_render_pdfrm18e($id_kunjungan, $pdf);
		    $this->_render_pdfrm28($id_kunjungan, $pdf);
			// $this->_render_pdfrm2($id_kunjungan, $pdf);

		    

		    
		    
		    
	        // Buat nama file dengan timestamp supaya unik
	        $filename = (!empty($no_sep)) ? $no_sep . '.pdf' : $no_rm . '.pdf';
			$fullpath = $temp_dir . $filename;

	        // Simpan ke file di folder temp_pdf
	        $pdf->Output($fullpath, 'F');
	        // ob_end_clean();
	        // $pdf->Output($no_sep.'.pdf', 'I');

	        // Jika kamu mau, bisa return atau redirect ke file ini, misal:
	        // redirect(base_url('temp_pdf/' . $filename));

	        // $this->session->set_flashdata('msg', 'berhasil-create');
	        // redirect('backend/data_klaim');

	    } else {
	        $this->session->set_flashdata('msg', 'empty-kunjungan');
	        redirect('backend/data_klaim');
	    }
	}
	function to_safe_filename($name) {
	    // Hilangkan karakter selain huruf, angka, spasi dan titik
	    $name = preg_replace('/[^a-zA-Z0-9\s.]/', '', $name);
	    // Ganti spasi dan titik dengan underscore
	    $name = str_replace([' ', '.'], '_', $name);
	    // Ubah jadi huruf kecil
	    return strtolower($name);
	}
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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
		$formData = $this->data_klaim_model->get_by_id($id_kunjungan,$berkas_klaim);
		if (!$formData) {
            return;
        }
		$link = $formData->nama_berkas;
		$jsonRaw = $formData->data_json;
		$id_kunjungan = $formData->id_kunjungan;
		$id_pasien_rme = $formData->id_pasien_rme;
		$decodedData = json_decode($jsonRaw, true); // JSON ke array

		$idBerkas = $decodedData['id'] ?? null;
		/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		// BATAS AMBIL DATA
		$get_id_konten = $this->data_klaim_model->get_data_dari($id_kunjungan);
		if ($get_id_konten->num_rows() > 0) {
			$id_poli = $get_id_konten->row()->id_poly;  
			$admission_id_kunjungan = $get_id_konten->row()->admission_id_kunjungan;  
			
			if ($admission_id_kunjungan == NULL) {
				// DATA DARI ANTRIAN
				$post = $this->data_klaim_model->get_data_darirj($id_kunjungan);
				$tgl_admit2 = date($post->waktu_masuk);
				$tgl_admit = format_indo(date($post->waktu_masuk));
				$nama_pasien = $post->nama_pasien;
				$nik = $post->nik;
				$pendidikan_terakhir = $post->pendidikan_terakhir;
				$nama_pekerjaan = $post->nama_pekerjaan;
				$no_rm = $post->no_rm;
				$tgl_lahir = date('d / m / Y', strtotime($post->tanggal_lahir));
				$umur = countumur($post->tanggal_lahir);
				$jenkel = $post->jenkel;
				$alamatt = $post->alamat;
				$nama_agama = $post->nama_agama;
				$no_hp = $post->no_handphone;
				$nama_jenis_pasien = $post->nama_jenis_pasien;
				$nama_poli = $post->nama_poli;
				$nama_dokter = $post->nama_dokter;
				$tgl_discharge = $post->waktu_keluar ? format_indo(date($post->waktu_keluar)) : "";
				// DATA DARI ANTRIAN
			} else {
				// DATA DARI ADMISSION
				$post = $this->data_klaim_model->get_data_dariri($id_kunjungan);
				$post->jenkel = ($post->jenkel == 2) ? 'Perempuan' : 'Laki-laki';
				$nama_pasien = $post->nama_pasien;
				$nik = $post->nik;
				$pendidikan_terakhir = $post->pendidikan_terakhir;
				$nama_pekerjaan = $post->nama_pekerjaan;
				$no_rm = $post->no_rm;
				$tgl_lahir = date('d / m / Y', strtotime($post->tanggal_lahir));
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
				// DATA DARI ADMISSION
			}
		} else {
			redirect('backend/data_klaim');
		}
		// BATAS AMBIL DATA
		/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		
		

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
		$dokters_rm9 = $decodedData['dokter_umum'];
		// $result_dokter = $this->data_klaim_model->get_karyawan_by_nama($dokters);
		
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
	    <h3 align="right">' . $namaRM . '</h3>
	    <h2 align="center">' . $judulRM . '</h2>

	    <table class="table-borderless" cellpadding="5" cellspacing="0" width="100%">
	        <tr>
	            <td><b>Nama Pasien : </b>' . $nama_pasien . '</td>
	            <td><b>Jenis Kelamin :  </b>' . $jenkel . '</td>
	        </tr>
	        <tr>
	            <td><b>Tanggal Lahir : </b>' . $tgl_lahir . '</td>
	            <td><b>No. RM : </b>' . $no_rm . '</td>
	        </tr>
	    </table>

	    <table cellpadding="5" cellspacing="0" style="border:1px solid black; width:100%;">
	        <tr><td width="50%" style="border:1px solid black;"><b>Tanggal Masuk : </b>' . $tgl_admit . '</td><td  style="border:1px solid black;"><b>Ruang Rawat Terakhir :</b>' . $nama_ruangan . '</td></tr>
	        <tr><td width="50%" style="border:1px solid black;"><b>Tanggal Keluar/ Meninggal :</b> ' . $tgl_discharge . '</td><td  style="border:1px solid black;"><b>Penanggung Pembayaran :</b>' . $decodedData['penanggung_pembayaran'] . '</td></tr>
	        <tr><td colspan="2" style="border:1px solid black;"><b>Dokter Penanggung Jawab (DPJP) :</b> ' . $nama_dokter . '</td></tr>
	    </table>

	    <table cellpadding="5" cellspacing="0" style="border:1px solid black; width:100%;">
	        <tr><td colspan="2" style="border:1px solid black;"><b>Rawat tim dokter: </b>' . ($decodedData['rawat_tim_dokter'] === "ya" ? "Ya" : "Tidak") . '</td></tr>
	        <tr><td width="50%">1. dr : ' . $decodedData['dokter_umum_1'] . '</td><td>2. dr :' . $decodedData['dokter_umum_2'] . '</td></tr>
	        <tr><td width="50%">3. dr : ' . $decodedData['dokter_umum_3'] . '</td><td>4. dr :' . $decodedData['dokter_umum_4'] . '</td></tr>
	    </table>

	    <table cellpadding="5" cellspacing="0" style="border:1px solid black; width:100%;">
	        <tr><td width="20%" style="border:1px solid black;"><b>Alasan di Rawat</b></td><td width="80%" style="border:1px solid black;">' . $decodedData['alasan_dirawat'] . '</td></tr>
	        <tr><td width="20%" style="border:1px solid black;"><b>Diagnosa Masuk</b></td><td width="80%" style="border:1px solid black;">' . $decodedData['diagnosa_masuk'] . '</td></tr>
	        <tr><td width="20%" style="border:1px solid black;"><b>Diagnosa Keluar</b></td><td width="40%" style="border:1px solid black;">' . $decodedData['diagnosa_keluar'] . '</td><td width="40%" style="border:1px solid black;"><b>ICD10 Utama :</b>' . $decodedData['icd10_utama'] . '</td></tr>
	    </table>

	    <table cellpadding="5" cellspacing="0" style="border:1px solid black; width:100%;">
	        <tr><td colspan="2" style="border:1px solid black;"><b>Diagnosa Sekunder</b></td></tr>';

		for ($i = 1; $i <= 5; $i++) {
		    if (!empty($decodedData["diagnosis_sekunder_$i"])) {
		        $html1 .= '<tr><td width="20%"></td><td width="80%">' . $i . '. ' . $decodedData["diagnosis_sekunder_$i"] . '</td></tr>';
		    }
		}

		$html1 .= '</table>

		    <table cellpadding="5" cellspacing="0" style="border:1px solid black; width:100%;">
		        <tr><td width="20%" style="border:1px solid black;"><b>Penyebab Kematian (Secara Klinis)</b></td><td width="80%" style="border:1px solid black;">' . $decodedData['penyebab_kematian'] . '</td></tr>
		        <tr><td width="20%" style="border:1px solid black;"><b>Pemeriksaan Fisik Yang Penting</b></td><td width="80%" style="border:1px solid black;">' . $decodedData['pemeriksaan_fisik'] . '</td></tr>
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
		            <td width="70%">' . $detail['nama_transaksi'] . '</td>
		            <td align="center" width="10%">' .$detail['qty'] . '</td>
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
		<tr><td width="20%" style="border:1px solid black;"><b>Penunjang Lain</b></td><td width="80%" style="border:1px solid black;">' . $decodedData['penunjang_lain'] . '</td></tr>
		    <tr><td width="20%" style="border:1px solid black;"><b>Tindakan Operasi</b></td><td width="40%" style="border:1px solid black;">' . $decodedData['tindakan_operasi'] . '</td><td width="40%" style="border:1px solid black;"><b>ICD9 CM :</b>' . $decodedData['icd9cm'] . '</td></tr>
		    <tr><td width="20%" style="border:1px solid black;"><b>Keadaan Umum Pasien Saat Pulang</b></td>
		        <td colspan="2" style="border:1px solid black;"><b>Keadaan Umum : </b>' . $decodedData['keadaan_umum'] . '<br/>
		        <b>GCS : E:</b>' . $decodedData['gcs_e'] . '<b> M:</b>' . $decodedData['gcs_m'] . '<b> V:</b>' . $decodedData['gcs_v'] . '<br/>
		        <b>Tensi:</b>' . $decodedData['tensi'] . '<b> Respirasi:</b>' . $decodedData['respirasi'] . '<br/>
		        <b>Nadi:</b>' . $decodedData['nadi'] . '<b> Suhu:</b>' . $decodedData['suhu'] . '</td>
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
			    	<b>Kontrol Tanggal: </b>' . date('d / m / Y', strtotime($decodedData['kontrol_tanggal'])) . '<br/>
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
			        <td width="45%">' . $resep['nama_brand'] . '</td>
			        <td width="5%">' . $resep['qty'] . '</td>
			        <td width="7%">' . $dosis . '</td>
			        <td width="10%">' . $resep['frekuensi'] . '</td>
			        <td width="33%">' . $carapemberian . '</td>
			    </tr>';
			}

			if (empty($obat_rows)) {
			    $obat_rows = '<tr><td colspan="3" width="100%">- Tidak ada data -</td></tr>';
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


			// TTD
			$safe_filename_dokters_rm9 = $this->to_safe_filename($dokters_rm9) . '.jpg';
			$path_ttd_server_dokters = 'C:/xampp/htdocs/pmo/images/qrcodeIT/' . $safe_filename_dokters_rm9;
			$path_ttd_url_dokters = BASE_STORAGE . '/pmo/images/qrcodeIT/' . $safe_filename_dokters_rm9;
			$html2 .= '<h4 align="center">Tanggal : ' . date('d / m / Y', strtotime($decodedData['tanggal_tanda_tangan'])) . ' Jam : ' . $decodedData['jam_tanda_tangan'] . '</h4>
			           <h4 align="center">Yang Membuat,</h4>';
			if (file_exists($path_ttd_server_dokters)) {
			    $html2 .= '<div align="center">
			                   <img src="' . $path_ttd_url_dokters . '" width="80" height="80" />
			               </div>';
			} else {
			    
			}
			$html2 .= '<h4 align="center">' . $decodedData['dokter_umum'] . '</h4>';
			// TTD

		
		
		$pdf->writeHTML($html2, true, false, true, false, '');

	}
	// RM 9 URUTAN 1
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function _render_pdfrm2($id_kunjungan, $pdf)
	{
	    // Ambil data unit
	    $unit = $this->site_model->get_unit_data();
	    $lokasi = $unit['alamat'] . ', Kelurahan ' . $unit['nama_kel'] . ', Kecamatan ' . $unit['nama_kec'] . ', ' . $unit['nama_kab'] . ', ' . $unit['nama_prov'];

	    // Ambil data settings
	    $getsettings = $this->site_model->get_settings_data();
	    $site_title = $getsettings['nama'];
	    $imagesrm16 = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];

	    // Ambil data FORM RME
	    $berkas_klaim = 'rm2';
	    $formData = $this->data_klaim_model->get_by_id($id_kunjungan, $berkas_klaim);
	    if (!$formData) return;

	    $link = $formData->nama_berkas;
	    $jsonRaw = $formData->data_json;
	    $decodedData = json_decode($jsonRaw, true);

	    // Ambil data kunjungan
	    $get_id_konten = $this->data_klaim_model->get_data_dari($id_kunjungan);
	    if ($get_id_konten->num_rows() > 0) {
	        $admission_id_kunjungan = $get_id_konten->row()->admission_id_kunjungan;

	        if ($admission_id_kunjungan == NULL) {
	            $post = $this->data_klaim_model->get_data_darirj($id_kunjungan);
	            $no_bpjs = $post->no_bpjs;
	            $nama_pasien = $post->nama_pasien;
	            $nik = $post->nik;
	            $pendidikan_terakhir = $post->pendidikan_terakhir;
	            $nama_pekerjaan = $post->nama_pekerjaan;
	            $no_rm = $post->no_rm;
	            $tgl_lahir = date('d / m / Y', strtotime($post->tanggal_lahir));
	            $nama_suku = $post->nama_suku;
	            $umur = countumur($post->tanggal_lahir);
	            $jenkel = $post->jenkel;
	            $alamatt = $post->alamat;
	            $nama_agama = $post->nama_agama;
	            $no_hp = $post->no_handphone;
	            $nama_jenis_pasien = $post->nama_jenis_pasien;
	            $kelas = $post->klsrawat;
	            $nama_poli = $post->nama_poli;
	            $nama_dokter = $post->nama_dokter;
	            $nama_ruangan = '-';
	            $kelas = '-';
	        } else {
	            $post = $this->data_klaim_model->get_data_dariri($id_kunjungan);
	            // $post->jenkel = ($post->jenkel == 2) ? 'Perempuan' : 'Laki-laki';
	            $nama_pasien = $post->nama_pasien;
	            $nik = $post->nik;
	            $pendidikan_terakhir = $post->pendidikan_terakhir;
	            $nama_pekerjaan = $post->nama_pekerjaan;
	            $no_rm = $post->no_rm;
	            $tgl_lahir = date('d / m / Y', strtotime($post->tanggal_lahir));
	            $umur = countumur($post->tanggal_lahir);
	            $jenkel = $post->jenkel;
	            $alamatt = $post->alamat;
	            $nama_suku = $post->nama_suku;
	            $nama_agama = $post->nama_agama;
	            $no_hp = $post->no_handphone;
	            $nama_poli = $post->nama_poli;
	            $nama_dokter = $post->nama_dokter;
	            $nama_ruangan = $post->nama_ruangan;
	            $kelas = $post->klsrawat;
	        }
	    } else {
	        redirect('backend/data_klaim');
	    }

	    // Simpan data perawat jika level 13
	    $levelUser = $this->session->userdata('level');
	    if ($levelUser == 13) {
	        $post->id_perawat = $this->session->userdata('id');
	        $post->nama_perawat = $this->session->userdata('name');
	    }

	    // Ambil data menu
	    $postmenu = $this->admission_model->get_menu($link);
	    $judulRM = $postmenu->isi;
	    $namaRM = $postmenu->rm;

	    $pdf->AddPage();
	    $pdf->SetFont('times', '', 11);

	    // Header PDF
	    // HEADER PDF
		// Matikan GAMBAR HEADER
		$pdf->Image($imagesrm16, 10,10, 20, 20, '', '', 1, 0);
		$pdf->SetFont('times','B',16);
		$pdf->Cell(190,4,$site_title,0,1,'C');
		$pdf->SetFont('times','B',10);
		$pdf->MultiCell(45, 5, '', 0, 'C', 0, 0, '', '', true);
		$pdf->MultiCell(100, 5, $lokasi."\n", 0, 'C', 0, 1, '' ,'', true);
		$pdf->Cell(10,4,'',0,1);
		$pdf->writeHTML("<hr>", true, false, false, false, '');


	    // Identitas Pasien
	    $pdf->SetFont('times','',10);
	    $html = '
	    <h3 align="right">' . $namaRM . '</h3>
	    <h2 align="center">' . $judulRM . '</h2>
	    <table cellpadding="5" cellspacing="0" width="100%">
	        <tr>
	        	<td width="50%"><b>Nama Pasien : </b>' . $nama_pasien . '</td>
	        	<td width="50%"><b>Pendidikan : </b>' . $pendidikan_terakhir . '</td>
	        </tr>
	        <tr>
	            <td width="50%"><b>Tanggal Lahir/ Umur : </b>' . $tgl_lahir .' /'.$umur. '</td>
	            <td width="50%"><b>Pekerjaan : </b>' . $nama_pekerjaan . '</td>
	        </tr>
	        <tr>
	        	<td width="50%"><b>Jenis Kelamin : </b>' . $jenkel . '</td>
	        	<td width="50%"><b>NIK : </b>' . $nik . '</td>
	        </tr>
	        <tr>
	        	<td width="50%"><b>Agama : </b>' . $nama_agama . '</td>
	        	<td width="50%"><b>Suku/ Bangsa : </b>' . $nama_suku . '</td>
	        </tr>
	        <tr>
	        	<td width="50%"><b>Alamat : </b>' . $alamatt . '</td>
	        	<td width="50%"><b>No. RM : </b>' . $no_rm . '</td>
	        </tr>
	        
	    </table><br/>';
	    $tanggal = $decodedData['tanggal'];
		$waktu = $decodedData['waktu'];
		$bed = $decodedData['bed'];
		$nama_rs = $decodedData['nama_rs'];
		$lain_lain = $decodedData['lain_lain'];
		$status = $decodedData['status'];

		$html .= '
		<style>
		    .table-bordered {
		        border: 1px solid black;
		        border-collapse: collapse;
		        width: 100%;
		    }
		    .table-bordered td {
		        border: 1px solid black;
		        padding: 6px;
		        vertical-align: top;
		    }
		</style>

		<h4>(Diisi oleh Perawat)</h4>

		<table class="table-bordered">
		    <tr>
		        <td width="33%">
		            <b>Tanggal:</b> ' . htmlspecialchars($tanggal) . '
		        </td>
		        <td width="33%">
		            <b>Waktu:</b> ' . htmlspecialchars($waktu) . ' WIB
		        </td>
		        <td width="34%">
		            <b>Bed IGD No:</b> ' . htmlspecialchars($bed) . '
		        </td>
		    </tr>
		    <tr>
		        <td colspan="3">
		            <b>Di Bawa Ke RS Oleh:</b>&nbsp;&nbsp;';

		$options_rs = [
		    'keluarga' => 'Keluarga',
		    'datang_sendiri' => 'Datang Sendiri',
		    'polisi' => 'Polisi'
		];

		foreach ($options_rs as $val => $label) {
		    $checked = ($nama_rs == $val) ? '<b>[V]</b>' : '[ ]';	
		    $html .= $checked . ' ' . $label . '&nbsp;&nbsp;&nbsp;';
		}

		$html .= '
		            <label>Lain-lain:</label> ' . htmlspecialchars($lain_lain) . '
		        </td>
		    </tr>
		    <tr>
		        <td colspan="3">
		            <b>Status Fungsional:</b>&nbsp;&nbsp;';

		$options_status = [
		    'jalan_tanpa_bantuan' => 'Jalan Tanpa Bantuan',
		    'kursi_roda' => 'Kursi Roda',
		    'tempat_tidur' => 'Tempat Tidur Dorong',
		    'jalan_bantuan' => 'Jalan Dengan Bantuan'
		];

		foreach ($options_status as $val => $label) {
		    $checked = ($status == $val) ? '<b>[V]</b>' : '[ ]';
		    $html .= $checked . ' ' . $label . '&nbsp;&nbsp;&nbsp;';
		}

		$html .= '
		        </td>
		    </tr>
		</table>';

		

		function checked($name, $value, $data) {
		    return (isset($data[$name]) && $data[$name] === $value) ? '<b>[V]</b>' : '[ ]';
		}
		
		$html .= '
			<div class="row my-3">
			    <div style="padding-left: 1rem; padding-bottom: 0.5rem;">( Di isi oleh Dokter )</div>
			    <table border="1" cellspacing="0" cellpadding="5" width="100%">
			        <thead>
			            <tr>
			                <th colspan="6" align="center"><strong>TRIASE ( KATEGORI ATS SYSTEM )</strong></th>
			            </tr>
			            <tr align="center">
			                <th></th>
			                <th bgcolor="#dc3545" style="color:white;">Category 1<br>Segera</th>
			                <th bgcolor="#dc3545" style="color:white;">Category 2<br>10 Menit</th>
			                <th bgcolor="#ffc107" style="color:white;">Category 3<br>30 Menit</th>
			                <th bgcolor="#198754" style="color:white;">Category 3<br>60 Menit</th>
			                <th bgcolor="#198754" style="color:white;">Category 3<br>120 Menit</th>
			            </tr>
			        </thead>
			        <tbody>
			            <tr>
			                <td><strong>AIRWAY</strong></td>
			                <td>' . checked("value_1_1", "value_1_1", $decodedData) . ' Obstruksi jalan Nafas total<br>' .
			                     checked("value_1_2_airway", "value_1_2", $decodedData) . ' Parsial</td>
			                <td>' . checked("value_2_1", "value_2_1", $decodedData) . ' Patent</td>
			                <td>' . checked("airway_input_3", "value_3_1", $decodedData) . ' Patent</td>
			                <td>' . checked("airway_input_4", "value_4_1", $decodedData) . ' Patent</td>
			                <td>' . checked("airway_input_5", "value_5_1", $decodedData) . ' Patent</td>
			            </tr>
			            <tr>
			                <td><strong>BREATHING</strong></td>
			                <td>' .
			                    checked("breathing_input_1", "value_1_1", $decodedData) . ' Distress berat<br>' .
			                    checked("value_1_2", "value_1_2", $decodedData) . ' Respiratory arrest<br>' .
			                    checked("value_1_3_hipoventilasi", "value_1_3", $decodedData) . ' Hipoventilasi
			                </td>
			                <td>' . checked("breathing_input_2", "value_2_hipoventilasi", $decodedData) . ' Distress sedang</td>
			                <td>' . checked("breathing_input_3", "value_3_1", $decodedData) . ' Distress ringan</td>
			                <td>' . checked("breathing_input_4", "value_4_1", $decodedData) . ' Tidak ada gangguan</td>
			                <td>' . checked("breathing_input_5", "value_5_1", $decodedData) . ' Tidak ada gangguan</td>
			            </tr>
			            <tr>
			                <td><strong>CIRCULATION</strong></td>
			                <td>' .
			                    checked("circulation_input_1", "value_1_1", $decodedData) . ' Gangguan hemodinamik berat<br>' .
			                    checked("value_1_2_cardiac_arest", "value_1_2", $decodedData) . ' Cardiac arrest<br>' .
			                    checked("value_1_3_pendarahan", "value_1_3", $decodedData) . ' Pendarahan tidak terkontrol
			                </td>
			                <td>' .
			                    checked("circulation_input_2_1", "value_2_1", $decodedData) . ' Gangguan sedang<br>' .
			                    checked("circulation_input_2_2", "value_2_2", $decodedData) . ' Dehidrasi berat
			                </td>
			                <td>' .
			                    checked("circulation_input_3", "value_3_1", $decodedData) . ' Gangguan ringan<br>' .
			                    checked("circulation_input_3_2", "value_3_2", $decodedData) . ' Dehidrasi sedang
			                </td>
			                <td>' .
			                    checked("circulation_input_4", "value_4_1", $decodedData) . ' Tidak ada gangguan<br>' .
			                    checked("circulation_input_4_2", "value_4_2", $decodedData) . ' Dehidrasi ringan
			                </td>
			                <td>' . checked("circulation_input_5", "value_5_1", $decodedData) . ' Tidak ada gangguan</td>
			            </tr>
			            <tr>
			                <td><strong>DISABILITY</strong></td>
			                <td>' . checked("disability_input_1", "value_1_1", $decodedData) . ' GCS < 9</td>
			                <td>' .
			                    checked("disability_input_2_1", "value_2_1", $decodedData) . ' GCS 9-12<br>' .
			                    checked("disability_input_2_2", "value_2_2", $decodedData) . ' Penurunan aktivitas berat
			                </td>
			                <td>' .
			                    checked("disability_input_3", "value_3_1", $decodedData) . ' GCS 13-14<br>' .
			                    checked("disability_input_3_2", "value_3_2", $decodedData) . ' Penurunan aktivitas sedang
			                </td>
			                <td>' .
			                    checked("disability_input_4", "value_4_1", $decodedData) . ' GCS normal<br>' .
			                    checked("disability_input_4_2", "value_4_2", $decodedData) . ' Penurunan ringan
			                </td>
			                <td>' . checked("disability_input_5", "value_5_1", $decodedData) . ' GCS normal</td>
			            </tr>


			            <tr>
			                <td colspan="6">
			                    <div class="p-2 fst-italic">Catatan : apabila terdapat satu atau lebih fator untuk cedera / penyakit yang serius (seperti usia beresiko tinggi, riwayat kesehatan yang buruk, mekanisme cedera yang parah, beresiko penyakit jantung,memiliki efek obat / alkohol, ruam dan perubahan suhu tubuh) harus dipertimbangkan untuk meningkatkan kategori triase pasien.</div>
			                </td>
			            </tr>


			            <tr>
					        <td colspan="6">
					            <strong>Kategori Nyeri:</strong><br/>
					            ' . checked("kategori_nyeri", "tidak_nyeri", $decodedData) . ' Tidak Nyeri &nbsp;&nbsp;
					            ' . checked("kategori_nyeri", "nyeri_ringan", $decodedData) . ' Nyeri Ringan &nbsp;&nbsp;
					            ' . checked("kategori_nyeri", "nyeri_sedang", $decodedData) . ' Nyeri Sedang &nbsp;&nbsp;
					            ' . checked("kategori_nyeri", "nyeri_berat", $decodedData) . ' Nyeri Berat
					        </td>
					    </tr>

					    <tr>
					        <td colspan="6">
					            <strong>Gangguan Perilaku:</strong><br/>
					            ' . checked("gangguan_perilaku", "tidak_terganggu", $decodedData) . ' Tidak Terganggu &nbsp;&nbsp;
					            ' . checked("gangguan_perilaku", "ada_gangguan", $decodedData) . ' Ada Gangguan &nbsp;&nbsp;
					            ' . checked("gangguan_perilaku", "tidak_membahayakan", $decodedData) . ' Tidak Membahayakan &nbsp;&nbsp;
					            ' . checked("gangguan_perilaku", "membahayakan", $decodedData) . ' Membahayakan diri sendiri/orang lain
					        </td>
					    </tr>


		        </tbody>
		    </table>
		</div>';
		$pdf->writeHTML($html, true, false, true, false, '');

		//$pdf->AddPage();
		$html1 ='
		<div class="row my-3">
		    <table border="1" cellspacing="0" cellpadding="5" width="100%">
		        <thead>
		            <tr>
		                <th></th>
		            </tr>
		        </thead>
		        <tbody>
		            <tr>
		                <td colspan="6">
		                    <strong>Cara Anamnesa:</strong>
		                    ' . checked("cara_anamnesa", "auto_anamnesa", $decodedData) . ' Auto Anamnesa &nbsp;&nbsp;
		                    ' . checked("cara_anamnesa", "allo_anamnesa", $decodedData) . ' Allo Anamnesa
		                </td>
		            </tr>

		            <tr>
		                <td colspan="6" style="padding-top: 3px;">
		                    <div class="fw-bold col-2"><strong>Keluhan Utama :</strong></div>
		                    <div style="margin-top: -2px;">' . $decodedData['keluhan_utama'] . '</div>
		                </td>
		            </tr>

		            <tr>
		                <td colspan="6" style="padding-top: 3px;">
		                    <div class="fw-bold col-2"><strong>Riwayat Penyakit Terdahulu / Riwayat Kehamilan / Riwayat Operasi / Riwayat Transfusi :</strong></div>
		                    <div style="margin-top: -2px;">' . $decodedData['riwayat_penyakit'] . '</div>
		                </td>
		            </tr>

		            <tr>
		                <td colspan="6" style="padding-top: 3px;">
		                    <div class="fw-bold col-2"><strong>Riwayat Penggunaan Obat dan Diet terakhir :</strong></div>
		                    <div style="margin-top: -2px;">' . $decodedData['riwayat_penggunaan_obat'] . '</div>
		                </td>
		            </tr>

		            <tr>
		                <td colspan="6" style="padding-top: 3px;">
		                    <div class="fw-bold col-2"><strong>Riwayat Pemeriksaan Penunjang :</strong></div>
		                    <div style="margin-top: -2px;">' . $decodedData['riwayat_pemeriksaan'] . '</div>
		                </td>
		            </tr>

		            <tr>
		                <td colspan="6" style="padding-top: 3px;">
		                    <div class="fw-bold col-2"><strong>Riwayat alergi Obat dan Makanan :</strong></div>
		                    <div style="margin-top: -2px;">' . $decodedData['riwayat_alergi'] . '</div>
		                </td>
		            </tr>

		        </tbody>
		    </table>
		</div>';


		function checked2($name, $value, $data) {
		    return (isset($data[$name]) && $data[$name] === $value) ? '<b>[V]</b>' : '[ ]';
		}

		function field($key, $data) {
		    return isset($data[$key]) ? htmlspecialchars($data[$key]) : '';
		}

		$html1 .= '
		<div class="row">
		    <table class="table-bordered border-dark" border="1" width="100%" cellpadding="5">
		        <tbody>
		            <tr class="text-center">
		                <td rowspan="4" style="width: 90px;"><strong>Primary Survey</strong></td>
		                <td style="vertical-align: middle;width: 90px;"><strong>AIR WAY</strong><br>dengan C-spine control</td>
		                <td style="vertical-align: middle;width: 90px;"><strong>BREATHING</strong></td>
		                <td style="width: 200px;"><strong>CIRCULATION</strong></td>
		                <td style="width: 200px;"><strong>DISABILITY / NEUROLOGICAL</strong></td>
		            </tr>

		            <tr>
		                <td  style="width: 90px;">
		                    <div style="width: 90px;">
		                        ' . checked2("survey_airway", "bebas_airway", $decodedData) . ' Bebas<br>
		                        ' . checked2("survey_airway", "garling_airway", $decodedData) . ' Garling<br>
		                        ' . checked2("survey_airway", "stridor__airway", $decodedData) . ' Stridor<br>
		                        ' . checked2("survey_airway", "whezing_airway", $decodedData) . ' Whezing<br>
		                        ' . checked2("survey_airway", "ronchi_airway", $decodedData) . ' Ronchi<br>
		                        ' . checked2("survey_airway", "teritunbasi_airway", $decodedData) . ' Teritunbasi<br>
		                        <div>' . field("input_lain_teritunbasi_1", $decodedData) . '</div>
		                        <div>' . field("input_lain_teritunbasi_2", $decodedData) . '</div>
		                        <div>' . field("input_lain_teritunbasi_3", $decodedData) . '</div>
		                        <div>' . field("input_lain_teritunbasi_4", $decodedData) . '</div>
		                    </div>
		                </td>

		                <td  style="width: 90px;">
		                	<div style="width: 90px;">
		                        ' . checked2("survey_respiratory", "spontan", $decodedData) . ' Spontan<br>
		                        ' . checked2("survey_respiratory", "tachipneu", $decodedData) . ' Tachipneu<br>
		                        ' . checked2("survey_respiratory", "dispneu", $decodedData) . ' Dispneu<br>
		                        ' . checked2("survey_respiratory", "apneu", $decodedData) . ' Apneu<br>
		                        ' . checked2("survey_respiratory", "ventilasi_mekanik", $decodedData) . ' Ventilasi Mekanik<br>
		                        <div>' . field("input_lain_ventilasi_1", $decodedData) . '</div>
		                        <div>' . field("input_lain_ventilasi_2", $decodedData) . '</div>
		                        <div>' . field("input_lain_ventilasi_3", $decodedData) . '</div>
		                        <div>' . field("input_lain_ventilasi_4", $decodedData) . '</div>
		                        <div>' . field("input_lain_ventilasi_5", $decodedData) . '</div>
		                    </div>

		                </td>
		                <td style="width: 200px;">
		                	
						    <div style="display: flex; flex-direction: column; gap: 6px;">
						        
						        <div><strong>Nadi:</strong>
						            ' . checked2("nadi", "kuat", $decodedData) . ' Kuat
						            ' . checked2("nadi", "lemah", $decodedData) . ' Lemah
						        </div>

						        <div><strong>CRT:</strong>
						            ' . checked2("crt", "2", $decodedData) . ' lebih kecil 2
						            ' . checked2("crt", "2l", $decodedData) . ' lebih besar 2
						        </div>

						        <div><strong>Warna Kulit:</strong>
						            ' . checked2("warna_kulit", "normal", $decodedData) . ' Normal<br>
						            ' . checked2("warna_kulit", "pucat", $decodedData) . ' Pucat
						            ' . checked2("warna_kulit", "kuning", $decodedData) . ' Kuning
						        </div>

						        <div><strong>Pendarahan:</strong>
						            ' . checked2("pendarahan", "tidak_ada", $decodedData) . ' Tidak ada<br>
						            ' . checked2("pendarahan", "terkontrol", $decodedData) . ' Terkontrol<br>
						            ' . checked2("pendarahan", "tidak_terkontrol", $decodedData) . ' Tidak terkontrol
						        </div>

						        <div><strong>Turgor Kulit:</strong><br>
						            ' . checked2("turgor_kulit", "baik", $decodedData) . ' Baik
						            ' . checked2("turgor_kulit", "buruk", $decodedData) . ' Buruk
						        </div>

						        <div><strong>Lain-lain:</strong> ' . field("lain_circulation", $decodedData) . '</div>
						    </div>


		                </td>
		                <td style="width: 200px;">
						    <div style="display: flex; flex-direction: column; gap: 6px; padding: 10px;">

						        <!-- Respon -->
						        <div><strong>Respon:</strong><br>
						            ' . checked2("respon", "alert", $decodedData) . ' Alert<br>
						            ' . checked2("respon", "pain", $decodedData) . ' Pain<br>
						            ' . checked2("respon", "verbal", $decodedData) . ' Verbal<br>
						            ' . checked2("respon", "unrespon", $decodedData) . ' Unrespon
						        </div>

						        <!-- Pupil -->
						        <div><strong>Pupil:</strong>
						            ' . field("l_pupil", $decodedData) . ' / ' . field("r_pupil", $decodedData) . ' mm
						        </div>

						        <!-- Pupil Type -->
						        <div><strong>Pupil Type:</strong><br>
						            ' . checked2("pupil_type", "isokor", $decodedData) . ' Isokor<br>
						            ' . checked2("pupil_type", "anisokor", $decodedData) . ' Anisokor<br>
						            ' . checked2("pupil_type", "pin_point", $decodedData) . ' Pin Point<br>
						            ' . checked2("pupil_type", "midriasis", $decodedData) . ' Midriasis
						        </div>

						        <!-- Reflek Cahaya -->
						        <div><strong>Reflek Cahaya:</strong><br>
						            ' . field("l_reflek", $decodedData) . ' / ' . field("r_reflek", $decodedData) . '
						        </div>

						        <!-- GCS -->
						        <div><strong>GCS:</strong><br>
						            E: ' . field("eye_gcs", $decodedData) . ' &nbsp;&nbsp;
						            V: ' . field("verbal_gcs", $decodedData) . ' &nbsp;&nbsp;
						            M: ' . field("motor_gcs", $decodedData) . '
						        </div>

						        <!-- Lain-lain -->
						        <div><strong>Lain-lain:</strong> ' . field("lain_disability", $decodedData) . '</div>
						    </div>
		                </td>
		            </tr>

		            <tr>
		                <td>
		                    <div class="p-2 text-center">
		                        <div class="fw-bold"><b>Tindakan Resusitasi(*bila ada)</b>' . $decodedData['rsusitasi1'] . '</div>
		                    </div>
		                </td>
		                <td>
		                    <div class="p-2 text-center">
		                        <div class="fw-bold"><b>Tindakan Resusitasi(*bila ada)</b> ' . $decodedData['rsusitasi2'] . '</div>
		                    </div>
		                </td>
		                <td rowspan="2">
		                    <div class="p-2 text-center">
		                        <div class="fw-bold"><b>Tindakan Resusitasi(*bila ada)</b> ' . $decodedData['rsusitasi'] . '</div>
		                    </div>
		                </td>
		                <td rowspan="2" colspan="2">
		                    <div class="p-2">
		                        <div class="fw-bold text-center"><b>Exposure</b></div>
		                        <div class="d-flex flex-column gap-2">
		                            <div>
		                                <label for=""><b>Luka di :</b>' . $decodedData['luka_exposure'] . '</label>
		                            </div>
		                            <div>
		                                <label for=""><b>Lain-lain :</b>' . $decodedData['lain-exposure'] . '</label>
		                            </div>
		                        </div>
		                    </div>
		                </td>
		            </tr>
		            <tr>
		                <td colspan="2">
		                    <div>
		                        <b>BB </b>' . $decodedData['bb_exposure'] . '<b> Kg</b>&nbsp;&nbsp;&nbsp;
		                        <b>TB/PB </b>' . $decodedData['tb_exposure'] . '<b> Cm</b>
		                    </div>
		                </td>
		            </tr>
		        </tbody>
		    </table>
		</div>';

		$pdf->writeHTML($html1, true, false, true, false, '');

		$td = $decodedData['td_secondary'] ?? '';
		$nadi = $decodedData['nadi_secondary'] ?? '';
		$napas = $decodedData['bernapas_secondary'] ?? '';
		$spo2 = $decodedData['spo2_secondary'] ?? '';
		$suhu = $decodedData['suhu_secondary'] ?? '';

		$pdf->SetFont('times', '', 10);

		$xAwal = $pdf->GetX();
		$yAwal = $pdf->GetY();
		$lebarKolomLabel = 10;
		$tinggiBaris = 113; 

		$pdf->MultiCell($lebarKolomLabel, $tinggiBaris, '', 1, 'C', 0, 0, $xAwal, $yAwal, true);

		$pdf->SetFont('times', 'B', 10);
		// rotasi teks 90 derajat
		$pdf->StartTransform();
		$pdf->Rotate(-90, $xAwal, $yAwal);
		$pdf->Text($xAwal, $yAwal - 7, 'SECONDARY SURVEY'); // sesuaikan Y biar naik
		$pdf->StopTransform();


		$pdf->SetXY($xAwal + $lebarKolomLabel, $yAwal);
		$pdf->SetFont('times', '', 10);

		$html2 = '
		<table border="1" cellpadding="5" cellspacing="0" width="94%">
		    <tr>
		        <td width="18%"><b>TD</b> :' . htmlspecialchars($td) . ' <b>mmHg</b></td>
		        <td width="21%"><b>Nadi</b> :' . htmlspecialchars($nadi) . ' <b>x/menit</b></td>
		        <td width="24%"><b>Bernapas</b> :' . htmlspecialchars($napas) . ' <b>x/menit</b></td>
		        <td width="22%"><b>SpO2</b> :' . htmlspecialchars($spo2) . ' <b>%</b></td>
		        <td width="22%"><b>Suhu</b> :' . htmlspecialchars($suhu) . ' <b>&deg;C</b></td>
		    </tr>
		    <tr>
		        <td colspan="3" class="p-2">
		            <div style="font-weight:bold; text-align:center;">PEMERIKSAAN FISIK</div>
		        </td>
		        <td colspan="2" class="p-2">
		            <div style="font-weight:bold; text-align:center;">Status Lokalisata</div>
		            <div style="text-align:center;">(*berikan petunjuk dan serta jelaskan sifat, jenis, ukuran, lokasi, dan tindakan yang dilakukan)</div>
		        </td>
		    </tr>
		</table>';

		$pdf->writeHTML($html2, true, false, true, false, '');

		$baseImagePath = FCPATH . 'assets2/rme/img/ss.png';
		$mergedImagePath = FCPATH . 'assets2/rme/img/merged_ss' . $id_kunjungan . '.png';

		if (file_exists($baseImagePath) && !empty($decodedData['image_drawer']['state_image_1'])) {
		    $imgJson = $decodedData['image_drawer']['state_image_1'];
		    $imgData = json_decode($imgJson, true);

		    if (!empty($imgData['markers'])) {
		        $baseImage = imagecreatefrompng($baseImagePath);
		        if ($baseImage) {
		            $baseWidth = imagesx($baseImage);
		            $baseHeight = imagesy($baseImage);
		            $jsonWidth = $imgData['width'] ?? $baseWidth;
		            $jsonHeight = $imgData['height'] ?? $baseHeight;

		            $scaleX = $baseWidth / $jsonWidth;
		            $scaleY = $baseHeight / $jsonHeight;
		            $strokeColor = imagecolorallocate($baseImage, 239, 68, 68); // #EF4444

		            foreach ($imgData['markers'] as $marker) {
		                $type = $marker['typeName'] ?? 'FrameMarker';
		                if ($type === 'FrameMarker') {
		                    $left = (int)(($marker['left'] ?? 0) * $scaleX);
		                    $top = (int)(($marker['top'] ?? 0) * $scaleY);
		                    $width = (int)(($marker['width'] ?? 1) * $scaleX);
		                    $height = (int)(($marker['height'] ?? 1) * $scaleY);
		                    $stroke = (int)($marker['strokeWidth'] ?? 1);
		                    imagesetthickness($baseImage, $stroke);
		                    imagerectangle($baseImage, $left, $top, $left + $width, $top + $height, $strokeColor);
		                } elseif ($type === 'FreehandMarker' && !empty($marker['drawingImgUrl'])) {
		                    $src = $marker['drawingImgUrl'];
		                    if (strpos($src, 'data:image') === 0) {
		                        [$meta, $content] = explode(',', $src);
		                        $imageData = base64_decode($content);
		                        $overlayImage = imagecreatefromstring($imageData);
		                        if ($overlayImage) {
		                            $overlayWidth = imagesx($overlayImage);
		                            $overlayHeight = imagesy($overlayImage);
		                            $left = (int)(($marker['left'] ?? 0) * $scaleX);
		                            $top = (int)(($marker['top'] ?? 0) * $scaleY);
		                            $width = (int)(($marker['width'] ?? $overlayWidth) * $scaleX);
		                            $height = (int)(($marker['height'] ?? $overlayHeight) * $scaleY);
		                            $resizedOverlay = imagecreatetruecolor($width, $height);
		                            imagealphablending($resizedOverlay, false);
		                            imagesavealpha($resizedOverlay, true);
		                            $transparent = imagecolorallocatealpha($resizedOverlay, 0, 0, 0, 127);
		                            imagefilledrectangle($resizedOverlay, 0, 0, $width, $height, $transparent);
		                            imagecopyresampled($resizedOverlay, $overlayImage, 0, 0, 0, 0, $width, $height, $overlayWidth, $overlayHeight);
		                            imagecopy($baseImage, $resizedOverlay, $left, $top, 0, 0, $width, $height);
		                            imagedestroy($overlayImage);
		                            imagedestroy($resizedOverlay);
		                        }
		                    }
		                }
		            }

		            imagepng($baseImage, $mergedImagePath);
		            imagedestroy($baseImage);

		            if (file_exists($mergedImagePath)) {
		                $x = 127;
		                $y = $yAwal + 33; // Atur agar sejajar vertikal dengan tabel
		                $pdf->Image($mergedImagePath, $x, $y, 73, 80, 'PNG');
		                unlink($mergedImagePath);
		            }
		        }
		    }
		}

		$html3 = '
			<tr>
			    <td colspan="3">
			            <table border="1" cellpadding="5" cellspacing="0" width="100%">
			                <tr align="center">
			                    <td width="18%"><strong>Anggota Tubuh</strong></td>
			                    <td width="18%"><strong>Normal (*beri tanda benar)</strong></td>
			                    <td width="23%"><strong>Abnormal (jelaskan)</strong></td>
			                    <td width="41%"></td>
			                </tr>';

			$parts = [
			    ["name" => "kepala", "label" => "Kepala"],
			    ["name" => "mata", "label" => "Mata"],
			    ["name" => "leher", "label" => "Leher"],
			    ["name" => "tht", "label" => "THT"],
			    ["name" => "mulut", "label" => "Mulut"],
			    ["name" => "thoraks", "label" => "Thoraks"],
			    ["name" => "abdomen", "label" => "Abdomen"],
			    ["name" => "genitalia", "label" => "Genitalia"],
			    ["name" => "extremitas", "label" => "Extremitas"],
			];

			foreach ($parts as $part) {
			    $name = $part['name'];
			    $label = $part['label'];
			    
			    // Ambil data dari $decodedData
			    $isChecked = isset($decodedData["cek_$name"]) && $decodedData["cek_$name"] === "on" ? "<b>[V]</b>" : "[]";
			    $abnormal = htmlspecialchars($decodedData["ket_$name"] ?? "");

			    $html3 .= '
			                <tr align="center">
			                    <td>' . $label . '</td>
			                    <td>' . $isChecked . '</td>
			                    <td>' . $abnormal . '</td>
			                </tr>';
			}

			$html3 .= '
			            </table>
			    </td>
			</tr>';

			$pdf->SetXY(19, 110); // Ini akan mengatur posisi kursor ke titik (100, 110)

			$pdf->writeHTML($html3, true, false, true, false, '');

			$html4 = '<div class="fw-bold my-2"><b>Pemeriksaaan Penunjang</b></div>';
			$pdf->Ln(2); // Tambah spasi 2 mm
			$html4 .= '
			<table border="1" cellpadding="4" cellspacing="0" width="100%" style="border-collapse: collapse;">
			    <thead>
			        <tr>
			            <th width="20%"><b>Jenis</b></th>
			            <th width="40%"><b>Nama Pemeriksaan</b></th>
			            <th width="20%"><b>Tanggal</b></th>
			            <th width="20%"><b>Qty / Hasil</b></th>
			        </tr>
			    </thead>
			    <tbody>';

			$invoice_data = $this->data_klaim_model->get_invoice_data($id_kunjungan);
			$rad_data = $this->data_klaim_model->get_radiologi_by_patient($id_kunjungan);
			$lab_rows = '';
			$last_kunjungan = null;

			foreach ($invoice_data as $invoice) {
			    foreach ($invoice['details'] as $detail) {
			        $html4 .= '<tr>
			            <td width="20%"><b>Laboratorium</b></td>
			            <td width="40%">' . $detail['nama_transaksi'] . '</td>
			            <td width="20%">' . date('d-m-Y', strtotime($detail['tanggal_input'])) . '</td>
			            <td align="center" width="20%">' . $detail['qty'] . '</td>
			        </tr>';
			    }
			}
			if (!empty($rad_data)) {
			    foreach ($rad_data as $row) {
			        $hasil = $row['title'] . ' ' . $row['note'];
			        $html4 .= '<tr>
			            <td width="20%"><b>Radiologi</b></td>
			            <td width="40%">' . $row['nama'] . '</td>
			            <td width="20%">' . date('d-m-Y', strtotime($row['created_at'])) . '</td>
			            <td width="20%">' . $hasil . '</td>
			        </tr>';
			    }
			}
			$ekgText = '';
			foreach ($decodedData['lain_penunjang2'] as $item) {
			    if (stripos($item, 'EKG') !== false) {
			        $ekgText = $item;
			        break;
			    }
			}
			if (!empty($ekgText)) {
			    $html4 .= '<tr>
			        <td width="20%"><b>EKG</b></td>
			        <td width="40%">' . $ekgText . '</td>
			        <td width="20%">-</td>
			    </tr>';
			}
			$html4 .= '</tbody></table>';
			

			$html4 .= '
			<br><br>
			<table border="1" cellpadding="5" cellspacing="0" width="100%">
			    <thead>
			        <tr>
			            <th colspan="2" align="center"><b>Diagnosa Kerja & Prognosis</b></th>
			        </tr>
			    </thead>
			    <tbody>
			        <tr>
			            <td width="50%">
			                <b>Diagnosa Utama:</b><br>' . htmlspecialchars($decodedData["diagnosa1"]) . '
			            </td>
			            <td width="50%">
			                <b>Diagnosa Utama Tambahan:</b><br>' . htmlspecialchars($decodedData["diagnosa3"]) . '
			            </td>
			        </tr>
			        <tr>
			            <td colspan="2">
			                <b>Diagnosa Tambahan:</b><br>' . htmlspecialchars($decodedData["diagnosa2"]) . '
			            </td>
			        </tr>
			        <tr>
			            <td colspan="2">
			                <b>Prognosis:</b><br>' . nl2br(htmlspecialchars($decodedData["prognosis"])) . '
			            </td>
			        </tr>
			    </tbody>
			</table>
			';

			$pdf->writeHTML($html4, true, false, true, false, '');
			$pdf->AddPage();

			// Ambil data dari JSON
			$edukasi_awal_dd = $decodedData['edukasi_awal_dd'] ?? '';
			$input_kk_dd = $decodedData['input_kk_dd'] ?? '';
			$input_td_dd = $decodedData['input_td_dd'] ?? '';
			$catatan_ringkas = $decodedData['catatan_ringkas'] ?? '';
			$indikasi_op = $decodedData['indikasi_op'] ?? '';

			$nyeri_op = $decodedData['nyeri_op'] ?? '';
			$faktor_op = $decodedData['faktor_op'] ?? '';
			$fakto_kurang_op = $decodedData['fakto_kurang_op'] ?? '';
			$frekuensi_op = $decodedData['frekuensi_op'] ?? '';
			$lokasi_op = $decodedData['lokasi_op'] ?? '';
			$menajalar_op = $decodedData['menajalar_op'] ?? '';
			$lama_nyeri_op = $decodedData['lama_nyeri_op'] ?? '';

			$chries = $decodedData['chries'] ?? '';
			$skala_cries = $decodedData['skala_cries'] ?? '';

			$flacc = $decodedData['flacc'] ?? '';
			$skala_flacc = $decodedData['skala_flacc'] ?? '';

			$cpot = $decodedData['cpot'] ?? '';
			$wong = $decodedData['wong'] ?? '';
			$numerik = $decodedData['numerik'] ?? '';



			// IDENTIFIKASI PASIEN MASUK
			$html5 = '
			<br><br>
			<table border="1" cellpadding="5" cellspacing="0" width="100%">
			    <thead>
			        <tr>
			            <th colspan="4"><b>Identifikasi Pasien Masuk</b></th>
			        </tr>
			    </thead>
			    <tbody>
			        <tr>';

			$jenis_masuk = [
			    'preventif_p_masuk' => 'Preventif',
			    'kuratif_p_masuk' => 'Kuratif',
			    'palatif_p_masuk' => 'Paliatif',
			    'rehab_p_masuk' => 'Rehabilitatif'
			];

			foreach ($jenis_masuk as $key => $label) {
			    $check = ($decodedData['identifikasi_pasien_masuk'] ?? '') === $key ? '<b>[V]</b>' : '[ ]';
			    $html5 .= '<td>' . $check . ' ' . $label . '</td>';
			}

			$html5 .= '</tr>
			    </tbody>
			</table>';

			// INTRUKSI TINDAK LANJUT
			$html5 .= '
			<br>
			<table border="1" cellpadding="5" cellspacing="0" width="100%">
			    <thead>
			        <tr>
			            <th colspan="4"><b>Instruksi Tindak Lanjut</b></th>
			        </tr>
			    </thead>
			    <tbody>
			        <tr>';

			$tindak_lanjut = [
			    'tatalaksana' => 'Tata Laksana',
			    'pengobatan' => 'Pengobatan',
			    'Tindakan' => 'Tindakan',
			    'Konsul' => 'Konsul'
			];

			foreach ($tindak_lanjut as $key => $label) {
			    $check = (isset($decodedData[$key]) && $decodedData[$key] === 'on') ? '<b>[V]</b>' : '[ ]';
			    $html5 .= '<td>' . $check . ' ' . $label . '</td>';
			}

			$html5 .= '</tr>
			        <tr>
			            <td colspan="4"><b>Keterangan:</b><br>' . nl2br(htmlspecialchars($decodedData['intruksi_tindakan_lanjut'] ?? '-')) . '</td>
			        </tr>
			        <tr>
					    <td width="30%" style="font-weight:bold; padding:5px;">Edukasi Pasien</td>
					    <td width="70%" style="padding:5px;">
					        Edukasi awal, disampaikan diagnosis, rencana dan tujuan terapi kepada:
					        <ul style="margin:5px 0 0 10px; padding-left:10px;">
					            ' . ($edukasi_awal_dd == 'pasien_dd' ? '<b>[V]</b>' : '[]') . ' Pasien<br>
					            ' . ($edukasi_awal_dd == 'keluarga_dd' ? '<b>[V]</b>' : '[]') . ' Keluarga Pasien, Nama: <u>' . htmlspecialchars($input_kk_dd) . '</u><br>
					            ' . ($edukasi_awal_dd == 'tidak_dd' ? '<b>[V]</b>' : '[]') . ' Tidak dapat memberikan edukasi kepada pasien atau keluarga, karena: <u>' . htmlspecialchars($input_td_dd) . '</u>
					        </ul>
					    </td>
					</tr>
					<tr>
					    <td colspan="2" style="padding:5px;">
					        <div style="font-weight:bold;">CATATAN RINGKAS <i>(*hanya diisi apabila pasien membutuhkan operasi segera / emergency)</i></div>
					        <div style="padding:5px; min-height:60px; margin-top:3px;">' . htmlspecialchars($catatan_ringkas) . '</div>
					        
					        <div style="margin-top:10px; font-weight:bold;">Indikasi Operasi</div>
					        <div style="padding:5px; min-height:60px; margin-top:3px;">' . htmlspecialchars($indikasi_op) . '</div>
					    </td>
					</tr>

			    </tbody>
			</table>';

			$html5 .= '
			<table border="1" cellpadding="4" cellspacing="0" width="100%" style="margin-top:10px;">
			    <tr>
			        <td width="50%">
			            <b>Nyeri:</b><br />
			            <span style="margin-left:10px;">' .
			                ($nyeri_op == 'op_ya' ? '<b>[V]</b>' : '[]') . ' Ya &nbsp;&nbsp;&nbsp;' .
			                ($nyeri_op == 'op_tidak' ? '<b>[V]</b>' : '[]') . ' Tidak
			            </span><br /><br />

			            <b>Faktor-Faktor Pemicu:</b><br />
			            <div style="padding:3px; min-height:20px;">' . htmlspecialchars($faktor_op) . '</div><br />

			            <b>Faktor-Faktor Mengurangi Nyeri:</b><br />
			            <div style="padding:3px; min-height:20px;">' . htmlspecialchars($fakto_kurang_op) . '</div><br />

			            <b>Frekuensi:</b><br />
			            <div style="padding:3px; min-height:20px;">' . htmlspecialchars($frekuensi_op) . ' x/hari</div>
			        </td>

			        <td width="50%">
			            <b>Lokasi:</b><br />
			            <div style="padding:3px; min-height:20px;">' . htmlspecialchars($lokasi_op) . '</div><br />

			            <b>Menjalar:</b><br />
			            <div style="padding:3px; min-height:20px;">' . htmlspecialchars($menajalar_op) . '</div><br />

			            <b>Lama Nyeri:</b><br />
			            <div style="padding:3px; min-height:20px;">' . htmlspecialchars($lama_nyeri_op) . '</div>
			        </td>
			    </tr>
			</table>';


			$html5 .= '
				<table border="1" cellpadding="5" cellspacing="0" width="100%">
				    <tr>
				        <td colspan="2" align="center"><b>TOOLS YANG DIGUNAKAN (*pilih dan kaji sesuai keadaan pasien)</b></td>
				    </tr>
				    <tr>
				        <td width="50%" valign="top">
				            <b>CRIES (usia &lt; 2 bulan)</b><br />
				            <span style="margin-left:10px;">' . ($chries == 'on' ? '<b>[V]</b>' : '[]') . ' Digunakan</span><br />
				            <b>Skala Nyeri:</b> ' . htmlspecialchars($skala_cries) . '<br /><br />
				            <table border="1" cellpadding="4" cellspacing="0" width="100%">
				                <thead>
				                    <tr align="center">
				                        <th>Ketegori</th>
				                        <th>0</th>
				                        <th>1</th>
				                        <th>2</th>
				                    </tr>
				                </thead>
				                <tbody>
				                    <tr>
				                        <td>Crying (Menangis)</td>
				                        <td>Tidak ada</td>
				                        <td>Menangis kuat dapat dihibur</td>
				                        <td>Menangis kuat tidak dapat dihibur</td>
				                    </tr>
				                    <tr>
				                        <td>Requires O<sub>2</sub> untuk saturasi > 95%</td>
				                        <td>Tidak ada</td>
				                        <td>&lt; 30%</td>
				                        <td>&gt; 30%</td>
				                    </tr>
				                    <tr>
				                        <td>Tanda Vital Meningkat</td>
				                        <td>&lt; 20% nilai dasar</td>
				                        <td>&lt; 20% nilai dasar</td>
				                        <td>&gt; 20% nilai dasar</td>
				                    </tr>
				                    
				                </tbody>
				            </table>
				        </td>

				        <td width="50%" valign="top">
				            <b>FLACC (usia 2 bulan - 3 tahun)</b><br />
				            <span style="margin-left:10px;">' . ($flacc == 'on' ? '<b>[V]</b>' : '[]') . ' Digunakan</span><br />
				            <b>Skala Nyeri:</b> ' . htmlspecialchars($skala_flacc) . '<br /><br />
				            <table border="1" cellpadding="4" cellspacing="0" width="100%">
				                <thead>
				                    <tr align="center">
				                        <th>Ketegori</th>
				                        <th>0</th>
				                        <th>1</th>
				                        <th>2</th>
				                    </tr>
				                </thead>
				                <tbody>
				                    <tr>
				                        <td>Wajah</td>
				                        <td>Tidak ada ekspresi/senyum</td>
				                        <td>Sesekali meringis</td>
				                        <td>Sering mengerutkan kening</td>
				                    </tr>
				                    <tr>
				                        <td>Kaki</td>
				                        <td>Normal/rileks</td>
				                        <td>Gelisah/tegang</td>
				                        <td>Menendang</td>
				                    </tr>
				                    <tr>
				                        <td>Kegiatan</td>
				                        <td>Tenang</td>
				                        <td>Mondar-mandir</td>
				                        <td>Meringkuk</td>
				                    </tr>
				                    
				                </tbody>
				            </table>
				        </td>
				    </tr>
				</table>';

			$pdf->writeHTML($html5, true, false, true, false, '');

			$pdf->AddPage();



			$html6 = '
				<table border="1" cellpadding="5" cellspacing="0" width="100%">
				    
				    <tr>
				        <td width="50%" valign="top">
				            
				            <table border="1" cellpadding="4" cellspacing="0" width="100%">
				                
				                <tbody>
				                    
				                    <tr>
				                        <td>Ekspresi</td>
				                        <td>Tidak ada</td>
				                        <td>Meringis</td>
				                        <td>Meringis mendengkur</td>
				                    </tr>
				                    <tr>
				                        <td>Sulit Tidur</td>
				                        <td>Tidak ada</td>
				                        <td>Bayi terbangun</td>
				                        <td>Bayi terjaga terus</td>
				                    </tr>
				                </tbody>
				            </table>
				        </td>

				        <td width="50%" valign="top">
				            
				            <table border="1" cellpadding="4" cellspacing="0" width="100%">
				                
				                <tbody>
				                    
				                    <tr>
				                        <td>Menangis</td>
				                        <td>Tidak menangis</td>
				                        <td>Merengek</td>
				                        <td>Menangis terus-menerus</td>
				                    </tr>
				                    <tr>
				                        <td>Penghiburan</td>
				                        <td>Rileks</td>
				                        <td>Diyakinkan sesekali</td>
				                        <td>Sulit dihibur</td>
				                    </tr>

				                </tbody>
				            </table>
				        </td>
				    </tr>
				    
				</table>';

		$pdf->writeHTML($html6, true, false, true, false, '');
				$html7 = '
				<table border="1" cellpadding="5" cellspacing="0" width="100%">
				    <tr>
				        <td width="50%" valign="top">
				            <table width="100%" cellpadding="3">
				                <tr>
				                    <td colspan="2" style="font-weight:bold;">' . ($wong == 'on' ? '<b>[V]</b>' : '[]') . 'WONG BAKER (USIA 3 SAMPAI < 10 TAHUN)</td>
				                </tr>
				                <tr>
				                    <td width="30%">Skala Nyeri:</td>
				                    <td>' . htmlspecialchars($decodedData["skala_wong"] ?? "") . '</td>
				                </tr>
				                <tr>
				                    <td colspan="2" align="center">
				                        <img src="' . base_url('assets2/rme/img/emoji1.png') . '" width="100" />
				                    </td>
				                </tr>
				            </table>
				        </td>

				        <td width="50%" valign="top">
				            <table width="100%" cellpadding="3">
				                <tr>
				                    <td colspan="2" style="font-weight:bold;">' . ($numerik == 'on' ? '<b>[V]</b>' : '[]') . 'NUMERIK (USIA 10 TAHUN KE ATAS)</td>
				                </tr>
				                <tr>
				                    <td width="30%"><b>Skala Nyeri:</b></td>
				                    <td>' . htmlspecialchars($decodedData["skala_numerik"] ?? "") . '</td>
				                </tr>
				                <tr>
				                    <td colspan="2" align="center">
				                        <img src="' . base_url('assets2/rme/img/emoji2.png') . '" width="100" />
				                    </td>
				                </tr>
				            </table>
				        </td>
				    </tr>

				    <tr>
				        <td colspan="2">
				            <table width="100%" cellpadding="3">
				                <tr>
				                    <td width="30%" style="font-weight:bold;">' . ($cpot == 'on' ? '<b>[V]</b>' : '[]') . 'CPOT (Pasien Tidak Sadar)</td>
				                    <td width="20%"><b>Skala Nyeri:</b></td>
				                    <td>' . htmlspecialchars($decodedData["skala_cpot"] ?? "") . '</td>
				                </tr>
				            </table>
				        </td>
				    </tr>
				</table>';

			$html7 .= '
<tr>
    <td width="50%" valign="top">
        <table border="1" cellpadding="4" cellspacing="0" width="100%">
            <thead>
                <tr style="text-align:center; font-weight:bold;">
                    <td width="23%">Indikator</td>
                    <td width="20%">Kondisi</td>
                    <td width="8%">Skor</td>
                    <td width="50%">Keterangan</td>
                </tr>
            </thead>
            <tbody>';
                $cpot1 = [
                    ["Ekspresi Wajah", "Rilek", 0, "Tidak ada keterangan otot yang terlihat"],
                    ["", "Kaku", 1, "Merengut, alis menurun, orbit menegang, terdapat kerutan levator atau perubahan lainnya (misalnya membuka mata atau menangis selama proses nosiseptif)"],
                    ["", "Meringis", 2, "Semua gerakan wajah sebelumnya ditambah kelopak mata tertutup rapat atau membuka mata menggigit tabung endotrakeal"],
                    ["Gerakan Tubuh", "Tidak ada gerakan abnormal", 0, "Tidak bergerak sama sekali tidak berarti tidak adanya rasa sakit atau posisi normal (gerakan tidak dilakukan terhadap bagian yang terasa nyeri atau tidak dilakukan untuk tujuan perlindungan)"],
                    ["", "Lokalisasi Nyeri", 1, "Lambat, terarah hati-hati, menyentuh atau menggenggam bagian yang nyeri, mencari perhatian melalui gerakan"],
                    ["", "Gelisah", 2, "Menarik tabung, mencoba untuk duduk, menggerakkan tungkai / meronta-ronta, tidak mengikuti perintah, menahan staf, mencoba turun dari tempat tidur"]
                ];

                foreach ($cpot1 as $row) {
                    $html7 .= '<tr>';
                    foreach ($row as $cell) {
                        $html7 .= '<td>' . htmlspecialchars($cell) . '</td>';
                    }
                    $html7 .= '</tr>';
                }

			$html7 .= '
			            </tbody>
			        </table>
			    </td>

			    <td width="50%" valign="top">
			        <table border="1" cellpadding="4" cellspacing="0" width="100%">
			            <thead>
			                <tr style="text-align:center; font-weight:bold;">
			                    <td>Indikator</td>
			                    <td width="27%">Kondisi</td>
			                    <td width="8%">Skor</td>
			                    <td width="40%">Keterangan</td>
			                </tr>
			            </thead>
			            <tbody>';
			                $cpot2 = [
			                    ["Aktivasi Alarm Ventilator Mekanik", "Pasien kooperatif terhadap kerja ventilator mekanik", 0, "Alarm tidak berbunyi, ventilasi mudah"],
			                    ["", "Alarm aktif tapi berhenti spontan", 1, "Batuk, alarm berbunyi tetapi berhenti secara spontan"],
			                    ["", "Alarm selalu aktif", 2, "Alarm sering berbunyi"],
			                    ["Berbicara jika pasien ekstubasi", "Berbicara dalam nada normal atau tidak ada suara", 0, "Berbicara dengan nada pelan"],
			                    ["", "Mendesah, mengerang", 1, "Mendesah, mengerang"],
			                    ["", "Menangis, berteriak", 2, "Menangis, berteriak"],
			                    ["Ketegangan Otot", "Tidak ada ketegangan otot", 0, "Tidak ada ketegangan otot"],
			                    ["", "Tegang, kaku", 1, "Gerakan otot pasif"]
			                ];

			                foreach ($cpot2 as $row) {
			                    $html7 .= '<tr>';
			                    foreach ($row as $cell) {
			                        $html7 .= '<td>' . htmlspecialchars($cell) . '</td>';
			                    }
			                    $html7 .= '</tr>';
			                }

			$html7 .= '
			            </tbody>
			        </table>
			    </td>
			</tr>';
			$tools = $decodedData['tools'] ?? '';
			$ya_rsiko_jatuh = $decodedData['ya_rsiko_jatuh'] ?? '';
			$tingkat_resiko = $decodedData['tingkat_resiko'] ?? '';

			$usia_skrinning_1 = $decodedData['usia_skrinning_1'] ?? '';
			$usia_skrinning_2 = $decodedData['usia_skrinning_2'] ?? '';
			$usia_skrinning_3 = $decodedData['usia_skrinning_3'] ?? '';
			$html7 .= '
				<table border="1" cellpadding="5" cellspacing="0" width="100%">
				    <tr>
				        <td colspan="4"><b>Penilaian Resiko Jatuh:</b> ' . htmlspecialchars($decodedData["penilaian_resiko_jatuh"] ?? '') . '</td>
				    </tr>
				    <tr>
				        <td colspan="4">
				            <b>Tools:</b>
				            ' . ($tools == 'humpty' ? '<b>[V]</b>' : '[ ]') . ' Humpty Dumpty&nbsp;&nbsp;&nbsp;
				            ' . ($tools == 'morse' ? '<b>[V]</b>' : '[ ]') . ' Morse&nbsp;&nbsp;&nbsp;
				            ' . ($tools == 'sidney' ? '<b>[V]</b>' : '[ ]') . ' Sidney&nbsp;&nbsp;&nbsp;
				            ' . ($tools == 'get_up' ? '<b>[V]</b>' : '[ ]') . ' Get Up and Go&nbsp;&nbsp;&nbsp;
				        </td>
				    </tr>
				    <tr>
				        <td colspan="4">
				            <b>Resiko Jatuh:</b>
				            ' . ($ya_rsiko_jatuh == 'on' ? '<b>[V]</b>' : '[]') . ' Ya&nbsp;&nbsp;&nbsp;
				            <b>Tingkat Resiko:</b>
				            ' . ($tingkat_resiko == 'tinggi' ? '<b>[V]</b>' : '[ ]') . ' Tinggi&nbsp;&nbsp;&nbsp;
				            ' . ($tingkat_resiko == 'sedang' ? '<b>[V]</b>' : '[ ]') . ' Sedang&nbsp;&nbsp;&nbsp;
				            ' . ($tingkat_resiko == 'rendah' ? '<b>[V]</b>' : '[ ]') . ' Rendah&nbsp;&nbsp;&nbsp;
				            ' . ($tingkat_resiko == 'tidak_rsiko_jatuh' ? '<b>[V]</b>' : '[ ]') . ' Tidak&nbsp;&nbsp;&nbsp;
				        </td>
				    </tr>

				    <tr>
					    <td class="p-2" colspan="4">Skrinning Gizi</td>
					</tr>
					<tr>
					    <td width="10%">
					        <div class="fw-bold text-center">USIA</div>
					    </td>
					    <td width="30%">
					            ' . ($usia_skrinning_1 == 'usia_k_tahun' ? '<b>[V]</b>' : '[ ]') . ' Usia lebih kecil 1 tahun STRONG-kids
					    </td>
					    <td width="30%">
					            ' . ($usia_skrinning_2 == 'usia_l_tahun' ? '<b>[V]</b>' : '[ ]') . ' Usia 1 sampai lebih kecil 18 tahun PEDIATRIC YORKHILL MALNUTRITION SCORE (PYMS)
					    </td>
					    <td width="30%">
					            ' . ($usia_skrinning_3 == 'usia_j_tahun' ? '<b>[V]</b>' : '[ ]') . ' 18 tahun MALNUTRITION UNIVERSAL SCREENING TOOL (MUST)
					    </td>
					</tr>
				</table>';


		$pdf->writeHTML($html7, true, false, true, false, '');



		$score_1 = $decodedData['score_1'] ?? '';
		$score_2 = $decodedData['score_2'] ?? '';
		$score_3 = $decodedData['score_3'] ?? '';
		$score_4 = $decodedData['score_4'] ?? '';
		$score_5 = $decodedData['score_5'] ?? '';
		$score_6 = $decodedData['score_6'] ?? '';
		$score_7 = $decodedData['score_7'] ?? '';

		$rumur_imt = $decodedData['rumur_imt'] ?? '';
		$nama_ahli_gizi = $decodedData['nama_ahli_gizi'] ?? '';
		$tangga_malnutrisi = $decodedData['tangga_malnutrisi'] ?? '';
		$jam_malnutrisi = $decodedData['jam_malnutrisi'] ?? '';
		$penerjemah_dtb = $decodedData['penerjemah_dtb'] ?? '';
		$penerjemahInput_dtb = $decodedData['penerjemahInput_dtb'] ?? '';
		$perlu_edukasi = $decodedData['perlu_edukasi'] ?? '';
		$k_edukasi = $decodedData['k_edukasi'] ?? '';
		$lain2Input = $decodedData['lain2Input'] ?? '';

		$html8 = '
		<table border="1" cellpadding="5" cellspacing="0" width="100%" >
		    <tr>
		    <td width="10%">
		        <div class="fw-bold text-center">TOTAL SCORE</div>
		    </td>
		    <td width="30%">
		        <div>
		            ' . (!empty($score_1) ? '<b>[V]</b>' : '[ ]') . ' &gt; 2 (beresiko malnutrisi)<br>
		            ' . (!empty($score_2) ? '<b>[V]</b>' : '[ ]') . ' &lt; 2 (tidak beresiko)
		        </div>
		    </td>
		    <td width="30%">
		        <div>
		            ' . (!empty($score_3) ? '<b>[V]</b>' : '[ ]') . ' &gt; 2 (beresiko malnutrisi)<br>
		            ' . (!empty($score_4) ? '<b>[V]</b>' : '[ ]') . ' &lt; 2 (tidak beresiko malnutrisi)
		        </div>
		    </td>
		    <td width="30%">
		        <div>
		            ' . (!empty($score_5) ? '<b>[V]</b>' : '[ ]') . ' &gt; 2 (resiko tinggi)<br>
		            ' . (!empty($score_6) ? '<b>[V]</b>' : '[ ]') . ' 1 (resiko sedang)<br>
		            ' . (!empty($score_7) ? '<b>[V]</b>' : '[ ]') . ' 0 (resiko rendah)
		        </div>
		    </td>
		</tr>

		<tr>
		    <td class="col-4" colspan="2">
		        <div class="d-flex flex-column gap-2"><b>RUMUS IMT</b><br>
		                <b>IMT:</b> ' . htmlspecialchars($rumur_imt) . '<b>&nbsp;&nbsp;BB(Kg) /TB(m)</b>
		        </div>
		    </td>

		    <td colspan="2" class="p-2 col-6">
		            <div class="fw-bold mb-2"><b>Bila beresiko Malnutrisi: Sudah konsul dengan Ahli Gizi</b></div>
		            <b>Nama:</b>' . htmlspecialchars($nama_ahli_gizi) . '<br>
		            <b>Tanggal:</b>' . htmlspecialchars($tangga_malnutrisi) . '<br>
		            <b>Jam:</b>' . htmlspecialchars($jam_malnutrisi) . '<br>
		    </td>

		</tr>

		<tr>
		    <td class="p-2" colspan="4">
		        <b>KEBUTUHAN EDUKASI</b><br>
		                <b>Apakah dibutuhkan penerjemah:</b>
		                ' . ($penerjemah_dtb == 't_penerjemah' ? '<b>[V]</b>' : '[ ]') . ' Tidak
		                ' . ($penerjemah_dtb == 'y_penerjemah' ? '<b>[V]</b>' : '[ ]') . ' Ya (sebutkan):' . htmlspecialchars($penerjemahInput_dtb) . ' <br>
		            

		            Apakah memerlukan edukasi:
		            ' . ($perlu_edukasi == 't_p_edu' ? '<b>[V]</b>' : '[ ]') . ' Tidak
		            ' . ($perlu_edukasi == 'y_p_edu' ? '<b>[V]</b>' : '[ ]') . ' Ya<br>

		            <b>Jika Ya, kebutuhan edukasi yang diperlukan:</b><br>
		            
		                ' . ($k_edukasi == 'd_mjm' ? '<b>[V]</b>' : '[ ]') . ' Diagnosa dan manajemen
		                ' . ($k_edukasi == 'd_obat' ? '<b>[V]</b>' : '[ ]') . ' Obat-obatan
		                ' . ($k_edukasi == 'p_luka' ? '<b>[V]</b>' : '[ ]') . ' Perawatan luka
		                ' . ($k_edukasi == 'p_rehab' ? '<b>[V]</b>' : '[ ]') . ' Rehabilitasi
		                ' . ($k_edukasi == 'mjm_nyeri' ? '<b>[V]</b>' : '[ ]') . ' Manajemen nyeri
		                ' . ($k_edukasi == 'd_nutrisi' ? '<b>[V]</b>' : '[ ]') . ' Diet dan nutrisi
		                ' . (!empty($lain2Input) ? '<b>[V]</b>' : '[ ]') . ' Lain-lain: ' . htmlspecialchars($lain2Input) . '
		    </td>
		</tr>

		</table>';

		$html8 .= '
		<table border="1" cellpadding="5" cellspacing="0" width="100%">
		<tr>
		    <td colspan="2" align="center"><b>DIAGNOSA KEPERAWATAN GAWAT DARURAT</b></td>
		    <td colspan="2" align="center"><b>RENCANA KEPERAWATAN GAWAT DARURAT</b></td>
		</tr>
		<tr>
		    <td colspan="2">
		';

		// Diagnosa Keperawatan
		$options = [
		    ["name" => "ketidakefektifan_bersihan", "value" => "Ketidakefektifan bersihan jalan nafas b.d. obstruksi trakeobronkial adanya benda asing pada jalan nafas, secret tertahan di saluran nafas."],
		    ["name" => "resiko_aspirasi", "value" => "Resiko aspirasi b.d. trauma wajah, mulut atau leher, penurunan tingkat kesadaran, peningkatan tekanan intragastrik."],
		    ["name" => "ketidakefektifan_pola_nafas", "value" => "Ketidakefektifan pola nafas b.d. nyeri, cedera pada spinal, kelelahan otot pernafasan, kerusakan otot rangka."],
		    ["name" => "gangguan_pertukaran_gas", "value" => "Gangguan pertukaran gas b.d. perubahan kapasitas darah membawa oksigen, ketidakseimbangan membran pertukaran kapiler dan alveolus."],
		    ["name" => "penurunan_curah_jantung", "value" => "Penurunan curah jantung b.d. perubahan kekuatan jantung, dalam melawan kontraksi otot jantung, menurunnya keluaran jantung, penurunan isi sekuncup yang disebabkan oleh masalah elektrofisiologis."],
		    ["name" => "ketidakefektifan_perfusi", "value" => "Ketidakefektifan perfusi jaringan (cerebral, cardiopulmonary, renal, gastrointestinal, peripheral) b.d. penurunan pertukaran sel, hipovolemia, penurunan aliran darah arteri."],
		    ["name" => "kekurangan_cairan", "value" => "Kekurangan / resiko kekurangan cairan b.d. kehilangan cairan aktif, kerusakan mekanisme regulasi."],
		    ["name" => "kelebihan_volume_cairan", "value" => "Kelebihan volume cairan b.d. mekanisme yang terganggu."],
		    ["name" => "retensi_urin", "value" => "Retensi urin b.d. obstruksi traktus urinarius, gangguan neurovaskuler, trauma, hipertrofi blader prostat."],
		    ["name" => "nyeri_akut_kronis", "value" => "Nyeri akut, kronis b.d. spasme otot dan jaringan, trauma jaringan, ketidakmampuan fisik kronik."],
		    ["name" => "hipertermia", "value" => "Hipertermia b.d. dehidrasi, peningkatan metabolisme tubuh, gangguan proses perjalanan penyakit."],
		    ["name" => "kerusakan_mobilitas", "value" => "Kerusakan mobilitas fisik b.d. kerusakan muskuloskeletal dan neuromuskuler, kehilangan integritas jaringan, nyeri, penurunan kekuatan dan ketahanan tubuh."],
		    ["name" => "resiko_infeksi", "value" => "Resiko infeksi b.d. prosedur invasif, kerusakan kulit dan jaringan trauma, imuno supresi."],
		    ["name" => "konstipasi", "value" => "Konstipasi b.d. diet, asupan cairan, tingkat aktifitas, kebiasaan defekasi."],
		    ["name" => "resiko_jatuh", "value" => "Resiko jatuh b.d. penyakit, gangguan keseimbangan, penurunan status mental, penggunaan obat, penggunaan alkohol."],
		    ["name" => "resiko_mencederai", "value" => "Resiko mencederai diri dan orang lain berhubungan dengan agresif."]
		];

		foreach ($options as $opt) {
		    $key = $opt['name'];
		    $value = isset($decodedData[$key]) ? $decodedData[$key] : '';
		    $html8 .= ($value === 'on' ? '<b>[V]</b>' : '[ ]') . ' ' . $opt['value'] . '<br>';
		}

		// Tambahan input bebas diagnosa
		for ($i = 1; $i <= 4; $i++) {
		    $input = isset($decodedData["resiko_mencederai_lain_$i"]) ? $decodedData["resiko_mencederai_lain_$i"] : '';
		    if (!empty($input)) {
		        $html8 .= '<b>[V]</b> ' . $input . '<br>';
		    }
		}

		$html8 .= '
		    </td>
		    <td colspan="2">
		';

		// Rencana Keperawatan
		$care_plan = [
		    ["name" => "manuver_jaw_trust", "value" => "Lakukan manuver jaw trust, head tilt dan chin lift."],
		    ["name" => "keluarkan_benda_asing", "value" => "Keluarkan benda asing, lakukan suction, cricothyroidectomy."],
		    ["name" => "pasang_opa_npa_ett", "value" => "Pasang OPA, NPA, ETT, stabilisasi cervical (collar brace)."],
		    ["name" => "berikan_bantuan_nafas", "value" => "Berikan bantuan nafas buatan, ventilasi mekanik, ventilasi dengan ventilator."],
		    ["name" => "berikan_oksigen", "value" => "Berikan O2 sesuai kebutuhan melalui nasal cannula masker."],
		    ["name" => "monitor_saturasi_o2", "value" => "Monitor Sa O2."],
		    ["name" => "monitor_tanda_vital", "value" => "Monitor tanda-tanda vital secara periodik."],
		    ["name" => "monitor_kesadaran", "value" => "Monitor tingkat kesadaran secara periodik."],
		    ["name" => "monitor_ekg", "value" => "Monitor EKG."],
		    ["name" => "monitor_cairan", "value" => "Pasang infus, sampel darah, cek AGD."],
		    ["name" => "hentikan_pendarahan", "value" => "Hentikan pendarahan, KIE banyak minum."],
		    ["name" => "posisi_semi_fowler", "value" => "Berikan posisi semi fowler."],
		    ["name" => "pasang_kateter", "value" => "Pasang kateter untuk monitor cairan keluar."],
		    ["name" => "berikan_cairan", "value" => "Berikan cairan intravena, cairan koloid, darah atau produk darah, ekspander plasma."],
		    ["name" => "kajiturgor_kulit", "value" => "Kaji turgor kulit dan memeriksa mukosa mulut."],
		    ["name" => "evaluasi_tes_cairan", "value" => "Evaluasi tes cairan, berikan sesuai kebutuhan."],
		    ["name" => "pasang_ngt", "value" => "Pasang NGT."],
		    ["name" => "atasi_nyeri", "value" => "Atasi nyeri, delegatif pemberian analgetika, teknik distraksi, relaksasi."],
		    ["name" => "lakukan_perawatan_luka", "value" => "Lakukan perawatan luka dengan teknik septic aseptik."],
		    ["name" => "berikan_kompres_hangat", "value" => "Berikan kompres hangat."],
		    ["name" => "posisi_semifowler", "value" => "Berikan posisi semifowler bila tidak ada kontra indikasi."],
		    ["name" => "delegatif_pemberian_antipiretik", "value" => "Delegatif pemberian antipiretik."],
		    ["name" => "monitor_intake_dan_output", "value" => "Monitor intake dan output cairan."],
		    ["name" => "pasang_pengaman", "value" => "Pasang pengaman, spalk, lakukan imobilisasi."],
		    ["name" => "kaji_kompartemen", "value" => "Kaji tanda-tanda kompartemen pada daerah distal dan fraktur."],
		    ["name" => "pastikan_rem_terkunci", "value" => "Pastikan tempat tidur dan rem tempat tidur terkunci dengan baik."],
		    ["name" => "pasang_gelang_pengawas", "value" => "Pasang gelang kuning pada pasien sebagai penanda pasien perlu pengawasan."],
		    ["name" => "lakukan_pengikatan_pasien", "value" => "Lakukan pengikatan pasien, kolaborasi obat penenang."]
		];

		foreach ($care_plan as $item) {
		    $key = $item['name'];
		    $value = isset($decodedData[$key]) ? $decodedData[$key] : '';
		    $html8 .= ($value === 'on' ? '<b>[V]</b>' : '[ ]') . ' ' . $item['value'] . '<br>';
		}

		// Tambahan input bebas rencana
		for ($i = 1; $i <= 5; $i++) {
		    $input = isset($decodedData["resiko_pengikatan_pasien_lain_$i"]) ? $decodedData["resiko_pengikatan_pasien_lain_$i"] : '';
		    if (!empty($input)) {
		        $html8 .= '<b>[V]</b> ' . $input . '<br>';
		    }
		}

		$html8 .= '
		    </td>
		</tr>
		</table>';


		$pdf->writeHTML($html8, true, false, true, false, '');
		$pdf->AddPage();
		$html9 = '<table border="1" cellpadding="5" cellspacing="0" width="100%">
		<tr>
		    <td rowspan="3"><b>Kondisi Pasien</b></td>
		    <td colspan="6" align="center"><b>MONITORING OBSERVASI PASIEN DI INSTALASI GAWAT DARURAT</b></td>
		</tr>
		<tr><td colspan="6" align="center"><b>Jam Pemeriksaan</b></td></tr>
		<tr>';

		for ($i = 1; $i <= 6; $i++) {
		    $jam = $decodedData["input_{$i}_jam"] ?? '';
		    $html9 .= "<td>{$jam}</td>";
		}
		$html9 .= '</tr>';

		$html9 .= '<tr><td><b>Kondisi Umum</b></td>';
		for ($i = 1; $i <= 6; $i++) {
		    $val = $decodedData["input_{$i}_kondisi_umum"] ?? '';
		    $html9 .= "<td>{$val}</td>";
		}
		$html9 .= '</tr>';

		$html9 .= '<tr><td><b>Kesadaran</b></td>';
		for ($i = 1; $i <= 6; $i++) {
		    $val = $decodedData["input_{$i}_kesadaran"] ?? '';
		    $html9 .= "<td>{$val}</td>";
		}
		$html9 .= '</tr>';

		$html9 .= '<tr><td><b>Tanda Vital</b></td>';
		for ($i = 1; $i <= 6; $i++) {
		    $val = $decodedData["input_{$i}_tanda_vital"] ?? '';
		    $html9 .= "<td>{$val}</td>";
		}
		$html9 .= '</tr>';

		$html9 .= '<tr><td>
		    <div>TD</div>
		    <div>Denyut</div>
		    <div>Nadi</div>
		    <div>RR</div>
		    <div>Temp</div>
		</td>';
		for ($i = 1; $i <= 6; $i++) {
		    $val = $decodedData["td_denyut_{$i}"] ?? '';
		    $html9 .= "<td>{$val}</td>";
		}
		$html9 .= '</tr>';

		$html9 .= '<tr><td><b>Nyeri</b></td>';
		for ($i = 1; $i <= 6; $i++) {
		    $val = $decodedData["input_{$i}_nyeri"] ?? '';
		    $html9 .= "<td>{$val}</td>";
		}
		$html9 .= '</tr>';

		$html9 .= '<tr><td><b>Catatan Hal Penting</b></td>';
		for ($i = 1; $i <= 6; $i++) {
		    $val = $decodedData["catatan_penting_{$i}"] ?? '';
		    $html9 .= "<td>{$val}</td>";
		}
		$html9 .= '</tr>';

		$html9 .= '<tr><td><b>Petugas</b></td>';
		for ($i = 1; $i <= 6; $i++) {
		    $val = $decodedData["perawat{$i}"] ?? '';
		    $val2 = $this->to_safe_filename($val) . '.jpg';
		    $path_ttd_server_val2 = 'C:/xampp/htdocs/pmo/images/qrcodeIT/' . $val2;
		    $path_ttd_url_val2 = BASE_STORAGE . '/pmo/images/qrcodeIT/' . $val2;

		    if (!empty($val) && file_exists($path_ttd_server_val2)) {
		        $html9 .= '<td><img src="' . $path_ttd_url_val2 . '" width="60" height="60" /><br><b>' . $val . '</b></td>';
		    } else {
		        // Tetap tampilkan kolom kosong untuk menjaga struktur tabel
		        $html9 .= "<td>{$val}</td>";
		    }
		}
		$html9 .= '</tr>';


		$html9 .= '</table>';


		$html9 .= '<table border="1" cellpadding="5" cellspacing="0" width="100%">';

		$html9 .= '<tr><th colspan="2" align="center">KONDISI PASIEN SAAT PINDAH/KELUAR DARI IGD</th></tr>';

		$html9 .= '<tr><td><b>Pukul</b></td><td>' . ($decodedData['kondisi_pukul'] ?? '-') . '</td></tr>';

		$html9 .= '<tr><td><b>Metode Pemindahan Pasien</b></td><td>
		    ' . ($decodedData['metode_pemindahan2'] == 'kursi_roda2' ? '<b>[V]</b>' : '[ ]') . ' Kursi Roda &nbsp;&nbsp;
		    ' . ($decodedData['metode_pemindahan2'] == 'tempat_tidur2' ? '<b>[V]</b>' : '[ ]') . ' Tempat Tidur
		</td></tr>';

		$html9 .= '<tr><td><b>Peralatan Menyertai</b></td><td>';

		$html9 .= '<div>
		    ' . (isset($decodedData['o2_kebutuhan']) && $decodedData['o2_kebutuhan'] !== '' ? '<b>[V]</b>' : '[ ]') . ' O2 Portabel, Kebutuhan: ' . ($decodedData['o2_kebutuhan'] ?? '-') . ' L/menit<br>
		    ' . (isset($decodedData['ngt_portabel']) ? '<b>[V]</b>' : '[ ]') . ' NGT<br>
		    ' . (isset($decodedData['ventilator_portabel']) ? '<b>[V]</b>' : '[ ]') . ' Ventilator<br>
		    ' . (isset($decodedData['dll_kebutuhan']) && $decodedData['dll_kebutuhan'] !== '' ? '<b>[V]</b>' : '[ ]') . ' DLL: ' . ($decodedData['dll_kebutuhan'] ?? '-') . '<br>
		    ' . (isset($decodedData['suction']) ? '<b>[V]</b>' : '[ ]') . ' Suction<br>
		    ' . (isset($decodedData['infus']) ? '<b>[V]</b>' : '[ ]') . ' Infus<br>
		    ' . (isset($decodedData['kateterUrine']) ? '<b>[V]</b>' : '[ ]') . ' Kateter Urine
		</div>';

		$html9 .= '</td></tr>';

		$html9 .= '<tr><td><b>Keadaan Pasien Saat Pindah</b></td><td>
		    <div><b>GCS:</b> ' . ($decodedData['vital_gcs'] ?? '-') . '</div>
		    <div><b>Nadi:</b> ' . ($decodedData['vital_nadi'] ?? '-') . ' x/menit</div>
		    <div><b>Pernapasan:</b> ' . ($decodedData['vital_pernapasan'] ?? '-') . ' x/menit</div>
		    <div><b>TD:</b> ' . ($decodedData['vital_td_l'] ?? '-') . ' / ' . ($decodedData['vital_td_2'] ?? '-') . ' mmHg</div>
		    <div><b>Suhu:</b> ' . ($decodedData['vital_suhu'] ?? '-') . '°C</div>
		    <div><b>SpO2:</b> ' . ($decodedData['vital_sp02'] ?? '-') . '%</div>
		</td></tr>';

		$html9 .= '<tr><td><b>Pasien Ditransfer Ke</b></td><td>
		    <b>Instalasi Rawat Inap di Ruang:</b> ' . ($decodedData['instalasi_rawat_i'] ?? '-') . '
		</td></tr>';

		$html9 .= '<tr><td><b>Tindakan Lanjutan</b></td><td>
		    ' . ($decodedData['tindakan_lanjutan'] == 'k_operasi' ? '<b>[V]</b>' : '[ ]') . ' Kamar Operasi &nbsp;
		    ' . ($decodedData['tindakan_lanjutan'] == 'k_bersalin' ? '<b>[V]</b>' : '[ ]') . ' Kamar Bersalin &nbsp;
		    ' . ($decodedData['tindakan_lanjutan'] == 'k_lain' ? '<b>[V]</b>' : '[ ]') . ' Lain-lain: ' . ($decodedData['lain_bersalin'] ?? '-') . '
		</td></tr>';

		$html9 .= '<tr><td><b>Rujukan</b></td><td>
		    ' . (isset($decodedData['tindak_rujuk_nama_rs']) && $decodedData['tindak_rujuk_nama_rs'] == 'rujuk_rumah_sakit' ? '<b>[V]</b>' : '[ ]') . ' Dirujuk ke RS: ' . ($decodedData['rumah_sakit_nama'] ?? '-') . '<br>
		    ' . (isset($decodedData['tindak_rujuk_rs_pulang']) && $decodedData['tindak_rujuk_rs_pulang'] == 'dipulangkan' ? '<b>[V]</b>' : '[ ]') . ' Dipulangkan<br>
		    ' . (isset($decodedData['tindak_rujuk_rs']) && $decodedData['tindak_rujuk_rs'] == 'meninggal_dunia' ? '<b>[V]</b>' : '[ ]') . ' Meninggal Dunia<br>
		    ' . (isset($decodedData['tindak_rujuk_rs']) && $decodedData['tindak_rujuk_rs'] == 'doa' ? '<b>[V]</b>' : '[ ]') . ' Doa
		</td></tr>';

		$html9 .= '<tr><td><b>Transportasi Saat Keluar IGD</b></td><td>
		    ' . ($decodedData['transportasi'] == 'kendaraan_pribadi' ? '<b>[V]</b>' : '[ ]') . ' Kendaraan Pribadi &nbsp;
		    ' . ($decodedData['transportasi'] == 'ambulans' ? '<b>[V]</b>' : '[ ]') . ' Ambulans &nbsp;
		    ' . ($decodedData['transportasi'] == 'kendaraan_jenazah' ? '<b>[V]</b>' : '[ ]') . ' Kendaraan Jenazah
		</td></tr>';

		$html9 .= '</table>';

		$html9 .= '
			<table border="1" cellpadding="4" cellspacing="0" width="100%">
			    <tr>
			        <td>
			            <b>Follow Up</b><br><br>
			            <table width="100%" cellpadding="2">
			                <tr>
			                    <td width="70%">
			                        Ya, Tanggal: ' . (!empty($decodedData["tgl_follow_up"]) ? $decodedData["tgl_follow_up"] : '-') . '
			                    </td>
			                    <td width="30%">
			                        ' . ($decodedData["follow_up"] == "tidak" ? '<b>[V]</b>' : '[ ]') . ' Tidak
			                    </td>
			                </tr>
			            </table>
			        </td>
			    </tr>
			    <tr>
			        <td>
			            <b>Catatan Lain</b><br>
			            ' . (!empty($decodedData["catatan_lain_0"]) ? nl2br($decodedData["catatan_lain_0"]) : '-') . '
			        </td>
			    </tr>
			</table>

			<br><br>';
			$tanggal_2_formatted = '-';
			if (!empty($decodedData["tanggal_2"])) {
			    setlocale(LC_TIME, 'id_ID.UTF-8'); // pastikan locale bahasa Indonesia tersedia
			    $tanggal_2_formatted = strftime('%d %B %Y', strtotime($decodedData["tanggal_2"]));
			}


			$html9 .= '
			<table width="89%" cellpadding="2">
			    <tr>
			        <td align="right">
			            <b>Kab. Serdang Berdagai, ' . $tanggal_2_formatted . '</b>
			        </td>
			    </tr>
			</table>';
			$dokter_umum_akhir_2 = $decodedData['dokter_umum'] ?? '';
			$safe_filename_akhir_2 = $this->to_safe_filename($dokter_umum_akhir_2) . '.jpg';
			$path_ttd_server_akhir_2 = 'C:/xampp/htdocs/pmo/images/qrcodeIT/' . $safe_filename_akhir_2;
			$path_ttd_url_akhir_2 = BASE_STORAGE . '/pmo/images/qrcodeIT/' . $safe_filename_akhir_2;

			$perawat_umum_akhir_2 = $decodedData['perawat_kaji'] ?? '';
			$safe_filename_akhir_2_2 = $this->to_safe_filename($perawat_umum_akhir_2) . '.jpg';
			$path_ttd_server_akhir_2_2 = 'C:/xampp/htdocs/pmo/images/qrcodeIT/' . $safe_filename_akhir_2_2;
			$path_ttd_url_akhir_2_2 = BASE_STORAGE . '/pmo/images/qrcodeIT/' . $safe_filename_akhir_2_2;

			// Bangun HTML untuk tanda tangan
			$html9 .= '<br><br><table width="100%" cellpadding="2">
			<tr>
			    <td align="center" width="50%">
			    <b>Dokter Yang Melakukan Pengkajian</b><br><br>';
			if (file_exists($path_ttd_server_akhir_2)) {
			    $html9 .= '<img src="' . $path_ttd_url_akhir_2 . '" width="80" height="80" /><br><br>';
			}
			$html9 .= 'Nama: ' . htmlspecialchars($dokter_umum_akhir_2) . '
			    </td>
			    <td align="center" width="50%">
			    <b>Perawat Yang Melakukan Pengkajian</b><br><br>';
			if (file_exists($path_ttd_server_akhir_2_2)) {
			    $html9 .= '<img src="' . $path_ttd_url_akhir_2_2 . '" width="80" height="80" /><br><br>';
			}
			$html9 .= '' . htmlspecialchars($perawat_umum_akhir_2) . '
					</td>
				</tr>
			</table>';

			


		$pdf->writeHTML($html9, true, false, true, false, '');


	}
	// RM 2 URUTAN 2
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
		$berkas_klaim = 'rm2a';
		$formData = $this->data_klaim_model->get_by_id($id_kunjungan, $berkas_klaim);
		if (!$formData) {
			return;
		}
		$link = $formData->nama_berkas;
		
		$id_kunjungan = $formData->id_kunjungan;
		$id_pasien_rme = $formData->id_pasien_rme;
		$jsonRaw = $formData->data_json;
		$decodedData = json_decode($jsonRaw, true); // JSON ke array

		$idBerkas = $decodedData['id'] ?? null;

		/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		// BATAS AMBIL DATA
		$get_id_konten = $this->data_klaim_model->get_data_dari($id_kunjungan);
		if ($get_id_konten->num_rows() > 0) {
			$id_poli = $get_id_konten->row()->id_poly;
			$admission_id_kunjungan = $get_id_konten->row()->admission_id_kunjungan;

			if ($admission_id_kunjungan == NULL) {
				// DATA DARI ANTRIAN
				$post = $this->data_klaim_model->get_data_darirj($id_kunjungan);
				$tgl_admit2 = date($post->waktu_masuk);
				$tgl_admit = format_indo(date($post->waktu_masuk));
				$nama_pasien = $post->nama_pasien;
				$nik = $post->nik;
				$pendidikan_terakhir = $post->pendidikan_terakhir;
				$nama_pekerjaan = $post->nama_pekerjaan;
				$no_rm = $post->no_rm;
				$tgl_lahir = date('d / m / Y', strtotime($post->tanggal_lahir));
				$umur = countumur($post->tanggal_lahir);
				$jenkel = $post->jenkel;
				$alamatt = $post->alamat;
				$nama_agama = $post->nama_agama;
				$no_hp = $post->no_handphone;
				$nama_jenis_pasien = $post->nama_jenis_pasien;
				$nama_poli = $post->nama_poli;
				$nama_dokter = $post->nama_dokter;
				$tgl_discharge = $post->waktu_keluar ? format_indo(date($post->waktu_keluar)) : "";
				// DATA DARI ANTRIAN
			} else {
				// DATA DARI ADMISSION
				$post = $this->data_klaim_model->get_data_dariri($id_kunjungan);
				$post->jenkel = ($post->jenkel == 2) ? 'Perempuan' : 'Laki-laki';
				$nama_pasien = $post->nama_pasien;
				$nik = $post->nik;
				$pendidikan_terakhir = $post->pendidikan_terakhir;
				$nama_pekerjaan = $post->nama_pekerjaan;
				$no_rm = $post->no_rm;
				$tgl_lahir = date('d / m / Y', strtotime($post->tanggal_lahir));
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
				// DATA DARI ADMISSION
			}
		} else {
			redirect('backend/data_klaim');
		}
		// BATAS AMBIL DATA
		/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


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
		// $result_dokter = $this->data_klaim_model->get_karyawan_by_nama($dokters);

		// $imagesttd = BASE_STORAGE . '/pmo/images/pegawai/' . $result_dokter;
		// $imagesttd = FCPATH . 'assets/images/logo/787205dc7cf0a063e492c50da0b885a4.jpg';
		$images = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];
		// ... Inisialisasi PDF seperti sebelumnya

		$pdf->AddPage();
		$pdf->SetFont('times', '', 11);

		// HEADER PDF
		// Matikan GAMBAR HEADER
		$pdf->Image($images, 10, 10, 20, 20, '', '', 1, 0);
		$pdf->SetFont('times', 'B', 16);
		$pdf->Cell(190, 4, $site_title, 0, 1, 'C');
		$pdf->SetFont('times', 'B', 10);
		$pdf->MultiCell(45, 1, '', 0, 'C', 0, 0, '', '', true);
		$pdf->MultiCell(100, 1, $lokasi . "\n", 0, 'C', 0, 1, '', '', true);
		$pdf->Cell(10, 2, '', 0, 1);
		$pdf->writeHTML("<hr>", true, false, false, false, '');


		// FONT UTAMA
		$pdf->SetFont('times', '', 10);

		// LANJUT DESAIN PDF NYA DISINI>>>
		$html2 = '
	    <h3 align="right">' . $namaRM . '</h3>

		 <table cellpadding="5" cellspacing="0" border="1">
			    <tr>
			        <td width="12%" style="border:1px solid black; text-align:center;" ><img src="' . $images . '" width="50" height="50" /></td>
					<td width="48%" style="text-align:center;" colspan="3"><div>Formulir Triage Anak</div><div>' . $site_title . '</div></td>
					<td width="40%" colspan="3" cellpadding="1">
						<b><label>Nama Pasien</label> : </b>' . $nama_pasien . '<br>
						<b><label>Jenis Kelamin</label> :  </b>' . $jenkel . '<br>
						<b><label>Tanggal Lahir</label> : </b>' . $tgl_lahir . '<br>
						<b><label>No. RM </label>: </b>' . $no_rm . '<br>
						<b><label>NIK</label> : </b>' . $nik . '
					</td>
				</tr>
				<tr>
					<td>Cara Datang</td>
			';

		$metodePenanganan = $decodedData; // Asumsi data yang dikirim sudah dalam bentuk array (bukan string)
		$opsiPenangan = [
			'sendiri',
			'ambulans',
			'diantar_polisi',
		];

		// Membuat array kosong untuk menampung metode penanganan yang terpilih
		$selectedItems = [];

		foreach ($opsiPenangan as $opsi) {
			// Periksa apakah metode penanganan ada dalam decoded data dan terpilih (misalnya, "on")
			if (isset($metodePenanganan[$opsi]) && $metodePenanganan[$opsi] === 'on') {
				$selectedItems[] = strtolower($opsi); // Menambahkan opsi yang dipilih ke array selectedItems
			}
		}


		foreach ($opsiPenangan as $opsi) {
			$checked = in_array(strtolower($opsi), $selectedItems) ? '[v]' : '[ ]';
			$label = ucwords(str_replace('_', ' ', $opsi));
			$html2 .= '<td>' . $checked . ' ' . $label . '</td>';
			// Mencetak opsi dengan tanda centang
		}


		//////////////////////// cols 2 jenis kasus ////////////////// 
		/////////////////////////////////////////////////////////////
		function checkbox($value, $label = '')
		{
			return (!empty($value) && $value !== '0') ? '[v] ' . $label : '[ ] ' . $label;
		}


		function valueOrDash($field)
		{
			return isset($field) ? $field : '-';
		}

		$jamDatang = valueOrDash($decodedData['jam_penanganan_dewasa_1'] ?? '');
		$jamDoa = valueOrDash($decodedData['jam_doa_dewasa_1'] ?? '');
		$triageSekunder = valueOrDash($decodedData['trage_sekunder_dewasa_1'] ?? '');

		$nonTrauma = valueOrDash($decodedData['jenis_kasus_dewasa_non_trauma_1'] ?? '');
		$trauma = valueOrDash($decodedData['jenis_kasus_dewasa_trauma_1'] ?? '');
		$kll = valueOrDash($decodedData['jenis_kasus_dewasa_kll_1'] ?? '');
		$kasusLain = valueOrDash($decodedData['jenis_kasus_dewasa_lain_lain_1'] ?? '');


		$html2 .= '
				<td rowspan="2" colspan="2"><b>Jam Datang</b> ' . $jamDatang . '</td>
				<td>
					<div>' . checkbox($decodedData['metode_penanganan_doa_1'] ?? null, 'Doa') . '<br>
					' . $jamDoa . '</div>
				</td>
			</tr>
			<tr>
				<td>Jenis Kasus</td>
				<td>
					<span>' . checkbox($decodedData['jenis_kasus_dewasa_1'] ?? null) . $nonTrauma . ' Non Trauma</span><br>
					<span>' . checkbox($decodedData['jenis_kasus_dewasa_2'] ?? null) . $trauma . ' Trauma</span>
				</td>
				<td><div>' . checkbox($decodedData['jenis_kasus_dewasa_3'] ?? null) . $kll . ' KLL</div></td>
				<td><div>' . checkbox($decodedData['jenis_kasus_dewasa_4'] ?? null) . $kasusLain . ' Lain-lain</div></td>
				<td>Triage Sekunder ' . $triageSekunder . '</td>
			</tr>
			<tr>
				<td>Pemeriksaan</td>
				<td>Kategori I</td>
				<td>Kategori II</td>
				<td>Kategori III</td>
				<td>Kategori IV</td>
				<td>Kategori V</td>
				<td>Tanda Vital</td>
			</tr>
			';
		// divider ///////////////////////////////


		//////////////// cols 3 jalan nafas ////////////////
		///////////////////////////////////////////////////
		$keadaanUmum = valueOrDash($decodedData['keadaan_umum'] ?? '');


		$html2 .= '<tr>
				<td>Jalan Nafas</td>
				<td>
					<div>' . checkbox($decodedData['sumbatan_total'] ?? null)  . ' Sumbatan Total <br>
					' . checkbox($decodedData['sumbatan_sebagian_distress_berat'] ?? null)  . ' Sumbatan sebagian disertai distress pernafasan berat</div>
				</td>
				<td>
					<div>' . checkbox($decodedData['bebas'] ?? null) . ' Bebas <br>
					' . checkbox($decodedData['sumbatan_sebagian_distress_sedang'] ?? null) . 'Sumbatan sebagian disertai distress pernafasan sedang</div>
				</td>
				<td>
					<div>' . checkbox($decodedData['bebas_3'] ?? null) . ' Bebas <br>
					' . checkbox($decodedData['sumbatan_sebagian_distress_ringan'] ?? null) .  'Sumbatan sebagian disertai distress pernafasan Ringan</div>
				</td>
				<td>' . checkbox($decodedData['bebas4'] ?? null) . ' Bebas </td>
				<td>' . checkbox($decodedData['bebas_5'] ?? null) .  ' Bebas </td>
				<td><span style="text-align:center;">Keadaan Umum</span> <br> ' . $keadaanUmum . '</td>
		</tr>
		
		
		';
		// divider ////////////////////////////


		//////////////////// cols 4 pernapasan ///////////////////////
		//////////////////////////////////////////////////////////////
		$SuhuJalanNafas = valueOrDash($decodedData['suhu'] ?? '');
		$SaO2JalanNafas = valueOrDash($decodedData['sa02'] ?? '');
		$FrekuensiJalanNafas = valueOrDash($decodedData['frekuensi'] ?? '');
		$NadiJalanNafas = valueOrDash($decodedData['nadi'] ?? '');


		$html2 .= '
			<tr>
				<td>Pernapasan</td>
				<td>
					<div>' . checkbox($decodedData['nafas_spontan_minus'] ?? null) . ' Nafas spontan (-) <br>
					' . checkbox($decodedData['hipoventilasi'] ?? null) .  'hipoventilasi<br>
					' . checkbox($decodedData['distress_pernafasan_berat'] ?? null) .  'Distress pernafasan berat (otot diafragma berat, retraksi berat, sianosis akut)</div>
				</td>
				<td>
					<div>' . checkbox($decodedData['nafas_spontan_plus_1'] ?? null) . 'Nafas spontan (+) <br>
					' . checkbox($decodedData['distress_pernafasan_sedang_1'] ?? null) . 'Distress pernafasan sedang (otot diafragma sedang, retraksi sedang, kulit pucat)</div>
				</td>
				<td>
					<div>' . checkbox($decodedData['nafas_spontan_plus_2'] ?? null) . 'Nafas spontan (+) <br>
					' . checkbox($decodedData['distress_pernafasan_ringan_2'] ?? null) . 'Distress pernafasan ringan (otot diafragma ringan, retraksi ringan, kulit kemerahan)</div>
				</td>
				<td>
					<div>' . checkbox($decodedData['nafas_spontan_plus_3'] ?? null) . 'Nafas spontan (+) <br>
					' . checkbox($decodedData['tidak_ada_distress_pernafasan_3'] ?? null) . 'Tidak ada distress pernafasan (otot diafragma normal, retraksi tidak ada)</div>
				</td>
				<td>
					<div>' . checkbox($decodedData['nafas_spontan_plus_4'] ?? null) . 'Nafas spontan (+) <br>
					' . checkbox($decodedData['tidak_ada_distress_pernafasan_4'] ?? null) . 'Tidak ada distress pernafasan (retraksi tidak ada, otot diafragma normal)</div>
				</td>
				<td>
					<div>
						<span style="text-align:center;">Suhu  ' . $SuhuJalanNafas . '<sup>o</sup>C </span><br> 
						<span style="text-align:center;">SaO2  ' . $SaO2JalanNafas . ' %</span><br> 
						<span style="text-align:center;">Frekuensi  ' . $FrekuensiJalanNafas . '</span> <br> 
						<span style="text-align:center;">Nadi ' . $NadiJalanNafas . 'x/mnt</span>  <br> 
					</div>
				</td>
		</tr>
		';
		//////////////////////// divider /////////////////////////////
		/////////////////////////////////////////////////////////////


		/////////////////////// cols 5 sirkulasi ////////////////////
		/////////////////////////////////////////////////////////////
		$SirkulasiNafas = valueOrDash($decodedData['nafas_k'] ?? '');
		$SirkulasiTD = valueOrDash($decodedData['td_k'] ?? '');
		$SirkulasiRiwayat = valueOrDash($decodedData['riwayat_'] ?? '');

		$html2 .= '
			<tr>
			<td>Sirkulasi</td>
			<td>
				<div>' . checkbox($decodedData['absen_sirkulasi_1'] ?? null) . 'Absen sirkulasi<br>
				' . checkbox($decodedData['signifikan_bradikardia_1'] ?? null) . 'Signifikan bradikardia Ch. 60 pada bayi<br>
				' . checkbox($decodedData['gangguan_hemodinamik_berat_1'] ?? null) . 'Gangguan hemodinamik berat<br>
				' . checkbox($decodedData['nadi_perifer_minus_1'] ?? null) . 'Nadi perifer (-)<br>
				' . checkbox($decodedData['kulit_pucat_akral_dingin_1'] ?? null) . 'Kulit pucat, akral dingin, bintik-bintik merah pada ekstremitas<br>
				' . checkbox($decodedData['takikardia_berat_1'] ?? null) . 'Takikardia berat<br>
				' . checkbox($decodedData['pengisian_kapiler_1'] ?? null) . 'Pengisian kapiler>4 detik perdarahan tidak terkontrol<br>
				</div>
			</td>
			<td>
				<div>' . checkbox($decodedData['sirkulasi_sirkulasi_2'] ?? null) . 'Sirkulasi (+)<br>
				' . checkbox($decodedData['gangguan_hemodinamik_sedang_2'] ?? null) . 'Gangguan hemodinamik sedang<br>
				' . checkbox($decodedData['nadi_sirkulasi_lemah_2'] ?? null) . 'Nadi brachii lemah<br>
				' . checkbox($decodedData['kulit_pucat_sirkulasi_dingin_2'] ?? null) . 'Kulit pucat, akral dingin<br>
				' . checkbox($decodedData['takikardia_sedang_2'] ?? null) . 'Takikardia sedang<br>
				' . checkbox($decodedData['pengisian_kapiler_sedang_2'] ?? null) . 'Pengisian kapiler 2-4 detik<br>
				' . checkbox($decodedData['tanda_dehidrasi_6_2'] ?? null) . '>6 tanda dehidrasi<br>
				</div>
			</td>
			<td>
				<div>' . checkbox($decodedData['sirkulasi_plus_3'] ?? null) . 'Sirkulasi (+)<br>
				' . checkbox($decodedData['gangguan_ringan_3'] ?? null) . 'Gangguan hemodinamik ringan<br>
				' . checkbox($decodedData['nadi_teraba_3'] ?? null) . 'Nadi perifer teraba<br>
				' . checkbox($decodedData['kulit_pucat_hangat_3'] ?? null) . 'Kulit pucat, akral hangat<br>
				' . checkbox($decodedData['takikardia_ringan_3'] ?? null) . 'Takikardia ringan<br>
				' . checkbox($decodedData['tanda_dehidrasi_3_6'] ?? null) . '3-6 tanda dehidras<br>
				</div>
			</td>
			<td>
				<div>' . checkbox($decodedData['sirkulasi_plus_4_1'] ?? null) . 'Sirkulasi (+)<br>
				' . checkbox($decodedData['gangguan_hemodinamik_4_1'] ?? null) . 'Gangguan hemodinamik (-)<br>
				' . checkbox($decodedData['nadi_perifer_4_1'] ?? null) . 'Nadi perifer teraba<br>
				' . checkbox($decodedData['kulit_kemerahan_akral_4_1'] ?? null) . 'Kulit pucat, akral hangat<br>
				' . checkbox($decodedData['tanda_dehidrasi_4_1'] ?? null) . 'Takikardia ringan<br>
				</div>
			</td>
			<td>
				<div>' . checkbox($decodedData['sirkulasi_sirkulasi_10_1'] ?? null) . 'Sirkulasi (+)<br>
				' . checkbox($decodedData['gangguan_hemodinamik_10_1'] ?? null) . 'Gangguan hemodinamik (-)<br>
				' . checkbox($decodedData['nadi_perifer_teraba_10_1'] ?? null) . 'Nadi perifer teraba<br>
				' . checkbox($decodedData['kulit_sirkulasi_10_1'] ?? null) . 'Kulit kemerahan, akral hangat<br>
				' . checkbox($decodedData['tanda_dehidrasi_10_1'] ?? null) . 'Tanda dehidrasi (-)<br>
				</div>
			</td>

			<td>
				<div>
					<span>Suhu  ' . $SirkulasiNafas . '<sup>o</sup>C </span><br> 
					<span>SaO2  ' . $SirkulasiTD . ' %</span><br> 
					<span>Nadi ' . $SirkulasiRiwayat . 'x/mnt</span>  <br> 
				</div>
			</td>
		</tr>
		';
		//////////////////////// divider /////////////////////////////
		/////////////////////////////////////////////////////////////


		///////// divider final ///////////
		$html2 .= '</table>';
		///////// divider final ///////////
		$pdf->writeHTML($html2, true, false, true, false, '');

		// LANJUT DESAIN PDF NYA DISINI>>>




		// ===================== HALAMAN DUA ======================== //
		$pdf->AddPage();

		// $pdf->SetFont('times', 'B', 16);
		// $pdf->Cell(190, 4, $site_title, 0, 1, 'C');
		// $pdf->SetFont('times', 'B', 10);
		// $pdf->MultiCell(45, 1, '', 0, 'C', 0, 0, '', '', true);
		// $pdf->MultiCell(100, 1, $lokasi . "\n", 0, 'C', 0, 1, '', '', true);
		// $pdf->Cell(10, 2, '', 0, 1);
		// $pdf->writeHTML("<hr>", true, false, false, false, '');

		// FONT UTAMA
		$pdf->SetFont('times', '', 10);
		// ========================================================= //

		// ==================== DESAIN ============================== //
		// ========================================================== //

		/////////////////////// cols 6 Tanda Lain ////////////////////
		/////////////////////////////////////////////////////////////

		$html3 .= '
		<table cellpadding="5" cellspacing="0" border="1">
			<tr>
				<td>Kesadaran</td>
				<td><div>' . checkbox($decodedData['gcs'] ?? null) . 'GCS 9</div></td>
				<td><div>' . checkbox($decodedData['gcs12'] ?? null) . 'GCS 9-12</div></td>
				<td><div>' . checkbox($decodedData['gcs13'] ?? null) . 'GCS >13</div></td>
				<td><div>' . checkbox($decodedData['gcs14'] ?? null) . 'GCS 15</div></td>
				<td><div>' . checkbox($decodedData['gcs15'] ?? null) . 'GCS 15</div></td>
				<td><div>' . checkbox($decodedData['gcmakan'] ?? null) . 'Makanan</div></td>
			</tr>
			<tr>
				<td>Tanda Lain</td>
				<td><div>' . checkbox($decodedData['kejang_sedang'] ?? null) . 'Kejang sedang berlangsung respon nyeri (+) Trauma kepala berat</div></td>
				<td><div>' . checkbox($decodedData['kondisi2'] ?? null) . 'Gelisah Irritable Demam dengan tanda-tanda kejang sakit kepala kaku leher Bayi usia lebih kecil dari 28 hari</div></td>
				<td>
					<div>' . checkbox($decodedData['kondisi3'] ?? null) . 'Apatis<br>
					' . checkbox($decodedData['somnolen'] ?? null) . 'Somnolen Nyeri perut hebat Fraktur ekstremitas Laserasi kulit Luka kotor<br>
					</div>
				</td>
				<td>
					<div>' . checkbox($decodedData['kondisi4'] ?? null) . 'Cedera tanpa penurunan kesadaran Nyeri abdomen tidak hebat Nyeri sedang Dislokasi sendi Inflamasi / benda asing pada mata Infeksi paru demam subfebris<br>
					</div>
				</td>
				<td>
					<div>' . checkbox($decodedData['kondisi5'] ?? null) . 'Gejala klinis (-) Rencana imunisasi Nyeri telinga tidak demam Sakit dengan gejala ringan Lebam post trauma ringan<br>
					</div>
				</td>
				<td>
					<div>' . checkbox($decodedData['obat_lainnya'] ?? null) . 'Obat<br>
					' . checkbox($decodedData['obat_lain_lain'] ?? null) . 'Lain-lain<br>
					' . checkbox($decodedData['obat_gcs_lainnya'] ?? null) . 'Gcs<br>
					</div>
				</td>
			</tr>
		';

		/////////////////////// cols 7 Respon Time ////////////////////
		/// ///////////////////////////////////////////////////////////
		$TanggalCity = valueOrDash($decodedData['tanggal_2'] ?? '');

		$html3 .= '
    <tr>
        <td>Respon Time</td>
        <td>' . checkbox($decodedData['immediate'] ?? null) . 'Immediate</td>
        <td>' . checkbox($decodedData['10menit_under'] ?? null) . '10 menit</td>
        <td>' . checkbox($decodedData['30menit_under'] ?? null) . '30 menit</td>
        <td>' . checkbox($decodedData['60menit_under'] ?? null) . '60 menit</td>
        <td>' . checkbox($decodedData['120menit_under'] ?? null) . '120 menit</td>
        <td></td>
    </tr>
    <tr>
        <td>Obserbasi</td>
        <td>R.Resusitasi</td>
        <td>R.Resusitasi/R.Obserbasi</td>
        <td>R.Obserbasi</td>
        <td>R.Obserbasi</td>
        <td>R.Obserbasi</td>
        <td>Tanggal ' . date('d / m / Y', strtotime($TanggalCity)) . '</td>
    </tr>
    <tr>
        <td colspan="6" style="height: 50px;">' . checkbox($decodedData['emergency3'] ?? null) . 'Emergency</td>
        <td rowspan="2">';

		// =================== TTD MASUKKAN KE DALAM  ===================
		// =================== TTD MASUKKAN KE DALAM =================== //
			$perawat_pengkaji = $decodedData['perawat_pengkaji'];
	        $safe_filename_triage = $this->to_safe_filename($perawat_pengkaji) . '.jpg';
			$path_ttd_server_triage = 'C:/xampp/htdocs/pmo/images/qrcodeIT/' . $safe_filename_triage;
			$path_ttd_url_triage = BASE_STORAGE . '/pmo/images/qrcodeIT/' . $safe_filename_triage;

			$html3 .= '<span align="center">Petugas Triage, </span><br/>';
			if (file_exists($path_ttd_server_triage)) {
			    $html3 .= '<div align="center">
			                   <img src="' . $path_ttd_url_triage . '" width="60" height="60" />
			               </div>';
			}
			// Nama dokter tetap ditampilkan
			$html3 .= '<br/>' . $decodedData['perawat_pengkaji'] . '<br/>';
		// =================== TTD MASUKKAN KE DALAM =================== //

		// if (!empty($decodedData['image_drawer']['state_image_1'])) {
		// 	$imgJson = $decodedData['image_drawer']['state_image_1'];
		// 	$imgData = json_decode($imgJson, true);

		// 	if (!empty($imgData['markers'][0]['drawingImgUrl'])) {
		// 		$src = $imgData['markers'][0]['drawingImgUrl'];

		// 		if (strpos($src, 'data:image') === 0) {
		// 			// Tambahkan gambar ke dalam <td>
		// 			$html3 .= '<br><img src="' . $src . '" style="width:60px; height:auto;">';
		// 		}
		// 	}
		// }


		$html3 .= '
			</td>
		</tr>
			<tr>
				<td colspan="6" style="height: 50px;">' . checkbox($decodedData['false_emergency3'] ?? null) . 'False Emergency</td>
			</tr>
		';


		////////////////// final divider ///////////////////
		$html3 .= '
			</table>
		';
		////////////////// final divider ///////////////////


		$pdf->writeHTML($html3, true, false, true, false, '');
	}
	// RM 2A URUTAN 2
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


		// ============== rm2b triase ========================= //
	// ============================================================== //

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
		$imagesrm2b = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];

		// Ambil data FORM RME berdasarkan ID
		$berkas_klaim = 'rm2b';
		$formData = $this->data_klaim_model->get_by_id($id_kunjungan, $berkas_klaim);
		if (!$formData) {
			return;
		}
		$link = $formData->nama_berkas;
		$jsonRaw = $formData->data_json;
		$id_kunjungan = $formData->id_kunjungan;
		$id_pasien_rme = $formData->id_pasien_rme;
		$decodedData = json_decode($jsonRaw, true); // JSON ke array

		$idBerkas = $decodedData['id'] ?? null;
		/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		// BATAS AMBIL DATA
		$get_id_konten = $this->data_klaim_model->get_data_dari($id_kunjungan);
		if ($get_id_konten->num_rows() > 0) {
			$id_poli = $get_id_konten->row()->id_poly;
			$admission_id_kunjungan = $get_id_konten->row()->admission_id_kunjungan;

			if ($admission_id_kunjungan == NULL) {
				// DATA DARI ANTRIAN
				$post = $this->data_klaim_model->get_data_darirj($id_kunjungan);
				$tgl_admit2 = date($post->waktu_masuk);
				$tgl_admit = format_indo(date($post->waktu_masuk));
				$nama_pasien = $post->nama_pasien;
				$nik = $post->nik;
				$pendidikan_terakhir = $post->pendidikan_terakhir;
				$nama_pekerjaan = $post->nama_pekerjaan;
				$no_rm = $post->no_rm;
				$tgl_lahir = date('d / m / Y', strtotime($post->tanggal_lahir));
				$umur = countumur($post->tanggal_lahir);
				$jenkel = $post->jenkel;
				$alamatt = $post->alamat;
				$nama_agama = $post->nama_agama;
				$no_hp = $post->no_handphone;
				$nama_jenis_pasien = $post->nama_jenis_pasien;
				$nama_poli = $post->nama_poli;
				$nama_dokter = $post->nama_dokter;
				$tgl_discharge = $post->waktu_keluar ? format_indo(date($post->waktu_keluar)) : "";
				// DATA DARI ANTRIAN
			} else {
				// DATA DARI ADMISSION
				$post = $this->data_klaim_model->get_data_dariri($id_kunjungan);
				// $post->jenkel = ($post->jenkel == 2) ? 'Perempuan' : 'Laki-laki';
				$nama_pasien = $post->nama_pasien;
				$no_bpjs = $post->no_bpjs;
				$nik = $post->nik;
				$pendidikan_terakhir = $post->pendidikan_terakhir;
				$nama_pekerjaan = $post->nama_pekerjaan;
				$no_rm = $post->no_rm;
				$tgl_lahir = date('d / m / Y', strtotime($post->tanggal_lahir));
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
				$nama_hub_pasien = $post->nama_hub_pasien;
				$alamat_hub_pasien = $post->alamat_hub_pasien;
				$noHp_hub_pasien = $post->noHp_hub_pasien;
				$nama_bangsa = $post->nama_bangsa;
				$hubungan_keluarga_pasien = $post->hubungan_keluarga_pasien;
				$status_nikah = $post->status_nikah;
				$nama_suku = $post->nama_suku;
				$lama = countme($post->tgl_admit);
				// DATA DARI ADMISSION
			}
		} else {
			redirect('backend/data_klaim');
		}
		// BATAS AMBIL DATA
		////////////////////////////////////////////////////////////////////////////////////////////////////////////////



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


		// $imagesttd = BASE_STORAGE . '/pmo/images/pegawai/' . $result_dokter;
		// $imagesttdrm025 = FCPATH . 'assets/images/logo/787205dc7cf0a063e492c50da0b885a4.jpg';

		// ... Inisialisasi PDF seperti sebelumnya

		$pdf->AddPage();
		$pdf->SetFont('times', '', 11);

		// HEADER PDF
		// Matikan GAMBAR HEADER
		// $pdf->Image($imagesrm2b, 10, 10, 20, 20, '', '', 1, 0);
		// $pdf->SetFont('times', 'B', 16);
		// $pdf->Cell(190, 4, $site_title, 0, 1, 'C');
		// $pdf->SetFont('times', 'B', 10);
		// $pdf->MultiCell(45, 5, '', 0, 'C', 0, 0, '', '', true);
		// $pdf->MultiCell(100, 5, $lokasi . "\n", 0, 'C', 0, 1, '', '', true);
		// $pdf->Cell(10, 4, '', 0, 1);
		// $pdf->writeHTML("<hr>", true, false, false, false, '');

		// FONT UTAMA
		$pdf->SetFont('times', '', 11);



		// =================== HALAMAN PERTAMA ====================
		function checkboxrm2b($value, $label = '')
		{
			return (!empty($value) && $value !== '0') ? '[v] ' . $label : '[ ] ' . $label;
		}

		function radiomarkrm2b($value, $expectedValue, $label)
		{
			return ($value === $expectedValue) ? '[v] ' . $label : '[ ] ' . $label;
		}

		function valueOrDashrm2b($field)
		{
			return isset($field) ? htmlspecialchars($field) : '-';
		}

		$html1 = '
		<h3 align="right">' . htmlspecialchars($namaRM) . '</h3>
		
		<table border="1" style="border-collapse:collapse;">
			<tr>
				<td width="50%">
					<table style="border-collapse:collapse;">
						<tr>
							<td width="30%">
							<br>
								<div><img src="' . $imagesrm2b . '" width="180" height="180"/></div>
							</td>
							<td width="70%">
								' . $site_title  . '<br>
								' . $lokasi . ' <br>
								' . $telepon . ' <br>
							</td>
						</tr>
					</table>
				</td>
				<td width="15%" align="center">
					<br><br><br><br>FORMULIR TRIAGE
				</td>
				<td width="35%">
				<br><br><br>
					<table style="border-collapse:collapse;" >
						<tr>
							<td width="40%">Nama</td>
							<td width="70%">
								' . $nama_pasien . '
							</td>
						</tr>
						<tr>
							<td width="40%">Tanggal lahir</td>
							<td width="70%">
								' . $tgl_lahir . '
							</td>
						</tr>
						<tr>
							<td width="40%">Jenis Kelamin</td>
							<td width="70%">
								' . $jenkel . '
							</td>
						</tr>
						<tr>
							<td width="40%">No Rm</td>
							<td width="70%">
								' . $no_rm . '
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>

		<table style="border-collapse:collapse" border="1">
			<tr>
				<td width="10%">Cara Datang</td>
				<td width="15%">' . checkboxrm2b($decodedData['sendiri']) . ' Sendiri</td>
				<td width="15%">' . checkboxrm2b($decodedData['ambulans']) . ' Ambulans</td>
				<td width="15%">' . checkboxrm2b($decodedData['diantar_polisi']) . ' Diantar Polisi</td>
				<td  width="30%" colspan="2" rowspan="2">
					Jam Penanganan 
					' . $decodedData['jam_penanganan_dewasa_1'] . '
				</td>
				<td width="15%" >
					' . checkboxrm2b($decodedData['metode_penanganan_doa_1']) . ' Doa <br>
					' . $decodedData['jam_doa_dewasa_1'] . '
				</td>
			</tr>

			<tr>
				<td>Jenis Kasus</td>
				<td>' . checkboxrm2b($decodedData['jenis_kasus_dewasa_1']) . ' Non Trauma <br>
				' . checkboxrm2b($decodedData['jenis_kasus_dewasa_2']) . 'Trauma 
				</td>
				<td>' . checkboxrm2b($decodedData['jenis_kasus_dewasa_3']) . 'KLL </td>
				<td>' . checkboxrm2b($decodedData['jenis_kasus_dewasa_4']) . 'lain-lain </td>
				<td>Triage Sekunder <br> ' . checkboxrm2b($decodedData['trage_sekunder_dewasa_1']) . '</td>
			</tr>
		
			<tr>
				<td>Pemeriksaan</td>
				<td>Kategori I</td>
				<td>Kategori II</td>
				<td>Kategori III</td>
				<td>Kategori IV</td>
				<td>Kategori V</td>
				<td colspan="2">Tanda Vital</td>
			</tr>

			<tr>
				<td>Jalan Nafas</td>
				<td>
					' . checkboxrm2b($decodedData['sumbatan_total']) . 'Sumbatan total <br>
				
					' . checkboxrm2b($decodedData['sumbatan_sebagian_distress_berat']) . 'Sumbatan sebagian dengan distress berat 
				</td>
				<td>
					' . checkboxrm2b($decodedData['bebas']) . ' Bebas<br>
				
					' . checkboxrm2b($decodedData['sumbatan_sebagian_distress_sedang']) . 'Sumbatan sebagian dengan distress sedang 
				</td>
				<td>
					' . checkboxrm2b($decodedData['bebas_3']) . ' Bebas<br>
				
					' . checkboxrm2b($decodedData['sumbatan_sebagian_distress_ringan']) . ' Sumbatan sebagian dengan distress ringan
				</td>
				<td>
					' . checkboxrm2b($decodedData['bebas4']) . ' Bebas<br>
				</td>
				<td>
					' . checkboxrm2b($decodedData['bebas_5']) . ' Bebas<br>
				</td>
				<td>Keadaan Umum <br> ' . $decodedData['keadaan_umum'] . '</td>

			</tr>
			<tr>
				<td>Pernapasan</td>

				<td>
					' . checkboxrm2b($decodedData['nafas_spotan_henti']) . 'Sumbatan total <br>
				
					' . checkboxrm2b($decodedData['sumbatan_sebagian_distress_berat']) . 'Berhenti nafas spontan / Hipoventilasi <br> 

					' . checkboxrm2b($decodedData['distres_abdominal']) . 'Distress pernafasan berat pernafasan abdominal, retraksi dada berat (+), sianosisa akut <br>

					' . checkboxrm2b($decodedData['tidak_mampu_bicara']) . 'Tidak mampu berbicara <br> 

					' . checkboxrm2b($decodedData['frekuensi_nafas_kecil_10menit']) . 'Frekuensi nafas lebih kecil 10 x/menit <br> 

				</td>
				<td>
					' . checkboxrm2b($decodedData['nafas_spontan_plus_1']) . 'Nafas spontan (+) <br>
				
					' . checkboxrm2b($decodedData['distress_pernafasan_moderate_1']) . 'Distress pernafasan moderate (pernafasan abdominal, retraksi dada sedang (+), kulit pucat) <br> 

					' . checkboxrm2b($decodedData['bicara_hanya_satu_kata_1']) . 'Bicara hanya satu kata <br>
				</td>
				<td>
					' . checkboxrm2b($decodedData['nafas_spontan_plus_2']) . 'Nafas spontan (+) <br>
				
					' . checkboxrm2b($decodedData['distres_pernapasan_moderate_2']) . 'Distress pernafasan moderate (pernafasan abdominal, bicara pendek-pendek (+), kulit kemerahan)
				</td>
				<td>
					' . checkboxrm2b($decodedData['nafas_spontan_plus_3']) . 'Nafas spontan (+) <br>
				
					' . checkboxrm2b($decodedData['distres_penapasan_mines_1']) . 'Nafas spontan (-) <br> 

					' . checkboxrm2b($decodedData['dapat_berkomunikasi_baik_1']) . 'Dapat berkomunikasi baik (kalimat penuh) <br>
				</td>
				<td>
					' . checkboxrm2b($decodedData['nafas_spontan_plus_4']) . 'Nafas spontan (+) <br>
				
					' . checkboxrm2b($decodedData['distres_penapasan_mines_2']) . 'Nafas spontan (-) <br> 

					' . checkboxrm2b($decodedData['dapat_berkomunikasi_baik_2']) . 'Dapat berkomunikasi baik (kalimat penuh) <br>
				</td>
				<td>
					Suhu &nbsp;' . $decodedData['suhu'] . ' &nbsp; °C <br>
					SpO2 &nbsp;' . $decodedData['sa02'] . ' &nbsp; % <br>
					Nadi &nbsp;' . $decodedData['nadi'] . ' &nbsp; x/menit 
				</td>
			</tr>

			<tr>
				<td>Sirkulasi</td>

				<td>
					' . checkboxrm2b($decodedData['henti_jantung_1']) . 'Henti jantung <br>
				
					' . checkboxrm2b($decodedData['tidak_mampu_bicara_1']) . 'Tidak mampu berbicara <br> 

					' . checkboxrm2b($decodedData['gangguan_hemodinamik_berat_1']) . 'Gangguan hemo dinamik berat (akral dingin, pucat, kebiruan, perfusi buruk) <br>

					' . checkboxrm2b($decodedData['nadi_perifer_minus_1']) . 'Nadi perifer (-) <br> 

					' . checkboxrm2b($decodedData['perdarahan_tdk_terkontrol_1']) . 'Perdarahan berat tidak terkontrol <br> 
				</td>


				<td>
					' . checkboxrm2b($decodedData['nadi_teraba_1']) . 'Nadi teraba <br>
				
					' . checkboxrm2b($decodedData['gangguan_hemodinamik_sedang_2']) . 'Tidak mampu berbicara <br> 

					' . checkboxrm2b($decodedData['gangguan_hemodinamik_berat_1']) . 'Gangguan hemo dinamik sedang (akral dingin, pucat, kulit basah) <br>

					' . checkboxrm2b($decodedData['takikardi_moderate_1']) . 'Takikardi moderate <br> 

					' . checkboxrm2b($decodedData['kehilangan_darah_1']) . 'Kehilangan banyak darah <br> 

					' . checkboxrm2b($decodedData['tanda_dehidrasi_plus_1']) . ' Tandadehidrasi berat (+) <br> 

					' . checkboxrm2b($decodedData['pengisian_kapiler_sedang_2']) . ' Pengisian kapiler 2-4 detik <br> 
				</td>

				<td>
					' . checkboxrm2b($decodedData['sirkulasi_plus_3']) . 'Sirkulasi (+)<br>
				
					' . checkboxrm2b($decodedData['gangguan_ringan_3']) . 'Gangguan hemo dinamik ringan (denyut nadi perifer teraba, kulit pucat, akral hangat) <br> 

					' . checkboxrm2b($decodedData['takikardi_ringan_1']) . 'Takikardi ringan <br>

					' . checkboxrm2b($decodedData['tanda_dehidrasi_sedang_1']) . 'Tandadehidrasi sedang (+) <br> 
				</td>

				<td>
					' . checkboxrm2b($decodedData['nadi_teraba_plus_4_1']) . 'Nadi teraba <br>
				
					' . checkboxrm2b($decodedData['gangguan_hemodinamik_4_1']) . 'Gangguan hemodinamik (-) <br> 

					' . checkboxrm2b($decodedData['tanpa_dinamik_4_1']) . 'Gangguan hemo dinamik sedang (akral dingin, pucat, kulit basah) <br>

					' . checkboxrm2b($decodedData['takikardi_moderate_1']) . 'Tanpa gangguan hemo dinamik <br> 

					' . checkboxrm2b($decodedData['denyut_nadi_hangat_4_1']) . 'Denyut nadi perifer teraba <br> 

					' . checkboxrm2b($decodedData['kulit_pucat_4_1']) . ' Kulit pucat kemerahan, akral hangat <br> 
				</td>

				<td>
					' . checkboxrm2b($decodedData['nadi_teraba_5_1']) . 'Nadi teraba<br>
				
					' . checkboxrm2b($decodedData['tanpa_gangguan_5_2']) . 'Tanpa gangguan hemo dinamik<br> 

					' . checkboxrm2b($decodedData['denyut_nadi_5_3']) . 'Denyut nadi perifer teraba<br>

					' . checkboxrm2b($decodedData['kulit_kemerahan_akral_hangat_5_4']) . 'Kulit kemerahan, akral hangat<br> 
				</td>

				<td>
					Frekuensi Nafas &nbsp; ' . $decodedData['nafas_k'] . '&nbsp; x/menit <br>

					Tinggi Darah &nbsp; ' . $decodedData['td_K'] . '&nbsp; mmHg <br>

					Riwayat Alergi &nbsp; ' . $decodedData['riwayat_'] . '  <br>					
				</td>
			</tr>

			<tr>
				<td>Kesadaran</td>
				<td>' . checkboxrm2b($decodedData['gcs']) . 'GCS</td>
				<td>' . checkboxrm2b($decodedData['gcs12']) . 'GCS 9-12</td>
				<td>' . checkboxrm2b($decodedData['gcs13']) . 'GCS  13</td>
				<td>' . checkboxrm2b($decodedData['gcs14']) . 'GCS 14</td>
				<td>' . checkboxrm2b($decodedData['gcs_15']) . 'GCS 15</td>
				<td>' . checkboxrm2b($decodedData['riwayat_alergi_dewasa']) . 'Riwayat Alergi</td>
			</tr>

			<tr>
				<td>Tanda Lain</td>
				<td></td>
				<td>
				
					' . checkboxrm2b($decodedData['tanda_lain_penurunan_aktivitas']) . 'Penurunan aktivitas berat (kontak mata (-), tegangan otot menurun)<br>
				
					' . checkboxrm2b($decodedData['tanda_lain_kontak_mata']) . '
					Kontak mata (-) Nyeri hebat Mengerang kesakitan
					Gangguan neurovascular berat (nadi sukar diraba, akral dingin, sensasi rasa (-), pergerakan (-), pengisian kapiler)<br> 
				
				</td>

				<td>
					' . checkboxrm2b($decodedData['tanda_lain_nyeri_sedang']) . 'Nyeri sedang – berat (pasien dapat menunjukkan letak nyeri, kulit tampak pucat, memohon-analgesia)<br>

					' . checkboxrm2b($decodedData['tanda_lain_kontak_mata_dipanggil']) . 'Kontak mata saat dipanggil / terganggu<br> 

					' . checkboxrm2b($decodedData['tanda_lain_gangguan_neorovaskular']) . 'Gangguan neorovaskular sedang, nadi teraba, akral dingin, sensasi rasa (+), pergerakan (+), pengisian kapiler <br> 
				</td>


				<td>
					' . checkboxrm2b($decodedData['tanda_lain_nyeri_pasien']) . 'Nyeri sedang (pasien sadar, kulit hangat kemerahan, meminta analgesia)<br>

					' . checkboxrm2b($decodedData['tanda_lain_tenang_kontak_mata']) . 'Tenang, ada kontak mata<br> 

					' . checkboxrm2b($decodedData['tanda_lain_neurovascular_ringan']) . 'Gangguan neurovascular ringan (nadi teraba, akral hangat, sensasi rasa (+), pergerakan (+), pengisian kapiler (normal))<br> 
				</td>

				<td>
					' . checkboxrm2b($decodedData['tanda_lain_gejala_imunisasi']) . 'Gejala klinis (-) Rencana imunisasi
					Nyeri telinga tidak demam
					Sakit dengan gejala ringan
					Lebam post trauma ringan<br>

				</td>

				<td>
					' . checkboxrm2b($decodedData['obat_lainnya']) . 'Obat<br>

					' . checkboxrm2b($decodedData['obat_lain_lain']) . 'Lain-lain<br> 

					' . checkboxrm2b($decodedData['obat_gcs_lainnya']) . 'Gcs<br> 
				</td>
			</tr>

			<tr>
				<td>Respon Time</td>
				<td>' . checkboxrm2b($decodedData['immediate']) . ' Immediate</td>
				<td>' . checkboxrm2b($decodedData['10menit_under']) . ' 10 menit</td>
				<td>' . checkboxrm2b($decodedData['30menit_under']) . ' 30 menit</td>
				<td>' . checkboxrm2b($decodedData['60menit_under']) . ' 60 menit</td>
				<td>' . checkboxrm2b($decodedData['120menit_under']) . ' 120 menit</td>
				<td></td>
			</tr>

			<tr>
				<td>Obserbasi</td>
				<td>R.Resusitasi</td>
				<td>R.Resusitasi/R.Obserbasi</td>
				<td>R.Obserbasi</td>
				<td>R.Obserbasi</td>
				<td>R.Obserbasi</td>
				<td>Tanggal <br>' . $decodedData['tanggal_2'] . '</td>
			</tr>

			<tr>
				<td colspan="5">
					' . checkboxrm2b($decodedData['emergency3']) . 'Emergency
				</td>
				<td rowspan="2" colspan="2">
					Petugas Operator<br>
					';

		$QRperawatTriase = $decodedData["perawat_pengkaji"];
		$perawatTriase = $this->to_safe_filename($QRperawatTriase) . '.jpg';
		$path_ttd_server_perawatTriase = 'C:/xampp/htdocs/pmo/images/qrcodeIT/' . $perawatTriase;
		$path_ttd_url_perawatTriase = BASE_STORAGE . '/pmo/images/qrcodeIT/' . $perawatTriase;

		// Awal HTML
		// Cek jika path valid dan file ada
		$html1 .= '<img src="' . $path_ttd_server_perawatTriase . '" width="80" height="80" /><br>
			' . $decodedData['perawat_pengkaji'] . '
		';

		$html1 .= '
				</td>
			</tr>
			<tr>
				<td colspan="5">
					' . checkboxrm2b($decodedData['false_emergency3']) . ' False Emergency
				</td>
			</tr>
		</table>
	';
		$pdf->writeHTML($html1, true, false, true, false, '');
	}
	// ============== rm2b triase ========================= //
	// ============================================================== //

	

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// RM 3 URUTAN 4
	public function _render_pdfrm3($id_kunjungan, $pdf)
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
		$berkas_klaim = 'rm3';
		$formData = $this->data_klaim_model->get_by_id($id_kunjungan,$berkas_klaim);
		if (!$formData) {
            return;
        }
		$link = $formData->nama_berkas;
		$jsonRaw = $formData->data_json;
		$id_kunjungan = $formData->id_kunjungan;
		$id_pasien_rme = $formData->id_pasien_rme;
		$decodedData = json_decode($jsonRaw, true); // JSON ke array

		$idBerkas = $decodedData['id'] ?? null;

		/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		// BATAS AMBIL DATA
		$get_id_konten = $this->data_klaim_model->get_data_dari($id_kunjungan);
		if ($get_id_konten->num_rows() > 0) {
			$id_poli = $get_id_konten->row()->id_poly;  
			$admission_id_kunjungan = $get_id_konten->row()->admission_id_kunjungan;  
			
			if ($admission_id_kunjungan == NULL) {
				// DATA DARI ANTRIAN
				$post = $this->data_klaim_model->get_data_darirj($id_kunjungan);
				$tgl_admit2 = date($post->waktu_masuk);
				$tgl_admit = format_indo(date($post->waktu_masuk));
				$nama_pasien = $post->nama_pasien;
				$nik = $post->nik;
				$pendidikan_terakhir = $post->pendidikan_terakhir;
				$nama_pekerjaan = $post->nama_pekerjaan;
				$no_rm = $post->no_rm;
				$tgl_lahir = date('d / m / Y', strtotime($post->tanggal_lahir));
				$umur = countumur($post->tanggal_lahir);
				$jenkel = $post->jenkel;
				$alamatt = $post->alamat;
				$nama_agama = $post->nama_agama;
				$no_hp = $post->no_handphone;
				$nama_jenis_pasien = $post->nama_jenis_pasien;
				$nama_poli = $post->nama_poli;
				$nama_dokter = $post->nama_dokter;
				$tgl_discharge = $post->waktu_keluar ? format_indo(date($post->waktu_keluar)) : "";
				// DATA DARI ANTRIAN
			} else {
				// DATA DARI ADMISSION
				$post = $this->data_klaim_model->get_data_dariri($id_kunjungan);
				$post->jenkel = ($post->jenkel == 2) ? 'Perempuan' : 'Laki-laki';
				$nama_pasien = $post->nama_pasien;
				$nik = $post->nik;
				$pendidikan_terakhir = $post->pendidikan_terakhir;
				$nama_pekerjaan = $post->nama_pekerjaan;
				$no_rm = $post->no_rm;
				$tgl_lahir = date('d / m / Y', strtotime($post->tanggal_lahir));
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
				// DATA DARI ADMISSION
			}
		} else {
			redirect('backend/data_klaim');
		}
		// BATAS AMBIL DATA
		/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


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
		$dokters_rm3 = $decodedData['dokter_umum'];
		// $result_dokter = $this->data_klaim_model->get_karyawan_by_nama($dokters);
		
		// $imagesttd = BASE_STORAGE . '/pmo/images/pegawai/' . $result_dokter;
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
		// =================== HALAMAN PERTAMA ====================
		$html1 = '
	    <h3 align="right">' . $namaRM . '</h3>
	    <h2 align="center">' . $judulRM . '</h2>

	    <table class="table-borderless" cellpadding="2" cellspacing="0" width="100%">
	        <tr>
	            <td><b>Dari Poliklinik/ IGD : </b>' . $nama_poli . '</td>
	        </tr>
	        <tr>
	            <td><b>Kepada YTH </b></td>
	        </tr>
	        <tr>
	            <td><b>Petugas Pendaftaran Pasien Rawat Inap</b></td>
	        </tr>
	        <tr>
	            <td><b>Di Tempat,</b></td>
	        </tr>
	        
	    </table>
	    <table class="table-borderless" cellpadding="5" cellspacing="0" width="100%" style="margin-bottom:15px;">
	    	<tr>
	            <td width="20%"><b>Kelas/ Ruangan</b></td><td width="5%"> : </td><td width="75%">' . $nama_ruangan . '</td>
	        </tr>
	        <tr>
	            <td width="20%"><b>Nama</b></td><td width="5%"> : </td><td width="75%">' . $nama_pasien . '</td>
	        </tr>
	        <tr>
	            <td width="20%"><b>Tanggal Lahir</b></td><td width="5%"> : </td><td width="75%">' . $tgl_lahir . '</td>
	        </tr>
	        <tr>
	            <td width="20%"><b>Jenis Kelamin</b></td><td width="5%"> : </td><td width="75%">' . $jenkel . '</td>
	        </tr>
	        <tr>
	            <td width="20%"><b>No. RM</b></td><td width="5%"> : </td><td width="75%">' . $no_rm . '</td>
	        </tr>
	        <tr>
	            <td width="20%"><b>Pekerjaan</b></td><td width="5%"> : </td><td width="75%">' . $nama_pekerjaan . '</td>
	        </tr>
	        <tr>
	            <td width="20%"><b>Diagnosa</b></td><td width="5%"> : </td><td width="75%">' . $decodedData['diagnosa'] . '</td>
	        </tr>
	        <tr>
	            <td width="20%"><b>Alamat</b></td><td width="5%"> : </td><td width="75%">' . $alamatt . '</td>
	        </tr>
	    </table>';

	    $identifikasiMasuk = $decodedData['identifikasi_pasien_masuk'];
		$opsiIdentifikasi = [
		    'Preventif',
		    'Kuratif',
		    'Paliatif',
		    'Rehabilitatif'
		];

		// Jika bisa lebih dari satu, ubah ke array
		$selectedItems = array_map('trim', explode(',', strtolower($identifikasiMasuk)));

		$html1 .= '<br/><br/><table cellpadding="5" cellspacing="0" width="70%">
		    <tr>
		        <td colspan="' . count($opsiIdentifikasi) . '"><b>Identifikasi Pasien Masuk:</b></td>
		    </tr>
		    <tr>';

		foreach ($opsiIdentifikasi as $opsi) {
		    $checked = in_array(strtolower($opsi), $selectedItems) ? '[v]' : '[ ]';
		    $html1 .= '<td><b>' . $checked . '</b> ' . $opsi . '</td>';
		}

		$html1 .= '</tr>
		</table>';


		// =================== TTD MASUKKAN KE DALAM =================== //
        $safe_filename_dokters_rm3 = $this->to_safe_filename($dokters_rm3) . '.jpg';
		$path_ttd_server_dokters_rm3 = 'C:/xampp/htdocs/pmo/images/qrcodeIT/' . $safe_filename_dokters_rm3;
		$path_ttd_url_dokters_rm3 = BASE_STORAGE . '/pmo/images/qrcodeIT/' . $safe_filename_dokters_rm3;
		$html1 .= '<br/><h4 align="right">'.$nama_kab. ', ' . date('d / m / Y', strtotime($decodedData['tanggal_city'])) .'</h4>
		           <h4 align="right">Dokter yang memeriksa,</h4>';
		if (file_exists($path_ttd_server_dokters_rm3)) {
		    $html1 .= '<div align="right">
		                   <img src="' . $path_ttd_url_dokters_rm3 . '" width="80" height="80" />
		               </div>';
		}
		// Nama dokter tetap ditampilkan
		$html1 .= '<br/><span align="right">' . $decodedData['dokter_umum'] . '</span><br/>';
		// =================== TTD MASUKKAN KE DALAM =================== //
		

		// CETAK HALAMAN 1
		$pdf->writeHTML($html1, true, false, true, false, '');
	}
	// RM 3 URUTAN 4
	//////////////////////////////////////////////////////////////////////////////////////////
    
	
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// RM 7 URUTAN 5
	public function _render_pdfrm7($id_kunjungan, $pdf)
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
	    $berkas_klaim = 'rm7';
	    $formData = $this->data_klaim_model->get_by_id($id_kunjungan, $berkas_klaim);
	    if (!$formData) {
	        return;
	    }
	    $link = $formData->nama_berkas;
	    $jsonRaw = $formData->data_json;
	    $id_kunjungan = $formData->id_kunjungan;
	    $id_pasien_rme = $formData->id_pasien_rme;
	    $decodedData = json_decode($jsonRaw, true); // JSON ke array

	    $idBerkas = $decodedData['id'] ?? null;

	    // BATAS AMBIL DATA
	    $get_id_konten = $this->data_klaim_model->get_data_dari($id_kunjungan);
	    if ($get_id_konten->num_rows() > 0) {
	        $id_poli = $get_id_konten->row()->id_poly;  
	        $admission_id_kunjungan = $get_id_konten->row()->admission_id_kunjungan;  

	        if ($admission_id_kunjungan == NULL) {
	            // DATA DARI ANTRIAN
	            $post = $this->data_klaim_model->get_data_darirj($id_kunjungan);
	            $tgl_admit2 = date($post->waktu_masuk);
	            $tgl_admit = format_indo(date($post->waktu_masuk));
	            $nama_pasien = $post->nama_pasien;
	            $nik = $post->nik;
	            $pendidikan_terakhir = $post->pendidikan_terakhir;
	            $nama_pekerjaan = $post->nama_pekerjaan;
	            $no_rm = $post->no_rm;
	            $tgl_lahir = date('d / m / Y', strtotime($post->tanggal_lahir));
	            $umur = countumur($post->tanggal_lahir);
	            $jenkel = $post->jenkel;
	            $alamatt = $post->alamat;
	            $nama_agama = $post->nama_agama;
	            $no_hp = $post->no_handphone;
	            $nama_jenis_pasien = $post->nama_jenis_pasien;
	            $nama_poli = $post->nama_poli;
	            $nama_dokter = $post->nama_dokter;
	            $tgl_discharge = $post->waktu_keluar ? format_indo(date($post->waktu_keluar)) : "";
	        } else {
	            // DATA DARI ADMISSION
	            $post = $this->data_klaim_model->get_data_dariri($id_kunjungan);
	            $post->jenkel = ($post->jenkel == 2) ? 'Perempuan' : 'Laki-laki';
	            $nama_pasien = $post->nama_pasien;
	            $nik = $post->nik;
	            $pendidikan_terakhir = $post->pendidikan_terakhir;
	            $nama_pekerjaan = $post->nama_pekerjaan;
	            $no_rm = $post->no_rm;
	            $tgl_lahir = date('d / m / Y', strtotime($post->tanggal_lahir));
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
	        }
	    } else {
	        redirect('backend/data_klaim');
	    }

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
	    $dokters_rm7 = $decodedData['dokter_umum'];
	    $dokters_rm7_2 = $decodedData['dokter_umum_2'];
	    $dokters_rm7_3 = $decodedData['dokter_umum_3'];

	    
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
	    $html1 = '
	    <h3 align="right">' . $namaRM . '</h3>
	    <h2 align="center">' . $judulRM . '</h2>
	    <table cellpadding="5" cellspacing="0" style="border:1px solid black; width:100%;">
	        <tr><td width="15%" style="border:1px solid black;"><b>Tanggal</b></td><td  style="border:1px solid black;" width="18%" ><b>Nama Pasien</b></td><td  style="border:1px solid black;" width="15%" ><b>Umur</b></td><td  style="border:1px solid black;" width="13%" ><b>Kelamin</b></td><td  style="border:1px solid black;" width="16%" ><b>Ruangan</b></td><td  style="border:1px solid black;" width="13%" ><b>Kelas</b></td><td  style="border:1px solid black;" width="10%" ><b>No. RM</b></td></tr>
	        
	        <tr><td width="15%" style="border:1px solid black;">' . $tgl_admit . '</td><td  style="border:1px solid black;">' . $nama_pasien . '</td><td  style="border:1px solid black;">' . $umur . '</td><td  style="border:1px solid black;">' . $jenkel . '</td><td  style="border:1px solid black;">' . $nama_ruangan . '</td><td  style="border:1px solid black;">' . $kelas . '</td><td  style="border:1px solid black;">' . $no_rm . '</td></tr>
	    </table>
	    <h2 align="center"><b>Konsultasi</b></h2>
	    <table class="table-borderless" cellpadding="5" cellspacing="0" width="100%">
	        <tr><td width="20%"><b>Kepada YTH </b></td><td width="80%">' . $decodedData['kepada_yth'] . '</td></tr>
	        <tr>';
	        $safe_filename_dokters_rm7 = $this->to_safe_filename($dokters_rm7) . '.jpg';
			$path_ttd_server_dokters_rm7 = 'C:/xampp/htdocs/pmo/images/qrcodeIT/' . $safe_filename_dokters_rm7;
			$path_ttd_url_dokters_rm7 = BASE_STORAGE . '/pmo/images/qrcodeIT/' . $safe_filename_dokters_rm7;


			$html1 .= '<td width="20%"><b>T.S Dr</b></td>';
			if (file_exists($path_ttd_server_dokters_rm7)) {
			    $html1 .= '<td width="80%"><div align="left">
			                   <img src="' . $path_ttd_url_dokters_rm7 . '" width="80" height="80" />
			               </div>';
			}
			// Nama dokter tetap ditampilkan
			$html1 .= '' . $decodedData['dokter_umum'] . '</td>';

	        $html1 .='</tr>
	        <tr><td width="20%"><b>Ahli</b></td><td width="80%">' . $decodedData['ahli'] . '</td></tr>
	        <tr><td width="20%"><b>Dengan Hormat,</b></td></tr>
	        <tr><td width="100%"><b>Mohon konsultasi penanganan lebih lanjut terhadap pasien tersebut diatas yang kamirawat dengan</b></td></tr>
	        <tr><td width="20%"><b>Diagnosa</b></td><td width="80%">' . $decodedData['diagnosa'] . '</td></tr>
	        <tr><td width="20%"><b>Terapi Sementara</b></td><td width="80%">' . $decodedData['terapi_sementara'] . '</td></tr>
	        <tr><td width="20%"><b>Pemeriksaan yang telah dilakukan</b></td><td width="80%">' . $decodedData['pemeriksaan_sementara'] . '</td></tr>
	    </table>';
	    
	    $safe_filename_dokters_rm7_2 = $this->to_safe_filename($dokters_rm7_2) . '.jpg';
		$path_ttd_server_dokters_rm7_2 = 'C:/xampp/htdocs/pmo/images/qrcodeIT/' . $safe_filename_dokters_rm7_2;
		$path_ttd_url_dokters_rm7_2 = BASE_STORAGE . '/pmo/images/qrcodeIT/' . $safe_filename_dokters_rm7_2;

		$html1 .= '<br/><h4 align="right">' . $decodedData['dokter_umum_2'] . '</h4>
		           <h4 align="right">Salam Sejawat,</h4>';
		if (file_exists($path_ttd_server_dokters_rm7_2)) {
		    $html1 .= '<div align="right">
		                   <img src="' . $path_ttd_url_dokters_rm7_2 . '" width="80" height="80" />
		               </div>';
		}
		// Nama dokter tetap ditampilkan
		$html1 .= '<h4 align="right">' . $decodedData['dokter_umum_2'] . '</h4>';


	    $pdf->writeHTML($html1, true, false, true, false, '');
	    $pdf->AddPage();

		// Judul
		// $html2 .= '<br/><h2 align="center"><b>Jawaban Konsultasi</b></h2>';

		// Tampilkan gambar setelah teks "Yth T.S,"
		if (!empty($decodedData['image_drawer']['state_image_11'])) {
		    $imgJson = $decodedData['image_drawer']['state_image_11'];

		    // Step 1: Decode string JSON menjadi array
		    $imgData = json_decode($imgJson, true);
		    
		    // Step 2: Ambil base64-nya
		    if (!empty($imgData['markers'][0]['drawingImgUrl'])) {
		        $src = $imgData['markers'][0]['drawingImgUrl'];

		        if (strpos($src, 'data:image') === 0) {
		            [$meta, $content] = explode(',', $src);
		            $mime = explode(':', explode(';', $meta)[0])[1]; // image/png
		            $type = strtoupper(substr($mime, strpos($mime, '/') + 1)); // PNG

		            $imageData = base64_decode($content);
		            $tmpPath = FCPATH . 'assets2/rme/img/testttd' . strtolower($type);
		            file_put_contents($tmpPath, $imageData);

		            if (file_exists($tmpPath)) {
		                // Menambahkan teks "Yth T.S," dengan margin dan gambar setelahnya
		                $pdf->SetXY(10, $pdf->GetY() + 5); // Memberikan jarak vertikal sebelum gambar
		                $pdf->SetFont('times', 'B', 14); // 'B' untuk bold, 16 adalah ukuran font
						// Menampilkan teks
						$pdf->Cell(0, 0, 'Jawaban Konsultasi', 0, 1, 'C');
						$pdf->SetFont('times', '', 11); // 'B' untuk bold, 16 adalah ukuran font
		                $pdf->Cell(20, 5, 'Yth T.S,', 0, 1); // Tampilkan teks "Yth T.S,"
		                $pdf->Cell(20, 5, $nama_pasien, 0, 1); // Tampilkan teks "Yth T.S,"
		                
		                // Tampilkan gambar setelah teks
		                $pdf->SetXY(10, $pdf->GetY() + 5); // Mengatur posisi gambar setelah teks
		                $pdf->Image($tmpPath, $pdf->GetX(), $pdf->GetY(), 20, 20, $type); // Menampilkan gambar
		                
		                // Memberikan jarak setelah gambar
		                $pdf->Ln(20); // Jarak setelah gambar, sesuaikan sesuai kebutuhan
		                
		                // Menampilkan informasi lain setelah gambar
		                $pdf->SetXY(10, $pdf->GetY() + 5); // Memberikan jarak vertikal untuk teks berikutnya

		                $pdf->Cell(20, 5, date('d / m / Y', strtotime($decodedData['tanggal_jawaban'])), 0, 1); // Tanggal jawaban
		                
		                // Hapus file sementara setelah penggunaan
		                unlink($tmpPath);
		            }
		        }
		    }
		}

		$html2 ='<table class="table-borderless" cellpadding="5" cellspacing="0" width="100%">
	        <tr><td width="20%"><b>Dengan Hormat, </b></td></tr>
	        <tr><td width="100%"><b>Mengenai pasien yang dikonsulkan pada pemeriksaan os ini didapati :</b></td></tr>
	        <tr><td width="100%">' . $decodedData['hasil_pemeriksaan'] . '</td></tr>
	        <tr><td width="100%"><b>Advis</b></td></tr>
	        <tr><td width="100%">' . $decodedData['advis'] . '</td></tr>
	    </table>';

	    $OS = $decodedData['os'];
		$opsiOS = [
		    'Dikembalikan',
		    'Dirawat bersama diambil',
		    'Alih (Sementara / Selanjutnya)'
		    
		];

		// Jika bisa lebih dari satu, ubah ke array
		$selectedItems = array_map('trim', explode(',', strtolower($OS)));

		$html2 .= '<br/><br/><table cellpadding="5" cellspacing="0" width="100%">
		    <tr>
		        <td colspan="' . count($opsiOS) . '"><b>O.S**</b></td>
		    </tr>
		    <tr>';

		foreach ($opsiOS as $opsi) {
		    $checked = in_array(strtolower($opsi), $selectedItems) ? '[v]' : '[ ]';
		    $html2 .= '<td><b>' . $checked . '</b> '. $opsi . '</td>';
		}

		$html2 .= '</tr>
		</table>';

		$safe_filename_dokters_rm7_3 = $this->to_safe_filename($dokters_rm7_3) . '.jpg';
		$path_ttd_server_dokters_rm7_3 = 'C:/xampp/htdocs/pmo/images/qrcodeIT/' . $safe_filename_dokters_rm7_3;
		$path_ttd_url_dokters_rm7_3 = BASE_STORAGE . '/pmo/images/qrcodeIT/' . $safe_filename_dokters_rm7_3;


		$html2 .= '<br/><h4 align="right">Salam Sejawat,</h4>';
		if (file_exists($path_ttd_server_dokters_rm7_3)) {
		    $html2 .= '<div align="right">
		                   <img src="' . $path_ttd_url_dokters_rm7_3 . '" width="80" height="80" />
		               </div>';
		}
		// Nama dokter tetap ditampilkan
		$html2 .= '<h4 align="right">' . $decodedData['dokter_umum_3'] . '</h4>';


	    $pdf->writeHTML($html2, true, false, true, false, '');
	    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	    $pdf->AddPage();
	    // === Bagian KONSULTASI ===
		$jumlahKonsultasi = count($decodedData['kepada_yth_tb1']); // asumsikan semua array panjangnya sama

		for ($i = 0; $i < $jumlahKonsultasi; $i++) {
		    $html3 = '
		    <h3 align="right">' . htmlspecialchars($namaRM) . '</h3>
		    <h2 align="center">' . htmlspecialchars($judulRM) . '</h2>

		    <table cellpadding="5" cellspacing="0" style="border:1px solid black; width:100%;">
		        <tr>
		            <td style="border:1px solid black;"><b>Tanggal</b></td>
		            <td style="border:1px solid black;"><b>Nama Pasien</b></td>
		            <td style="border:1px solid black;"><b>Umur</b></td>
		            <td style="border:1px solid black;"><b>Kelamin</b></td>
		            <td style="border:1px solid black;"><b>Ruangan</b></td>
		            <td style="border:1px solid black;"><b>Kelas</b></td>
		            <td style="border:1px solid black;"><b>No. RM</b></td>
		        </tr>
		        <tr>
		            <td style="border:1px solid black;">' . htmlspecialchars($tgl_admit) . '</td>
		            <td style="border:1px solid black;">' . htmlspecialchars($nama_pasien) . '</td>
		            <td style="border:1px solid black;">' . htmlspecialchars($umur) . '</td>
		            <td style="border:1px solid black;">' . htmlspecialchars($jenkel) . '</td>
		            <td style="border:1px solid black;">' . htmlspecialchars($nama_ruangan) . '</td>
		            <td style="border:1px solid black;">' . htmlspecialchars($kelas) . '</td>
		            <td style="border:1px solid black;">' . htmlspecialchars($no_rm) . '</td>
		        </tr>
		    </table>

		    <h2 align="center"><b>Konsultasi</b></h2>
		    <table cellpadding="5" cellspacing="0" width="100%">
		        <tr><td width="20%"><b>Kepada YTH</b></td><td width="80%">' . htmlspecialchars($decodedData['kepada_yth_tb1'][$i] ?? '-') . '</td></tr>
		        <tr>';
		        $dokter_umum_tb1_1 = $decodedData['dokter_umum_tb1_1'];
		        $safe_filename_dokter_umum_tb1_1 = $this->to_safe_filename($dokter_umum_tb1_1) . '.jpg';
				$path_ttd_server_dokters_umum_tb1_1 = 'C:/xampp/htdocs/pmo/images/qrcodeIT/' . $safe_filename_dokter_umum_tb1_1;
				$path_ttd_url_dokters_umum_tb1_1 = BASE_STORAGE . '/pmo/images/qrcodeIT/' . $safe_filename_dokter_umum_tb1_1;


				$html3 .= '<td width="20%"><b>T.S Dr</b></td>';
				if (file_exists($path_ttd_server_dokters_umum_tb1_1)) {
				    $html3 .= '<td width="80%"><div align="left">
				                   <img src="' . $path_ttd_url_dokters_umum_tb1_1 . '" width="80" height="80" />
				               </div>';
				}
				// Nama dokter tetap ditampilkan
				$html3 .= '' . $decodedData['dokter_umum_tb1_1'] . '</td>';

		        $html3 .='</tr>
		        <tr><td width="20%"><b>Ahli</b></td><td width="80%">' . htmlspecialchars($decodedData['ahli_tb1'][$i] ?? '-') . '</td></tr>
		        <tr><td><b>Dengan Hormat,</b></td></tr>
		        <tr><td colspan="2"><b>Mohon konsultasi penanganan lebih lanjut terhadap pasien tersebut di atas yang kami rawat dengan:</b></td></tr>
		        <tr><td><b>Diagnosa</b></td><td>' . htmlspecialchars($decodedData['diagnosa_tb1'][$i] ?? '-') . '</td></tr>
		        <tr><td><b>Terapi Sementara</b></td><td>' . htmlspecialchars($decodedData['terapi_sementara_tb1'][$i] ?? '-') . '</td></tr>
		        <tr><td><b>Pemeriksaan yang telah dilakukan</b></td><td>' . htmlspecialchars($decodedData['pemeriksaan_sementara_tb1'][$i] ?? '-') . '</td></tr>
		    </table>';

		    // TTD
		    $dokter_ttd = $decodedData['dokter_umum_tb1_2'] ?? '';
		    $safe_filename = $this->to_safe_filename($dokter_ttd) . '.jpg';
		    $path_ttd_server = 'C:/xampp/htdocs/pmo/images/qrcodeIT/' . $safe_filename;
		    $path_ttd_url = BASE_STORAGE . '/pmo/images/qrcodeIT/' . $safe_filename;

		    $html3 .= '<br/><h4 align="right">' . htmlspecialchars($dokter_ttd) . '</h4>';
		    $html3 .= '<h4 align="right">Salam Sejawat,</h4>';
		    if (file_exists($path_ttd_server)) {
		        $html3 .= '<div align="right"><img src="' . $path_ttd_url . '" width="80" height="80" /></div>';
		    }
		    $html3 .= '<h4 align="right">' . htmlspecialchars($dokter_ttd) . '</h4>';

		    $pdf->writeHTML($html3, true, false, true, false, '');
		    $pdf->AddPage();


		    // Tampilkan gambar setelah teks "Yth T.S,"
			if (!empty($decodedData['image_drawer']['state_image_11'])) {
			    $imgJson = $decodedData['image_drawer']['state_image_11'];

			    // Step 1: Decode string JSON menjadi array
			    $imgData = json_decode($imgJson, true);
			    
			    // Step 2: Ambil base64-nya
			    if (!empty($imgData['markers'][0]['drawingImgUrl'])) {
			        $src = $imgData['markers'][0]['drawingImgUrl'];

			        if (strpos($src, 'data:image') === 0) {
			            [$meta, $content] = explode(',', $src);
			            $mime = explode(':', explode(';', $meta)[0])[1]; // image/png
			            $type = strtoupper(substr($mime, strpos($mime, '/') + 1)); // PNG

			            $imageData = base64_decode($content);
			            $tmpPath = FCPATH . 'assets2/rme/img/testttd' . strtolower($type);
			            file_put_contents($tmpPath, $imageData);

			            if (file_exists($tmpPath)) {
			                // Menambahkan teks "Yth T.S," dengan margin dan gambar setelahnya
			                $pdf->SetXY(10, $pdf->GetY() + 5); // Memberikan jarak vertikal sebelum gambar
			                $pdf->SetFont('times', 'B', 14); // 'B' untuk bold, 16 adalah ukuran font
							// Menampilkan teks
							$pdf->Cell(0, 0, 'Jawaban Konsultasi', 0, 1, 'C');
							$pdf->SetFont('times', '', 11); // 'B' untuk bold, 16 adalah ukuran font
			                $pdf->Cell(20, 5, 'Yth T.S,', 0, 1); // Tampilkan teks "Yth T.S,"
			                $pdf->Cell(20, 5, $nama_pasien, 0, 1); // Tampilkan teks "Yth T.S,"
			                
			                // Tampilkan gambar setelah teks
			                $pdf->SetXY(10, $pdf->GetY() + 5); // Mengatur posisi gambar setelah teks
			                $pdf->Image($tmpPath, $pdf->GetX(), $pdf->GetY(), 20, 20, $type); // Menampilkan gambar
			                
			                // Memberikan jarak setelah gambar
			                $pdf->Ln(20); // Jarak setelah gambar, sesuaikan sesuai kebutuhan
			                
			                // Menampilkan informasi lain setelah gambar
			                $pdf->SetXY(10, $pdf->GetY() + 5); // Memberikan jarak vertikal untuk teks berikutnya

			                $pdf->Cell(20, 5, date('d / m / Y', strtotime($decodedData['tanggal_jawaban'])), 0, 1); // Tanggal jawaban
			                
			                // Hapus file sementara setelah penggunaan
			                unlink($tmpPath);
			            }
			        }
			    }
			}



		    // === Jawaban Konsultasi
		    $html4 = '
		    <table cellpadding="5" cellspacing="0" width="100%">
		        <tr><td><b>Dengan Hormat,</b></td></tr>
		        <tr><td><b>Mengenai pasien yang dikonsulkan pada pemeriksaan OS ini didapati:</b></td></tr>
		        <tr><td>' . htmlspecialchars($decodedData['hasil_pemeriksaan_tb1'][$i] ?? '-') . '</td></tr>
		        <tr><td><b>Advis</b></td></tr>
		        <tr><td>' . htmlspecialchars($decodedData['advis_tb1'][$i] ?? '-') . '</td></tr>
		    </table>';

		    $OS = strtolower($decodedData['os_tb1'][$i] ?? '');
		    $opsiOS = ['Dikembalikan', 'Dirawat bersama diambil', 'Alih (Sementara / Selanjutnya)'];
		    $selectedItems = array_map('trim', explode(',', $OS));

		    $html4 .= '<br/><br/><table cellpadding="5" cellspacing="0" width="100%">
		        <tr><td colspan="' . count($opsiOS) . '"><b>O.S**</b></td></tr><tr>';

		    foreach ($opsiOS as $opsi) {
		        $checked = in_array(strtolower($opsi), $selectedItems) ? '[v]' : '[ ]';
		        $html4 .= '<td><b>' . $checked . '</b> ' . $opsi . '</td>';
		    }

		    $html4 .= '</tr></table>';

		    $dokter_jawab = $decodedData['dokter_umum_tb1_3'] ?? '';
		    $safe_filename_jawab = $this->to_safe_filename($dokter_jawab) . '.jpg';
		    $path_ttd_server_jawab = 'C:/xampp/htdocs/pmo/images/qrcodeIT/' . $safe_filename_jawab;
		    $path_ttd_url_jawab = BASE_STORAGE . '/pmo/images/qrcodeIT/' . $safe_filename_jawab;

		    $html4 .= '<br/><h4 align="right">Salam Sejawat,</h4>';
		    if (file_exists($path_ttd_server_jawab)) {
		        $html4 .= '<div align="right"><img src="' . $path_ttd_url_jawab . '" width="80" height="80" /></div>';
		    }
		    $html4 .= '<h4 align="right">' . htmlspecialchars($dokter_jawab) . '</h4>';

		    $pdf->writeHTML($html4, true, false, true, false, '');
		}

	    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





	}
	// RM 7 URUTAN 5
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// TTD SAMPAI SINI 30062025
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// RM 10 URUTAN 8
	public function _render_pdfrm10($id_kunjungan, $pdf)
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
		$berkas_klaim = 'rm10';
		$formData = $this->data_klaim_model->get_by_id($id_kunjungan,$berkas_klaim);
		if (!$formData) {
            return;
        }
		$link = $formData->nama_berkas;
		$jsonRaw = $formData->data_json;
		$id_kunjungan = $formData->id_kunjungan;
		$id_pasien_rme = $formData->id_pasien_rme;
		$decodedData = json_decode($jsonRaw, true); // JSON ke array

		$idBerkas = $decodedData['id'] ?? null;

		/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		// BATAS AMBIL DATA
		$get_id_konten = $this->data_klaim_model->get_data_dari($id_kunjungan);
		if ($get_id_konten->num_rows() > 0) {
			$id_poli = $get_id_konten->row()->id_poly;  
			$admission_id_kunjungan = $get_id_konten->row()->admission_id_kunjungan;  
			
			if ($admission_id_kunjungan == NULL) {
				// DATA DARI ANTRIAN
				$post = $this->data_klaim_model->get_data_darirj($id_kunjungan);
				$tgl_admit2 = date($post->waktu_masuk);
				$tgl_admit = format_indo(date($post->waktu_masuk));
				$nama_pasien = $post->nama_pasien;
				$nik = $post->nik;
				$pendidikan_terakhir = $post->pendidikan_terakhir;
				$nama_pekerjaan = $post->nama_pekerjaan;
				$no_rm = $post->no_rm;
				$tgl_lahir = date('d / m / Y', strtotime($post->tanggal_lahir));
				$umur = countumur($post->tanggal_lahir);
				$jenkel = $post->jenkel;
				$alamatt = $post->alamat;
				$nama_agama = $post->nama_agama;
				$no_hp = $post->no_handphone;
				$nama_jenis_pasien = $post->nama_jenis_pasien;
				$nama_poli = $post->nama_poli;
				$nama_dokter = $post->nama_dokter;
				$tgl_discharge = $post->waktu_keluar ? format_indo(date($post->waktu_keluar)) : "";
				// DATA DARI ANTRIAN
			} else {
				// DATA DARI ADMISSION
				$post = $this->data_klaim_model->get_data_dariri($id_kunjungan);
				$post->jenkel = ($post->jenkel == 2) ? 'Perempuan' : 'Laki-laki';
				$nama_pasien = $post->nama_pasien;
				$nik = $post->nik;
				$pendidikan_terakhir = $post->pendidikan_terakhir;
				$nama_pekerjaan = $post->nama_pekerjaan;
				$no_rm = $post->no_rm;
				$tgl_lahir = date('d / m / Y', strtotime($post->tanggal_lahir));
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
				// DATA DARI ADMISSION
			}
		} else {
			redirect('backend/data_klaim');
		}
		// BATAS AMBIL DATA
		/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


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
		
		// $imagesttd = BASE_STORAGE . '/pmo/images/pegawai/' . $result_dokter;
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
		$html1 = '
	    <h3 align="right">' . $namaRM . '</h3>
	    <h2 align="center">' . $judulRM . '</h2>

	    <table class="table-borderless" cellpadding="5" cellspacing="0" width="100%">
	        <tr>
	            <td><b>Nama Pasien : </b>' . $nama_pasien . '</td>
	        </tr>
	        <tr>
	            <td><b>No RM : </b>' . $no_rm . '</td>
	        </tr>
	        <tr>
	            <td><b>Kelas/ Ruangan : </b>' . $kelas . ' / '.$nama_ruangan.'</td>
	        </tr>
	    </table>';
$html1 .= '<br><h3>Hasil Laboratorium</h3>';
		// Awal tabel hasil lab (di dalam <td>)
		$html1 .= '<table cellpadding="4" cellspacing="0" border="1" width="100%">
		    <thead>
		        <tr style="background-color:#fff;">
		        	<th width="70%"><b>Pemeriksaan Penunjang</b></th>
		            <th width="20%"><b>Tanggal Pemeriksaan</b></th>
		            
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
		        	<td width="70%">' . $detail['nama_transaksi'] . '</td>
		            <td width="20%">' . date('d-m-Y', strtotime($detail['tanggal_input'])) . '</td>
		            
		            <td align="center" width="10%">' . $detail['qty'] . '</td>
		        </tr>';
		    }
		}

		if (empty($lab_rows)) {
		    $lab_rows = '<tr><td colspan="3" align="center">- Tidak ada Pemeriksaan laboratorium </td></tr>';
		}

		$html1 .= $lab_rows;
		// Tutup tabel hasil lab dan td
		$html1 .= '</tbody></table>';

		$rad_data = $this->data_klaim_model->get_radiologi_by_patient($id_kunjungan);

$html1 .= '<br><h3>Hasil Radiologi dan USG</h3>';

if (!empty($rad_data)) {
    $html1 .= '<table border="1" cellpadding="5" cellspacing="0" width="100%">';
    $html1 .= '<thead><tr><th width="35%">Pemeriksaan Penunjang</th><th width="15%">Tanggal Pemeriksaan</th><th width="50%">Hasil</th></tr></thead>';
    $html1 .= '<tbody>';

    $no = 1;
    foreach ($rad_data as $row) {
        $html1 .= '<tr>';
        $html1 .= '<td width="35%">' . $row['nama'] . '</td>';
        $html1 .= '<td width="15%">' . date('d-m-Y', strtotime($row['created_at'])) . '</td>';
        $html1 .= '<td width="50%">' . $row['title'] .' '. $row['note'] . '</td>';
        

        
        $html1 .= '</tr>';
    }

    $html1 .= '</tbody></table>';
} else {
    $html1 .= '<p>Tidak ada Pemeriksaan Radiologi.</p>';
}
$html1 .= '<br><h3>Hasil EKG</h3>';
		$ekgText = '';
		foreach ($decodedData['pemeriksaanpenunjang'] as $item) {
		    if (stripos($item, 'EKG') !== false) {
		        $ekgText = $item;
		        break;
		    }
		}

		// Tambahkan ke HTML jika ada
		if (!empty($ekgText)) {
		    $html1 .= '
		    <table border="1" cellpadding="5" cellspacing="0" width="100%">
		        <tr>
		            <td><b>' . $ekgText . '</b></td>
		        </tr>
		    </table>';
		} else {
		    $html1 .= '<p>Tidak ada hasil EKG ditemukan.</p>';
		}
		// LANJUT DESAIN PDF NYA DISINI>>>
		$pdf->writeHTML($html1, true, false, true, false, '');
	}
	// RM 10 URUTAN 8
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


	public function _render_pdfrmcppt($id_kunjungan, $pdf)
	{
	    // Ambil data unit
	    $unit = $this->site_model->get_unit_data();
	    $lokasi = $unit['alamat'] . ', Kelurahan ' . $unit['nama_kel'] . ', Kecamatan ' . $unit['nama_kec'] . ', ' . $unit['nama_kab'] . ', ' . $unit['nama_prov'];

	    // Ambil data settings
	    $getsettings = $this->site_model->get_settings_data();
	    $site_title = $getsettings['nama'];
	    $imagesrm16 = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];

	    // Ambil data FORM RME
	    $berkas_klaim = 'rm_cppt';
	    $formData = $this->data_klaim_model->get_by_id($id_kunjungan, $berkas_klaim);
	    if (!$formData) return;

	    $link = $formData->nama_berkas;
	    $jsonRaw = $formData->data_json;
	    $decodedData = json_decode($jsonRaw, true);

	    // Ambil data kunjungan
	    $get_id_konten = $this->data_klaim_model->get_data_dari($id_kunjungan);
	    if ($get_id_konten->num_rows() > 0) {
	        $admission_id_kunjungan = $get_id_konten->row()->admission_id_kunjungan;

	        if ($admission_id_kunjungan == NULL) {
	            $post = $this->data_klaim_model->get_data_darirj($id_kunjungan);
	            $no_bpjs = $post->no_bpjs;
	            $nama_pasien = $post->nama_pasien;
	            $nik = $post->nik;
	            $pendidikan_terakhir = $post->pendidikan_terakhir;
	            $nama_pekerjaan = $post->nama_pekerjaan;
	            $no_rm = $post->no_rm;
	            $tgl_lahir = date('d / m / Y', strtotime($post->tanggal_lahir));
	            $nama_suku = $post->nama_suku;
	            $umur = countumur($post->tanggal_lahir);
	            $jenkel = $post->jenkel;
	            $alamatt = $post->alamat;
	            $nama_agama = $post->nama_agama;
	            $no_hp = $post->no_handphone;
	            $nama_jenis_pasien = $post->nama_jenis_pasien;
	            $kelas = $post->klsrawat;
	            $nama_poli = $post->nama_poli;
	            $nama_dokter = $post->nama_dokter;
	            $nama_ruangan = '-';
	            $kelas = '-';
	        } else {
	            $post = $this->data_klaim_model->get_data_dariri($id_kunjungan);
	            // $post->jenkel = ($post->jenkel == 2) ? 'Perempuan' : 'Laki-laki';
	            $nama_pasien = $post->nama_pasien;
	            $nik = $post->nik;
	            $pendidikan_terakhir = $post->pendidikan_terakhir;
	            $nama_pekerjaan = $post->nama_pekerjaan;
	            $no_rm = $post->no_rm;
	            $tgl_lahir = date('d / m / Y', strtotime($post->tanggal_lahir));
	            $umur = countumur($post->tanggal_lahir);
	            $jenkel = $post->jenkel;
	            $alamatt = $post->alamat;
	            $nama_suku = $post->nama_suku;
	            $nama_agama = $post->nama_agama;
	            $no_hp = $post->no_handphone;
	            $nama_poli = $post->nama_poli;
	            $nama_dokter = $post->nama_dokter;
	            $nama_ruangan = $post->nama_ruangan;
	            $kelas = $post->klsrawat;
	        }
	    } else {
	        redirect('backend/data_klaim');
	    }

	    // Simpan data perawat jika level 13
	    $levelUser = $this->session->userdata('level');
	    if ($levelUser == 13) {
	        $post->id_perawat = $this->session->userdata('id');
	        $post->nama_perawat = $this->session->userdata('name');
	    }

	    // Ambil data menu
	    $postmenu = $this->admission_model->get_menu($link);
	    $judulRM = $postmenu->isi;
	    $namaRM = $postmenu->rm;

	    $pdf->AddPage();
	    $pdf->SetFont('times', '', 11);

	    // Header PDF
	    // HEADER PDF
		// Matikan GAMBAR HEADER
		$pdf->Image($imagesrm16, 10,10, 20, 20, '', '', 1, 0);
		$pdf->SetFont('times','B',16);
		$pdf->Cell(190,4,$site_title,0,1,'C');
		$pdf->SetFont('times','B',10);
		$pdf->MultiCell(45, 5, '', 0, 'C', 0, 0, '', '', true);
		$pdf->MultiCell(100, 5, $lokasi."\n", 0, 'C', 0, 1, '' ,'', true);
		$pdf->Cell(10,4,'',0,1);
		$pdf->writeHTML("<hr>", true, false, false, false, '');


	    // Identitas Pasien
	    $pdf->SetFont('times','',10);
	    $html = '
	    <h3 align="right">' . $namaRM . '</h3>
	    <h2 align="center">' . $judulRM . '</h2>
	    <table cellpadding="5" cellspacing="0" width="100%">
	        <tr>
	        	<td width="50%"><b>Nama Pasien : </b>' . $nama_pasien . '</td>
	        	<td width="50%"><b>Agama : </b>' . $nama_agama . '</td>
	        </tr>
	        <tr>
	            <td width="50%"><b>Tanggal Lahir : </b>' . $tgl_lahir . '</td>
	            <td width="50%"><b>Suku/ Bangsa : </b>' . $nama_suku . '</td>
	        </tr>
	        <tr>
	        	<td width="50%"><b>Jenis Kelamin : </b>' . $jenkel . '</td>
	        	<td width="50%"><b>Alamat : </b>' . $alamatt . '</td>
	        </tr>
	        <tr>
	        	<td width="50%"><b>No. RM : </b>' . $no_rm . '</td>
	        	<td width="50%"><b>NIK : </b>' . $nik . '</td>
	        </tr>
	        
	    </table><br/>';

	    // Ambil isi data
	    $tanggal_jam = $decodedData['tanggal_jam'] ?? [];
	    $ppa = $decodedData['ppa'] ?? [];
	    $perawat_nama_cppt = $decodedData['perawat_nama'] ?? [];
	    $dokter_umum_nama_cppt = $decodedData['dokter_umum_nama'] ?? [];
	    $soap_s = $decodedData['soap_s'] ?? [];
	    $soap_o = $decodedData['soap_o'] ?? [];
	    $soap_a = $decodedData['soap_a'] ?? [];
	    $soap_p = $decodedData['soap_p'] ?? [];
	    $instruksi = $decodedData['instruksi'] ?? [];

	    $html .= '<table border="1" cellpadding="5" cellspacing="0" width="100%">
	    <tr style="font-weight: bold; text-align: center;">
	        <td width="4%">No</td>
	        <td width="12%">Tanggal / Jam</td>
	        <td width="18%">Profesional Pemberi Asuhan</td>
	        <td width="26%">Hasil Asesmen Pasien dan Pemberian Pelayanan</td>
	        <td width="20%">Instruksi PPA</td>
	        <td width="20%">Review & Verifikasi DPJP</td>
	    </tr>';

	for ($i = 0; $i < count($tanggal_jam); $i++) {
	    if (empty($tanggal_jam[$i]) && empty($ppa[$i])) continue;

	    $tgljam = !empty($tanggal_jam[$i]) ? date('d-m-Y H:i', strtotime($tanggal_jam[$i])) : '-';
	    $ppa_val = $ppa[$i] ?? '-';
	    $s = nl2br($soap_s[$i] ?? '-');
	    $o = nl2br($soap_o[$i] ?? '-');
	    $a = nl2br($soap_a[$i] ?? '-');
	    $p = nl2br($soap_p[$i] ?? '-');
	    $instr = nl2br($instruksi[$i] ?? '-');
	    $dokter_cppt = $dokter_umum_nama_cppt[$i] ?? '-';
	    $perawat_cppt = $perawat_nama_cppt[$i] ?? '-';

	    $soap_all = "<b>S:</b> $s<br/><b>O:</b> $o<br/><b>A:</b> $a<br/><b>P:</b> $p";

	    // === QR Perawat ===
	    $safe_perawat = $this->to_safe_filename($perawat_cppt) . '.jpg';
	    $path_qr_server_perawat = 'C:/xampp/htdocs/pmo/images/qrcodeIT/' . $safe_perawat;
	    $path_qr_url_perawat = BASE_STORAGE . '/pmo/images/qrcodeIT/' . $safe_perawat;

	    $ppa_with_qr = file_exists($path_qr_server_perawat)
	        ? '<img src="' . $path_qr_url_perawat . '" width="60" height="60" /><br/>'
	        : '-<br/>' . $perawat_cppt;
	    $ppa_with_qr .= nl2br($ppa_val) . '<br/>' . $perawat_cppt;

	   
	    // === QR Dokter ===
	    $safe_dokter = $this->to_safe_filename($dokter_cppt) . '.jpg';
	    $path_qr_server_dokter = 'C:/xampp/htdocs/pmo/images/qrcodeIT/' . $safe_dokter;
	    $path_qr_url_dokter = BASE_STORAGE . '/pmo/images/qrcodeIT/' . $safe_dokter;

	    $qr_html_dokter = file_exists($path_qr_server_dokter)
	        ? '<img src="' . $path_qr_url_dokter . '" width="60" height="60" /><br/>' . $dokter_cppt
	        : '-<br/>' . $dokter_cppt;

	    // === Tulis baris tabel PDF ===
	    $html .= "<tr>
	        <td align='center'>" . ($i + 1) . "</td>
	        <td>$tgljam</td>
	        <td align='center'>$ppa_with_qr</td>
	        <td>$soap_all</td>
	        <td>$instr</td>
	        <td align='center'>$qr_html_dokter</td>
	    </tr>";
	}


	$html .= '</table>';


	    $pdf->writeHTML($html, true, false, true, false, '');
	}
	// RM 6 URUTAN 8
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// RM 12b URUTAN 9
	// public function _render_pdfrm12b($id_kunjungan, $pdf)
	// {
	//     // Ambil data unit
	// 	$unit = $this->site_model->get_unit_data();
	// 	$nama_prov = $unit['nama_prov'];
	// 	$nama_kab = $unit['nama_kab'];
	// 	$nama_kec = $unit['nama_kec'];
	// 	$nama_kel = $unit['nama_kel'];
	// 	$alamat = $unit['alamat'];
	// 	$city_sign = $unit['nama_kab'];
	// 	$lokasi = $alamat . ', Kelurahan ' . $nama_kel . ', Kecamatan ' . $nama_kec . ', ' . $nama_kab . ', ' . $nama_prov;

	// 	// Ambil data settings
	// 	$getsettings = $this->site_model->get_settings_data();
	// 	$site_title = $getsettings['nama'];
	// 	$telepon = $getsettings['telepon'];
	// 	$email = $getsettings['email'];
	// 	$images = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];

	// 	// Ambil data FORM RME berdasarkan ID
	// 	$berkas_klaim = 'rm12b';
	// 	$formData = $this->data_klaim_model->get_by_id($id_kunjungan,$berkas_klaim);
	// 	if (!$formData) {
    //         return;
    //     }
	// 	$link = $formData->nama_berkas;
	// 	$jsonRaw = $formData->data_json;
	// 	$id_kunjungan = $formData->id_kunjungan;
	// 	$id_pasien_rme = $formData->id_pasien_rme;
	// 	$decodedData = json_decode($jsonRaw, true); // JSON ke array

	// 	$idBerkas = $decodedData['id'] ?? null;

	// 	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// 	// BATAS AMBIL DATA
	// 	$get_id_konten = $this->data_klaim_model->get_data_dari($id_kunjungan);
	// 	if ($get_id_konten->num_rows() > 0) {
	// 		$id_poli = $get_id_konten->row()->id_poly;  
	// 		$admission_id_kunjungan = $get_id_konten->row()->admission_id_kunjungan;  
			
	// 		if ($admission_id_kunjungan == NULL) {
	// 			// DATA DARI ANTRIAN
	// 			$post = $this->data_klaim_model->get_data_darirj($id_kunjungan);
	// 			$tgl_admit2 = date($post->waktu_masuk);
	// 			$tgl_admit = format_indo(date($post->waktu_masuk));
	// 			$nama_pasien = $post->nama_pasien;
	// 			$nik = $post->nik;
	// 			$pendidikan_terakhir = $post->pendidikan_terakhir;
	// 			$nama_pekerjaan = $post->nama_pekerjaan;
	// 			$no_rm = $post->no_rm;
	// 			$tgl_lahir = date('d / m / Y', strtotime($post->tanggal_lahir));
	// 			$nama_suku = $post->nama_suku;
	// 			$umur = countumur($post->tanggal_lahir);
	// 			$jenkel = $post->jenkel;
	// 			$alamatt = $post->alamat;
	// 			$nama_agama = $post->nama_agama;
	// 			$no_hp = $post->no_handphone;
	// 			$nama_jenis_pasien = $post->nama_jenis_pasien;
	// 			$nama_poli = $post->nama_poli;
	// 			$nama_dokter = $post->nama_dokter;
	// 			$tgl_discharge = $post->waktu_keluar ? format_indo(date($post->waktu_keluar)) : "";
	// 			// DATA DARI ANTRIAN
	// 		} else {
	// 			// DATA DARI ADMISSION
	// 			$post = $this->data_klaim_model->get_data_dariri($id_kunjungan);
	// 			$post->jenkel = ($post->jenkel == 2) ? 'Perempuan' : 'Laki-laki';
	// 			$nama_pasien = $post->nama_pasien;
	// 			$nik = $post->nik;
	// 			$pendidikan_terakhir = $post->pendidikan_terakhir;
	// 			$nama_pekerjaan = $post->nama_pekerjaan;
	// 			$no_rm = $post->no_rm;
	// 			$tgl_lahir = date('d / m / Y', strtotime($post->tanggal_lahir));
	// 			$umur = countumur($post->tanggal_lahir);
	// 			$jenkel = $post->jenkel;
	// 			$alamatt = $post->alamat;
	// 			$nama_suku = $post->nama_suku;
	// 			$nama_agama = $post->nama_agama;
	// 			$no_hp = $post->no_handphone;
	// 			$tgl_admit2 = $post->tgl_admit;
	// 			$post->umur = countumur($post->tanggal_lahir);
	// 			$tgl_admit = format_indo(date($post->tgl_admit));
	// 			$tgl_discharge = $post->tgl_discharge ? format_indo(date($post->tgl_discharge)) : "";
	// 			$nama_lantai = $post->nama_lantai;
	// 			$nama_dokter = $post->nama_dokter;
	// 			$nama_poli = $post->nama_poli;
	// 			$nama_ruangan = $post->nama_ruangan;
	// 			$no_bad = $post->no_bad;
	// 			$nama_jenis_pasien = $post->nama_jenis_pasien;
	// 			$kelas = $post->kelas;
	// 			$lama = countme($post->tgl_admit);
	// 			// DATA DARI ADMISSION
	// 		}
	// 	} else {
	// 		redirect('backend/data_klaim');
	// 	}
	// 	// BATAS AMBIL DATA
	// 	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// 	// Simpan data perawat jika user level 13
	// 	$levelUser = $this->session->all_userdata()['level'];
	// 	if ($levelUser == 13) {
	// 		$post->id_perawat = $this->session->all_userdata()['id'];
	// 		$post->nama_perawat = $this->session->all_userdata()['name'];
	// 	}

	// 	$postmenu = $this->admission_model->get_menu($link);
	// 	$judulRM = $postmenu->isi;
	// 	$namaRM = $postmenu->rm;
	// 	$linkRM = $postmenu->link;
		
	//     $pdf->AddPage();
	// 	$pdf->SetFont('times', '', 11);

	// 	// HEADER PDF
	// 	// Matikan GAMBAR HEADER
	// 	$pdf->Image($images, 10,10, 20, 20, '', '', 1, 0);
	// 	$pdf->SetFont('times','B',16);
	// 	$pdf->Cell(190,4,$site_title,0,1,'C');
	// 	$pdf->SetFont('times','B',10);
	// 	$pdf->MultiCell(45, 5, '', 0, 'C', 0, 0, '', '', true);
	// 	$pdf->MultiCell(100, 5, $lokasi."\n", 0, 'C', 0, 1, '' ,'', true);
	// 	$pdf->Cell(10,4,'',0,1);
	// 	$pdf->writeHTML("<hr>", true, false, false, false, '');

	// 	// FONT UTAMA
	// 	$pdf->SetFont('times','',10);

	// 	// LANJUT DESAIN PDF NYA DISINI>>>
	// 	$html1 .= '
	//     <h3 align="right">' . htmlspecialchars($namaRM) . '</h3>
	//     <h2 align="center">' . htmlspecialchars($judulRM) . '</h2>

	//     <table class="table-borderless" cellpadding="5" cellspacing="0" width="100%">
	//     	<tr>
	//             <td width="50%"><b>No. RM : </b>' . htmlspecialchars($no_rm) . '</td>
	//             <td width="50%"><b>Tanggal Lahir : </b>' . htmlspecialchars($tgl_lahir) . '</td>
	            
	//         </tr>
	//         <tr>
	//             <td width="50%"><b>Nama Pasien : </b>' . htmlspecialchars($nama_pasien) . '</td>
	//             <td width="50%"><b>Jenis Kelamin : </b>' . htmlspecialchars($jenkel) . '</td>
	            
	//         </tr>
	//         <tr>
	//         	<td width="50%"><b>Ruangan : </b>' . htmlspecialchars($nama_ruangan) . '</td>
	//         	<td width="50%"><b>Agama : </b>' . htmlspecialchars($nama_agama) . '</td>

	//         </tr>
	//         <tr>
	//             <td width="50%"><b>Kelas : </b>' . htmlspecialchars($kelas) . '</td>
	//             <td width="50%"><b>Suku : </b>' . htmlspecialchars($nama_suku) . '</td>
	//         </tr>

	//     </table>';

	//     // Ambil data dari JSON
	// 	$tanggal = $decodedData['tanggal'] ?? [];
	// 	$jam = $decodedData['jam'] ?? [];
	// 	$catatan_perawat = $decodedData['catatan_perawat'] ?? [];
	// 	$dokter_umum = $decodedData['dokter_umum'] ?? [];
	// 	$dokter_umum_nama = $decodedData['dokter_umum_nama'] ?? [];
	// 	$dokter_umum_qr = $decodedData['dokter_umum_qr'] ?? [];

	// 	// Buat tabel
	// 	$html1 .= '
	// 	<table border="1" cellpadding="5" cellspacing="0" width="100%">
	// 	    <thead>
	// 	        <tr>
	// 	        	<th width="4%"><b>No</b></th>
	// 	            <th width="10%"><b>Tanggal</b></th>
	// 	            <th width="6%"><b>Jam</b></th>
	// 	            <th width="40%"><b>Catatan</b></th>
	// 	            <th width="20%"><b>Dokter Umum</b></th>
	// 	            <th width="20%"><b>Tanda Tangan</b></th>
	// 	        </tr>
	// 	    </thead>
	// 	    <tbody>';

	// 	for ($i = 0; $i < count($tanggal); $i++) {
	// 	    $tgl = htmlspecialchars(format_indo(date($tanggal[$i])));
	// 	    $j = htmlspecialchars($jam[$i]);
	// 	    $catatan = nl2br(htmlspecialchars($catatan_perawat[$i]));
	// 	    $dokter = htmlspecialchars($dokter_umum_nama[$i]);
	// 	    $qr = $dokter_umum_qr[$i];

	// 	    // Jika QR tersedia, masukkan gambar QR
	// 	    // if (!empty($qr)) {
	// 	    //     $qrHtml = '<img src="' . BASE_STORAGE . '/pmo/qrcode/' . $qr . '" width="50">';
	// 	    // } else {
	// 	    //     $qrHtml = '-';
	// 	    // }

	// 	    $html1 .= '
	// 	        <tr>
		        
	// 	        	<td width="4%">' . ($i + 1) . '</td>
	// 	            <td width="10%">' . $tgl . '</td>
	// 	            <td width="6%">' . $j . '</td>
	// 	            <td width="40%">' . $catatan . '</td>
	// 	            <td width="20%">' . $dokter . '</td>';

	// 	        $dokters = $dokter;
	// 	        $result_dokter = $this->data_klaim_model->get_karyawan_by_nama($dokters);
	// 	        $path_ttd_server = 'C:/xampp/htdocs/pmo/images/pegawai/' . $result_dokter;
	// 	        $path_ttd_url = BASE_STORAGE . '/pmo/images/pegawai/' . $result_dokter;
		        
	// 	        $html1 .= '<td align="center" width="20%">';
	// 	        if ($result_dokter && file_exists($path_ttd_server)) {
	// 	            $html1 .= '<div align="center">
	// 	                           <img src="' . $path_ttd_url . '" width="80" height="80" />
	// 	                       </div>';
	// 	        }
	// 	        $html1 .= htmlspecialchars($dokter) . '</td>';
	// 	        $html1 .= '</tr>';
	// 	}

	// 	$html1 .= '
	// 	    </tbody>
	// 	</table>';


	//     // LANJUT DESAIN PDF NYA DISINI>>>
	// 	$pdf->writeHTML($html1, true, false, true, false, '');
	// }


	public function _render_pdfrm12b($id_kunjungan, $pdf)
	{
	    // Ambil data unit
	    $unit = $this->site_model->get_unit_data();
	    $lokasi = $unit['alamat'] . ', Kelurahan ' . $unit['nama_kel'] . ', Kecamatan ' . $unit['nama_kec'] . ', ' . $unit['nama_kab'] . ', ' . $unit['nama_prov'];

	    // Ambil data settings
	    $getsettings = $this->site_model->get_settings_data();
	    $site_title = $getsettings['nama'];
	    $imagesrm16 = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];

	    // Ambil data FORM RME
	    $berkas_klaim = 'rm12b';
	    $formData = $this->data_klaim_model->get_by_id($id_kunjungan, $berkas_klaim);
	    if (!$formData) return;

	    $link = $formData->nama_berkas;
	    $jsonRaw = $formData->data_json;
	    $decodedData = json_decode($jsonRaw, true);

	    // Ambil data kunjungan
	    $get_id_konten = $this->data_klaim_model->get_data_dari($id_kunjungan);
	    if ($get_id_konten->num_rows() > 0) {
	        $admission_id_kunjungan = $get_id_konten->row()->admission_id_kunjungan;

	        if ($admission_id_kunjungan == NULL) {
	            $post = $this->data_klaim_model->get_data_darirj($id_kunjungan);
	            $no_bpjs = $post->no_bpjs;
	            $nama_pasien = $post->nama_pasien;
	            $nik = $post->nik;
	            $pendidikan_terakhir = $post->pendidikan_terakhir;
	            $nama_pekerjaan = $post->nama_pekerjaan;
	            $no_rm = $post->no_rm;
	            $tgl_lahir = date('d / m / Y', strtotime($post->tanggal_lahir));
	            $nama_suku = $post->nama_suku;
	            $umur = countumur($post->tanggal_lahir);
	            $jenkel = $post->jenkel;
	            $alamatt = $post->alamat;
	            $nama_agama = $post->nama_agama;
	            $no_hp = $post->no_handphone;
	            $nama_jenis_pasien = $post->nama_jenis_pasien;
	            $kelas = $post->klsrawat;
	            $nama_poli = $post->nama_poli;
	            $nama_dokter = $post->nama_dokter;
	            $nama_ruangan = '-';
	            $kelas = '-';
	        } else {
	            $post = $this->data_klaim_model->get_data_dariri($id_kunjungan);
	            // $post->jenkel = ($post->jenkel == 2) ? 'Perempuan' : 'Laki-laki';
	            $nama_pasien = $post->nama_pasien;
	            $nik = $post->nik;
	            $pendidikan_terakhir = $post->pendidikan_terakhir;
	            $nama_pekerjaan = $post->nama_pekerjaan;
	            $no_rm = $post->no_rm;
	            $tgl_lahir = date('d / m / Y', strtotime($post->tanggal_lahir));
	            $umur = countumur($post->tanggal_lahir);
	            $jenkel = $post->jenkel;
	            $alamatt = $post->alamat;
	            $nama_suku = $post->nama_suku;
	            $nama_agama = $post->nama_agama;
	            $no_hp = $post->no_handphone;
	            $nama_poli = $post->nama_poli;
	            $nama_dokter = $post->nama_dokter;
	            $nama_ruangan = $post->nama_ruangan;
	            $kelas = $post->klsrawat;
	        }
	    } else {
	        redirect('backend/data_klaim');
	    }

	    // Simpan data perawat jika level 13
	    $levelUser = $this->session->userdata('level');
	    if ($levelUser == 13) {
	        $post->id_perawat = $this->session->userdata('id');
	        $post->nama_perawat = $this->session->userdata('name');
	    }

	    // Ambil data menu
	    $postmenu = $this->admission_model->get_menu($link);
	    $judulRM = $postmenu->isi;
	    $namaRM = $postmenu->rm;

	    $pdf->AddPage();
	    $pdf->SetFont('times', '', 11);

	    // Header PDF
	    // HEADER PDF
		// Matikan GAMBAR HEADER
		$pdf->Image($imagesrm16, 10,10, 20, 20, '', '', 1, 0);
		$pdf->SetFont('times','B',16);
		$pdf->Cell(190,4,$site_title,0,1,'C');
		$pdf->SetFont('times','B',10);
		$pdf->MultiCell(45, 5, '', 0, 'C', 0, 0, '', '', true);
		$pdf->MultiCell(100, 5, $lokasi."\n", 0, 'C', 0, 1, '' ,'', true);
		$pdf->Cell(10,4,'',0,1);
		$pdf->writeHTML("<hr>", true, false, false, false, '');


	    // Konten PDF
	    $pdf->SetFont('times','',10);

	    $html16 = '
	    <h3 align="right">' . $namaRM . '</h3>
	    <h2 align="center">' . $judulRM . '</h2>

	    <table cellpadding="5" cellspacing="0" width="100%">
	        <tr>
	            <td width="50%"><b>No. RM : </b>' . $no_rm . '</td>
	            <td width="50%"><b>Tanggal Lahir : </b>' . $tgl_lahir . '</td>
	        </tr>
	        <tr>
	            <td width="50%"><b>Nama Pasien : </b>' . $nama_pasien . '</td>
	            <td width="50%"><b>Jenis Kelamin : </b>' . $jenkel . '</td>
	        </tr>
	        <tr>
	            <td width="50%"><b>Ruangan : </b>' . $nama_ruangan . '</td>
	            <td width="50%"><b>Kelas : </b>' . $kelas . '</td>
	        </tr>
	    </table><br/>';

	    // Data JSON
	    $tanggal = $decodedData['tanggal'] ?? [];
	    $jam = $decodedData['jam'] ?? [];
	    $catatan_perawat = $decodedData['catatan_perawat'] ?? [];
	    $dokter_umum_nama = $decodedData['dokter_umum_nama'] ?? [];

	    $html16 .= '
	    <table border="1" cellpadding="5" cellspacing="0" width="100%">
	        <tr>
	            <th width="4%"><b>No</b></th>
	            <th width="10%"><b>Tanggal</b></th>
	            <th width="6%"><b>Jam</b></th>
	            <th width="40%"><b>Catatan</b></th>
	            <th width="20%"><b>Perawat</b></th>
	            <th width="20%"><b>Tanda Tangan</b></th>
	        </tr>';

	    for ($i = 0; $i < count($tanggal); $i++) {
	        $tgl = isset($tanggal[$i]) ? format_indo(date($tanggal[$i])) : '-';
	        $j = $jam[$i] ?? '-';
	        $catatan = nl2br($catatan_perawat[$i] ?? '-');
	        $nama_perawat = $dokter_umum_nama[$i] ?? '-';

	        // Ambil file tanda tangan
	        // $filename_ttd = $this->data_klaim_model->get_karyawan_by_nama($nama_perawat);
	        $filename_ttd = preg_replace('/[^A-Za-z0-9_.-]/', '_', $filename_ttd);

	        $safe_filenameperawats = $this->to_safe_filename($nama_perawat) . '.jpg';
			$path_ttd_serverperawats = 'C:/xampp/htdocs/pmo/images/qrcodeIT/' . $safe_filenameperawats;
			$path_ttd_urlperawats = BASE_STORAGE . '/pmo/images/qrcodeIT/' . $safe_filenameperawats;


	        $html16 .= '<tr>
	            <td>' . ($i + 1) . '</td>
	            <td>' . $tgl . '</td>
	            <td>' . $j . '</td>
	            <td>' . $catatan . '</td>
	            <td>' . $nama_perawat . '</td>
	            <td align="center">';

	        if (file_exists($path_ttd_serverperawats)) {
	            $html16 .= '<img src="' . $path_ttd_urlperawats . '" width="100" height="100" /><br/>' . $nama_perawat;
	        } else {
	            $html16 .= '-<br/>' . $nama_perawat;
	        }

	        $html16 .= '</td></tr>';
	    }

	    $html16 .= '</table>';

	    // Tulis ke PDF
	    $pdf->writeHTML($html16, true, false, true, false, '');
	}
	// RM 12b URUTAN 9
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// RM 12c URUTAN 10
	public function _render_pdfrm12c($id_kunjungan, $pdf)
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
		$imagesrm12c = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];

		// Ambil data FORM RME berdasarkan ID
		$berkas_klaim = 'rm12c';
		$formData = $this->data_klaim_model->get_by_id($id_kunjungan,$berkas_klaim);
		if (!$formData) {
            return;
        }
		$link = $formData->nama_berkas;
		$jsonRaw = $formData->data_json;
		$id_kunjungan = $formData->id_kunjungan;
		$id_pasien_rme = $formData->id_pasien_rme;
		$decodedData = json_decode($jsonRaw, true); // JSON ke array

		$idBerkas = $decodedData['id'] ?? null;

		/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		// BATAS AMBIL DATA
		$get_id_konten = $this->data_klaim_model->get_data_dari($id_kunjungan);
		if ($get_id_konten->num_rows() > 0) {
			$id_poli = $get_id_konten->row()->id_poly;  
			$admission_id_kunjungan = $get_id_konten->row()->admission_id_kunjungan;  
			
			if ($admission_id_kunjungan == NULL) {
				// DATA DARI ANTRIAN
				$post = $this->data_klaim_model->get_data_darirj($id_kunjungan);
				$tgl_admit2 = date($post->waktu_masuk);
				$tgl_admit = format_indo(date($post->waktu_masuk));
				$nama_pasien = $post->nama_pasien;
				$nik = $post->nik;
				$pendidikan_terakhir = $post->pendidikan_terakhir;
				$nama_pekerjaan = $post->nama_pekerjaan;
				$no_rm = $post->no_rm;
				$tgl_lahir = date('d / m / Y', strtotime($post->tanggal_lahir));
				$nama_suku = $post->nama_suku;
				$umur = countumur($post->tanggal_lahir);
				$jenkel = $post->jenkel;
				$alamatt = $post->alamat;
				$nama_agama = $post->nama_agama;
				$no_hp = $post->no_handphone;
				$nama_jenis_pasien = $post->nama_jenis_pasien;
				$nama_poli = $post->nama_poli;
				$nama_dokter = $post->nama_dokter;
				$tgl_discharge = $post->waktu_keluar ? format_indo(date($post->waktu_keluar)) : "";
				// DATA DARI ANTRIAN
			} else {
				// DATA DARI ADMISSION
				$post = $this->data_klaim_model->get_data_dariri($id_kunjungan);
				$post->jenkel = ($post->jenkel == 2) ? 'Perempuan' : 'Laki-laki';
				$nama_pasien = $post->nama_pasien;
				$nik = $post->nik;
				$pendidikan_terakhir = $post->pendidikan_terakhir;
				$nama_pekerjaan = $post->nama_pekerjaan;
				$no_rm = $post->no_rm;
				$tgl_lahir = date('d / m / Y', strtotime($post->tanggal_lahir));
				$umur = countumur($post->tanggal_lahir);
				$jenkel = $post->jenkel;
				$alamatt = $post->alamat;
				$nama_suku = $post->nama_suku;
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
				// DATA DARI ADMISSION
			}
		} else {
			redirect('backend/data_klaim');
		}
		// BATAS AMBIL DATA
		/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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
		
	    $pdf->AddPage();
		$pdf->SetFont('times', '', 11);

		// HEADER PDF
		// Matikan GAMBAR HEADER
		$pdf->Image($imagesrm12c, 10,10, 20, 20, '', '', 1, 0);
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
		$html1 = '
	    <h3 align="right">' . $namaRM . '</h3>
	    <h2 align="center">' . $judulRM . '</h2>

	    <table class="table-borderless" cellpadding="5" cellspacing="0" width="100%">
	    	<tr>
	    		<td width="50%"><b>Nama Pasien : </b>' . $nama_pasien . '</td>
	    		<td width="50%"><b>Agama : </b>' . $nama_agama . '</td>
	        </tr>
	        <tr>
	            <td width="50%"><b>Tanggal Lahir : </b>' . $tgl_lahir . '</td>
	            <td width="50%"><b>Jenis Kelamin : </b>' . $jenkel . '</td>
	            
	        </tr>
	        <tr>
	        	<td width="50%"><b>No. RM : </b>' . $no_rm . '</td>
	        	<td width="50%"><b>Suku : </b>' . $nama_suku . '</td>
	        </tr>
	    </table>';

	    
		// Hitung jumlah baris berdasarkan salah satu array, misalnya tanggal_pemeriksaan
		$jumlah_baris = count($decodedData['tanggal_pemeriksaan']);

		$html1 .= '
		<table border="1" cellpadding="4" cellspacing="0" width="100%">
			<thead>
				<tr style="background-color:#fff;">
					<th rowspan="3" align="center"><b>Tanggal/Jam</b></th>
					<th colspan="6" align="center"><b>Intake Masuk</b></th>
					<th colspan="3" align="center"><b>Output/Keluar</b></th>
					<th rowspan="3" align="center"><b>Nama Perawat</b></th>
				</tr>
				<tr style="background-color:#fff;">
					<th colspan="3" align="center"><b>INTRAVENUS</b></th>
					<th colspan="3" align="center"><b>MULUT/NGT</b></th>
					<th rowspan="2" align="center"><b>Urine</b></th>
					<th rowspan="2" align="center"><b>BAB</b></th>
					<th rowspan="2" align="center"><b>NGT</b></th>
				</tr>
				<tr style="background-color:#fff;">
					<th align="center"><b>Jenis Cairan</b></th>
					<th align="center"><b>Jumlah</b></th>
					<th align="center"><b>Total</b></th>
					<th align="center"><b>Jenis Makanan</b></th>
					<th align="center"><b>Jumlah</b></th>
					<th align="center"><b>Total</b></th>
				</tr>
			</thead>
			<tbody>';

		for ($i = 0; $i < $jumlah_baris; $i++) {
			// Format tanggal
			$tanggal_iso = $decodedData['tanggal_pemeriksaan'][$i];
			$tanggal_obj = DateTime::createFromFormat('Y-m-d\TH:i', $tanggal_iso);
			$tanggal_formatted = $tanggal_obj ? $tanggal_obj->format('d/m/Y H:i') : $tanggal_iso;

			$html1 .= '<tr>
				<td>' . htmlspecialchars($tanggal_formatted) . '</td>
				<td>' . htmlspecialchars($decodedData['jenis_cairan'][$i]) . '</td>
				<td>' . htmlspecialchars($decodedData['jumlah'][$i]) . '</td>
				<td>' . htmlspecialchars($decodedData['total'][$i]) . '</td>
				<td>' . htmlspecialchars($decodedData['jenis_makanan'][$i]) . '</td>
				<td>' . htmlspecialchars($decodedData['jumlah_makanan'][$i]) . '</td>
				<td>' . htmlspecialchars($decodedData['total_makanan'][$i]) . '</td>
				<td>' . htmlspecialchars($decodedData['urine'][$i]) . '</td>
				<td>' . htmlspecialchars($decodedData['bab'][$i]) . '</td>
				<td>' . htmlspecialchars($decodedData['ngt'][$i]) . '</td>
				<td>';

			if ($i == 0) {
				// Baris pertama tampilkan perawat pengkaji (tanpa QR)
				$html1 .= htmlspecialchars($decodedData['perawat_pengkaji']);
			} else {
				// Baris ke-2 dan seterusnya: dokter_pe[$i-1]
				$dokter_nama = isset($decodedData['dokter_pe'][$i - 1]) ? $decodedData['dokter_pe'][$i - 1] : '-';
				$safe_filename = $this->to_safe_filename($dokter_nama) . '.jpg';
				$path_server = 'C:/xampp/htdocs/pmo/images/qrcodeIT/' . $safe_filename;
				$path_url = BASE_STORAGE . '/pmo/images/qrcodeIT/' . $safe_filename;

				if (file_exists($path_server)) {
					$html1 .= '<img src="' . $path_url . '" width="40" height="40" /><br>';
				}

				$html1 .= htmlspecialchars($dokter_nama);
			}

			$html1 .= '</td></tr>';
		}

		$html1 .= '</tbody></table>';



	    // LANJUT DESAIN PDF NYA DISINI>>>
		$pdf->writeHTML($html1, true, false, true, false, '');
	}
	// RM 12c URUTAN 10
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// RM 28 URUTAN 11
	public function _render_pdfrm28($id_kunjungan, $pdf)
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
		$berkas_klaim = 'rm28';
		$formData = $this->data_klaim_model->get_by_id($id_kunjungan,$berkas_klaim);
		if (!$formData) {
            return;
        }
		$link = $formData->nama_berkas;
		$jsonRaw = $formData->data_json;
		$id_kunjungan = $formData->id_kunjungan;
		$id_pasien_rme = $formData->id_pasien_rme;
		$decodedData = json_decode($jsonRaw, true); // JSON ke array

		$idBerkas = $decodedData['id'] ?? null;

		/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		// BATAS AMBIL DATA
		$get_id_konten = $this->data_klaim_model->get_data_dari($id_kunjungan);
		if ($get_id_konten->num_rows() > 0) {
			$id_poli = $get_id_konten->row()->id_poly;  
			$admission_id_kunjungan = $get_id_konten->row()->admission_id_kunjungan;  
			
			if ($admission_id_kunjungan == NULL) {
				// DATA DARI ANTRIAN
				$post = $this->data_klaim_model->get_data_darirj($id_kunjungan);
				$tgl_admit2 = date($post->waktu_masuk);
				$tgl_admit = format_indo(date($post->waktu_masuk));
				$nama_pasien = $post->nama_pasien;
				$nik = $post->nik;
				$pendidikan_terakhir = $post->pendidikan_terakhir;
				$nama_pekerjaan = $post->nama_pekerjaan;
				$no_rm = $post->no_rm;
				$tgl_lahir = date('d / m / Y', strtotime($post->tanggal_lahir));
				$nama_suku = $post->nama_suku;
				$umur = countumur($post->tanggal_lahir);
				$jenkel = $post->jenkel;
				$alamatt = $post->alamat;
				$nama_agama = $post->nama_agama;
				$no_hp = $post->no_handphone;
				$nama_jenis_pasien = $post->nama_jenis_pasien;
				$nama_poli = $post->nama_poli;
				$nama_dokter = $post->nama_dokter;
				$tgl_discharge = $post->waktu_keluar ? format_indo(date($post->waktu_keluar)) : "";
				// DATA DARI ANTRIAN
			} else {
				// DATA DARI ADMISSION
				$post = $this->data_klaim_model->get_data_dariri($id_kunjungan);
				$post->jenkel = ($post->jenkel == 2) ? 'Perempuan' : 'Laki-laki';
				$nama_pasien = $post->nama_pasien;
				$nik = $post->nik;
				$pendidikan_terakhir = $post->pendidikan_terakhir;
				$nama_pekerjaan = $post->nama_pekerjaan;
				$no_rm = $post->no_rm;
				$tgl_lahir = date('d / m / Y', strtotime($post->tanggal_lahir));
				$umur = countumur($post->tanggal_lahir);
				$jenkel = $post->jenkel;
				$alamatt = $post->alamat;
				$nama_suku = $post->nama_suku;
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
				// DATA DARI ADMISSION
			}
		} else {
			redirect('backend/data_klaim');
		}
		// BATAS AMBIL DATA
		/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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
		
	    $pdf->AddPage();
		$pdf->SetFont('times', '', 11);

		// HEADER PDF
		// Matikan GAMBAR HEADER
		// $pdf->Image($images, 10,10, 20, 20, '', '', 1, 0);
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
		$html1 .= '
	    <h3 align="right">' . $namaRM . '</h3>
	    <h2 align="center">' . $judulRM . '</h2>

	    ';


	    // LANJUT DESAIN PDF NYA DISINI>>>
		$pdf->writeHTML($html1, true, false, true, false, '');
	}
	// RM 12c URUTAN 11
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


	// ============== RM18 E Laporan operasi ========================= //
	// ============================================================== //

	public function _render_pdfrm18e($id_kunjungan, $pdf)
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
		$imagesrm18e = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];

		// Ambil data FORM RME berdasarkan ID
		$berkas_klaim = 'rm18e';
		$formData = $this->data_klaim_model->get_by_id($id_kunjungan, $berkas_klaim);
		if (!$formData) {
			return;
		}
		$link = $formData->nama_berkas;
		$jsonRaw = $formData->data_json;
		$id_kunjungan = $formData->id_kunjungan;
		$id_pasien_rme = $formData->id_pasien_rme;
		$decodedData = json_decode($jsonRaw, true); // JSON ke array

		$idBerkas = $decodedData['id'] ?? null;
		/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		// BATAS AMBIL DATA
		$get_id_konten = $this->data_klaim_model->get_data_dari($id_kunjungan);
		if ($get_id_konten->num_rows() > 0) {
			$id_poli = $get_id_konten->row()->id_poly;
			$admission_id_kunjungan = $get_id_konten->row()->admission_id_kunjungan;

			if ($admission_id_kunjungan == NULL) {
				// DATA DARI ANTRIAN
				$post = $this->data_klaim_model->get_data_darirj($id_kunjungan);
				$tgl_admit2 = date($post->waktu_masuk);
				$tgl_admit = format_indo(date($post->waktu_masuk));
				$nama_pasien = $post->nama_pasien;
				$nik = $post->nik;
				$pendidikan_terakhir = $post->pendidikan_terakhir;
				$nama_pekerjaan = $post->nama_pekerjaan;
				$no_rm = $post->no_rm;
				$tgl_lahir = date('d / m / Y', strtotime($post->tanggal_lahir));
				$umur = countumur($post->tanggal_lahir);
				$jenkel = $post->jenkel;
				$alamatt = $post->alamat;
				$nama_agama = $post->nama_agama;
				$no_hp = $post->no_handphone;
				$nama_jenis_pasien = $post->nama_jenis_pasien;
				$nama_poli = $post->nama_poli;
				$nama_dokter = $post->nama_dokter;
				$tgl_discharge = $post->waktu_keluar ? format_indo(date($post->waktu_keluar)) : "";
				// DATA DARI ANTRIAN
			} else {
				// DATA DARI ADMISSION
				$post = $this->data_klaim_model->get_data_dariri($id_kunjungan);
				// $post->jenkel = ($post->jenkel == 2) ? 'Perempuan' : 'Laki-laki';
				$nama_pasien = $post->nama_pasien;
				$no_bpjs = $post->no_bpjs;
				$nik = $post->nik;
				$pendidikan_terakhir = $post->pendidikan_terakhir;
				$nama_pekerjaan = $post->nama_pekerjaan;
				$no_rm = $post->no_rm;
				$tgl_lahir = date('d / m / Y', strtotime($post->tanggal_lahir));
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
				$nama_hub_pasien = $post->nama_hub_pasien;
				$alamat_hub_pasien = $post->alamat_hub_pasien;
				$noHp_hub_pasien = $post->noHp_hub_pasien;
				$nama_bangsa = $post->nama_bangsa;
				$hubungan_keluarga_pasien = $post->hubungan_keluarga_pasien;
				$status_nikah = $post->status_nikah;
				$nama_suku = $post->nama_suku;
				$lama = countme($post->tgl_admit);
				// DATA DARI ADMISSION
			}
		} else {
			redirect('backend/data_klaim');
		}
		// BATAS AMBIL DATA
		////////////////////////////////////////////////////////////////////////////////////////////////////////////////



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


		// $imagesttd = BASE_STORAGE . '/pmo/images/pegawai/' . $result_dokter;
		// $imagesttdrm025 = FCPATH . 'assets/images/logo/787205dc7cf0a063e492c50da0b885a4.jpg';

		// ... Inisialisasi PDF seperti sebelumnya

		$pdf->AddPage();
		$pdf->SetFont('times', '', 11);

		// HEADER PDF
		// Matikan GAMBAR HEADER
		$pdf->Image($imagesrm18e, 10, 10, 20, 20, '', '', 1, 0);
		$pdf->SetFont('times', 'B', 16);
		$pdf->Cell(190, 4, $site_title, 0, 1, 'C');
		$pdf->SetFont('times', 'B', 10);
		$pdf->MultiCell(45, 5, '', 0, 'C', 0, 0, '', '', true);
		$pdf->MultiCell(100, 5, $lokasi . "\n", 0, 'C', 0, 1, '', '', true);
		$pdf->Cell(10, 4, '', 0, 1);
		$pdf->writeHTML("<hr>", true, false, false, false, '');

		// FONT UTAMA
		$pdf->SetFont('times', '', 11);



		// =================== HALAMAN PERTAMA ====================
		function checkboxrm18e($value, $label = '')
		{
			return (!empty($value) && $value !== '0') ? '[v] ' . $label : '[ ] ' . $label;
		}

		function valueOrDashrm18e($field)
		{
			return isset($field) ? htmlspecialchars($field) : '-';
		}

		$html1 = '
		<h3 align="right">' . htmlspecialchars($namaRM) . '</h3>

			<table border="1" style="border-collapse: collapse;">
				<tr>
					<td align="center" valign="middle" height="100" width="50%"><br><br><br><b>' . htmlspecialchars($judulRM) . '</b></td>
					<td width="50%">
						<table style="border-collapse: collapse;">
							<tr>
								<td width="30%">
									No.rm<br>
									Nama<br>
									Tanggal Lahir<br>
									Umur<br>
									Jenis Kelamin
								</td>
								<td width="70%">
								: ' . $no_rm . '<br>
								: ' . $nama_pasien . '<br>
								: ' . $tgl_lahir . '<br>
								: ' . $umur . '<br>
								: ' . $jenkel . '<br>
								</td>
							</tr>
						</table>
					</td>
				</tr>
		</table>
		';

		$html1 .= '
			<table border="1" style="border-collapse:collapse;" cellpadding="3">
				<tr>
					<td width="35%">
						Nama Ahli Bedah :<br>
						' . $decodedData['dokter_umum1'] . '
					</td>
					<td width="35%">
						Nama Asistant :<br>
						' . $decodedData['nama_asistant'] . '
					</td>
					<td width="30%">
						Nama Perawat :<br>
						' . $decodedData['nama_perawat'] . '
					</td>
				</tr>
				<tr>
					<td colspan="2">
						Nama Ahli Anasthesi :<br>
						' . $decodedData['dokter_umum2'] . '
					</td>
					<td colspan="3">
						Jenis Anasthesi<br>
						' . $decodedData['jenis_anesthesi'] . '
					</td>
				</tr>
				<tr>
					<td colspan="2">
						Diagnosa Pre- Operatif :<br>
						' . $decodedData['diagnosa'] . '
					</td>
					<td>
						Macam Pembedahan <br>
						<table cellpadding="4">
							<tr>
								<td width="37%">
									' . checkboxrm18e($decodedData['bedah_besar']) . ' Besar
								</td>
								<td>
									' . checkboxrm18e($decodedData['bedah_elective']) . ' Elective
								</td>
							</tr>
							<tr>
								<td width="37%">
									' . checkboxrm18e($decodedData['bedah_sedang']) . ' Sedang
								</td>
								<td>
									' . checkboxrm18e($decodedData['bedah_emergency']) . ' Emergency
								</td>
							</tr>
							<tr>
								<td width="37%">
									' . checkboxrm18e($decodedData['bedah_kecil']) . ' Kecil
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="2">Diagnosis post operatif : ' . $decodedData['diagnosa2'] . '</td>
					<td>
						<table cellpadding="4">
							<tr>
								<td width="37%">
									' . checkboxrm18e($decodedData['ya_post']) . ' Ya
								</td>
								<td>
									' . checkboxrm18e($decodedData['tidak_post']) . ' Tidak
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						Jaringan yang di – Eksisi / Insisi : <br>
						' . $decodedData['jaringan_eksisis'] . '
					</td>
				</tr>
				<tr>
					<td colspan="3">
						Nama / Macam Operasi<br>
						' . $decodedData['macam_operasi_eksisi'] . '
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<table cellpadding="2">
							<tr>
					<td>
						Tanggal Operasi : <br>
						' . $decodedData['tanggal_operasi'] . '
					</td>
					<td>
						Jam Operasi Dimulai : <br>
						' . $decodedData['jam_operasi_dimulai'] . '
					</td>
					<td>
						Jam Operasi Selesai : <br>
						' . $decodedData['jam_operasi_selesai'] . '
					</td>
					<td>
						Lama Operasi  Berlangsung :<br>
						' . $decodedData['lama_operasi_berlangusung'] . '
					</td>
				</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="3">
					Laporan<br>
						<table border="1" cellpadding="3">
							<tr>
								<td>' . $decodedData['laporan'] . '<br><br><br><br></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		';

		$QRDokterUmumrm18e = $decodedData["dokter_umum"];
		$DokterUmumrm18e = $this->to_safe_filename($QRDokterUmumrm18e) . '.jpg';
		$path_ttd_server_DokterUmumrm18e = 'C:/xampp/htdocs/pmo/images/qrcodeIT/' . $DokterUmumrm18e;
		$path_ttd_url_DokterUmumrm18e = BASE_STORAGE . '/pmo/images/qrcodeIT/' . $DokterUmumrm18e;

		// Awal HTML
		// Cek jika path valid dan file ada
		$html1 .= '
		<br>
		<div align="right">
				Dokter Penanggung Jawab Pasien, <br>
		<img src="' . $path_ttd_server_DokterUmumrm18e . '" width="80" height="80" /><br>
		' . $decodedData['dokter_umum'] . '
		</div>
		';

		$pdf->writeHTML($html1, true, false, true, false, '');
	}


	// ============== RM18 E Laporan operasi ====================== //
	// ============================================================== //
}	
