<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('get_site_data')) {
    function get_site_data($site_model) {
        // Ambil data unit
        $unit = $site_model->get_unit_data();
        $nama_prov = $unit['nama_prov'] ?? '-';
        $nama_kab = $unit['nama_kab'] ?? '-';
        $nama_kec = $unit['nama_kec'] ?? '-';
        $nama_kel = $unit['nama_kel'] ?? '-';
        $alamat = $unit['alamat'] ?? '-';

        $lokasi = $alamat . ', Kelurahan ' . $nama_kel . ', Kecamatan ' . $nama_kec . ', ' . $nama_kab . ', ' . $nama_prov;

        // Ambil data settings
        $settings = $site_model->get_settings_data();
        $site_title = $settings['nama'] ?? '-';
        $telepon = $settings['telepon'] ?? '-';
        $email = $settings['email'] ?? '-';
        $logo_path = BASE_STORAGE . '/pmo/images/' . ($settings['logo'] ?? 'no-logo.png');

        return [
            'site_title' => $site_title,
            'telepon'    => $telepon,
            'email'      => $email,
            'logo_path'  => $logo_path,
            'lokasi'     => $lokasi,
            'city_sign'  => $nama_kab
        ];
    }
}
