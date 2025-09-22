<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class RmeFormValidation
{
	protected $CI;

	public function __construct()
	{
		$this->CI = &get_instance();
		$this->CI->load->library('form_validation');
		log_message('debug', "RME FORM VALIDATION LIBRARY LOADED");
	}


	// penambahan
	function rincian_icu($payload)
	{
		return true;
	}
	function edukasi_terintegrasi($payload)
	{
		return true;
	}
	function rm35($payload)
	{
		return true;
	}
	function rm35a($payload)
	{
		return true;
	}
		function rm35_1($payload)
	{
		return true;
	}
	
	function icuu($payload)
	{
		return true;
	}
	function picu($payload)
	{
		return true;
	}
	/* form josua
	rm 1, 1a, 1c, 1d, 3j
	8, 16A, 3b, 3c, 3e,

	* */
	function rm1($payload)
	{
		return true;
	}

	// new
	function rm20a_new($payload)
	{
		return true;
	}
	function rm20b_new($payload)
	{
		return true;
	}
	function rm20c_new($payload)
	{
		return true;
	}
	function rm8_new($payload)
	{
		return true;
	}
	function rm17_new($payload)
	{
		return true;
	}
	function rm17a_new($payload)
	{
		return true;
	}
	function rm18_new($payload)
	{
		return true;
	}
	function rm18a_new($payload)
	{
		return true;
	}
	function rm18b_new($payload)
	{
		return true;
	}
	function rm18c_new($payload)
	{
		return true;
	}
	function rm18d_new($payload)
	{
		return true;
	}
	function rm18e_new($payload)
	{
		return true;
	}
	function rm18h_new($payload)
	{
		return true;
	}




	function rm2($payload)
	{
		return true;
	}

	function rm1a($payload)
	{
		return true;
		// $flatPayload = $this->flattenPayload($payload);

		// $this->CI->form_validation->set_data($flatPayload);


		// $this->CI->form_validation->set_rules('id_kunjungan', 'ID Kunjungan', 'required');
		// $this->CI->form_validation->set_rules('nama_berkas', 'Nama Berkas', 'required');
		// $this->CI->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		// $this->CI->form_validation->set_rules('dpoli', 'Poli Yang dituju', 'required');
		// $this->CI->form_validation->set_rules('danamnese', 'Anamnase / Pemeriksaan', 'required');
		// $this->CI->form_validation->set_rules('diagnosa', 'Diagnosa', 'required');
		// $this->CI->form_validation->set_rules('drencanapelayanan', 'Rencana Pelayanan', 'required');
		// $this->CI->form_validation->set_rules('dttdokter', 'Tanda Tangan Dokter', 'required');
		// $this->CI->form_validation->set_rules('dkodediagnosa', 'Kode Diagnosa', 'required');

		// return $this->CI->form_validation->run();
	}


	function rm1c($payload)
	{
		return true;
	}

	function rm1d($payload)
	{
		return true;
	}

	function rm2a($payload)
	{
		return true;
	}

	function rm2b($payload)
	{
		return true;
	}

	// function rm3b($payload)
	// {
	// 	return true;
	// }
	function rm3b_new($payload)
	{
		return true;
	}

	// function rm3c($payload)
	// {
	// 	return true;
	// }

	function rm3c_new($payload)
	{
		return true;
	}

	function rm3e($payload)
	{
		return true;
	}


	function rm3f($payload)
	{
		return true;
	}


	function rm3g($payload)
	{
		return true;
	}


	function rm3h($payload)
	{
		return true;
	}


	function rm3j($payload)
	{
		return true;
	}


	// function rm8($payload)
	// {
	// 	return true;
	// }
	// function rm06($payload)
	// {
	// 	return true;
	// }
	function rm_cppt($payload)
	{
		return true;
	}
	// function rm12a($payload)
	// {
	// 	return true;
	// }
	function rm12aa($payload)
	{
		return true;
	}

	function rm12b($payload)
	{
		return true;
	}

	function rm12($payload)
	{
		return true;
	}

	// function rm12c($payload)
	// {
	// 	return true;
	// }
	function rm12c_new($payload)
	{
		return true;
	}

	function rm15c($payload)
	{
		return true;
	}

	function rm15d($payload)
	{
		return true;
	}

	function rm15e($payload)
	{
		return true;
	}

	function rm15f($payload)
	{
		return true;
	}
	function rm15g($payload)
	{
		return true;
	}


	function rm15h($payload)
	{
		return true;
	}

	function rm16($payload)
	{
		return true;
	}

	// 16a
	function rm16_1($payload)
	{
		return true;
	}

	function rm16f($payload)
	{
		return true;
	}

	function rm17a($payload)
	{
		return true;
	}

	function rm17c($payload)
	{
		return true;
	}

	function rm18($payload)
	{
		return true;
	}

	function rm18c($payload)
	{
		return true;
	}

	function rm18a($payload)
	{
		return true;
	}

	function rm18d($payload)
	{
		return true;
	}

	// function rm18e($payload)
	// {
	// 	return true;
	// }

	function rm18f($payload)
	{
		return true;
	}

	function rm19($payload)
	{
		return true;
	}

	function rm19a($payload)
	{
		return true;
	}

	function pernyataan_2x($payload)
	{
		return true;
	}
	function pernyataan_umum($payload)
	{
		return true;
	}
	function kronologis($payload)
	{
		return true;
	}
	function permohonan($payload)
	{
		return true;
	}

	function rm27($payload)
	{
		return true;
	}


	function rm31($payload)
	{
		return true;
	}


	function rm34($payload)
	{
		return true;
	}

	/*
	 * Form Nathan
	 * */
	function rm1b($payload)
	{
		return true;
	}


	function rm1e($payload)
	{
		return true;
	}

	function rm1f($payload)
	{
		return true;
	}


	function rm3($payload)
	{
		return true;
	}

	function rm3a_new($payload)
	{
		return true;
	}

	function rm3a($payload)
	{
		return true;
	}

	function rm3d($payload)
	{
		return true;
	}

	function rm4($payload)
	{
		return true;
	}

	function rm5($payload)
	{
		return true;
	}

	function rm5a($payload)
	{
		return true;
	}

	// function rm6($payload)
	// {
	// 	return true;
	// }

	// function rm7($payload)
	// {
	// 	return true;
	// }
	function rm7_new($payload)
	{
		return true;
	}

	function rm9($payload)
	{
		return true;
	}

	function rm10($payload)
	{
		return true;
	}

	function rm11($payload)
	{
		return true;
	}

	function rm13($payload)
	{
		return true;
	}

	function rm14($payload)
	{
		return true;
	}

	function rm15($payload)
	{
		return true;
	}

	function rm15a($payload)
	{
		return true;
	}

	function rm15b($payload)
	{
		return true;
	}

	function rm15i($payload)
	{
		return true;
	}


	function rm17($payload)
	{
		return true;
	}

	function rm32($payload)
	{
		return true;
	}

	/*
	 * Form Zicko
	 * RM 55-81

	 * */

	function rm16a($payload)
	{
		return true;
	}

	function rm17b($payload)
	{
		return true;
	}

	function rm17d01($payload)
	{
		return true;
	}

	function rm17d02($payload)
	{
		return true;
	}

	function rm17e($payload)
	{
		return true;
	}

	function rm18b($payload)
	{
		return true;
	}

	function rm18g($payload)
	{
		return true;
	}

	function rm18h($payload)
	{
		return true;
	}

	function rm20($payload)
	{
		return true;
	}

	// function rm20a($payload)
	// {
	// 	return true;
	// }

	// function rm20b($payload)
	// {
	// 	return true;
	// }

	// function rm20c($payload)
	// {
	// 	return true;
	// }

	function rm21($payload)
	{
		return true;
	}

	function rm22($payload)
	{
		return true;
	}

	function rm23($payload)
	{
		return true;
	}

	function rm24($payload)
	{
		return true;
	}

	function rm25($payload)
	{
		return true;
	}

	function rm26($payload)
	{
		return true;
	}

	function rm29($payload)
	{
		return true;
	}

	function rm28($payload)
	{
		return true;
	}
function rm28_new($payload)
	{
		return true;
	}


	// function rm30($payload)
	// {
	// 	return true;
	// }
	function rm30_new($payload)
	{
		return true;
	}

	function rm33($payload)
	{
		return true;
	}


	public function getErrors()
	{
		return $this->CI->form_validation->error_array();
	}

	private function flattenPayload($data)
	{
		$result = [];
		foreach ($data as $key => $value) {
			if (is_object($value) || is_array($value)) {
				$flattened = $this->flattenPayload((array)$value); // Convert object to array
				$result = array_merge($result, $flattened);
			} else {
				$result[$key] = $value;
			}
		}
		return $result;
	}
}
