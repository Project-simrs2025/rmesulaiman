<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Mpdf\Mpdf;

class M_pdf {
    public $mpdf;

    public function __construct()
    {
        // Load Composer's autoload file
        require_once APPPATH . '../vendor/autoload.php';

        // Inisialisasi mPDF
        $this->mpdf = new Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 10,
            'margin_bottom' => 10,
        ]);
    }
}
