<?php
defined('BASEPATH') or exit('No direct script access allowed');

function countme($a)
{
	$skr = $tgl_skrg . " " . $jam_sekarang;
	$date1 = date_create($a);
	$date2 = date_create($skr);
	$diff = date_diff($date1, $date2);

	$tahun = $diff->y;
	$bulan = $diff->m;
	$hari = $diff->d;
	$jam = $diff->h;
	$menit = $diff->i;
	$detik = $diff->s;

	$print = "";
	if ($tahun) {
		$print .= $tahun . "Y ";
	}
	if ($bulan) {
		$print .= $bulan . " bln ";
	}
	if ($hari) {
		$print .= $hari . " hari ";
	}
	if ($jam) {
		$print .= $jam . " Jam ";
	}
	if ($menit) {
		$print .= $menit . " Menit ";
	}
	if ($detik) {
		$print .= $detik . " Detik ";
	}


	//echo $skr;
	//$k=  $diff->y. ' tahun '. $diff->m . 'bulan '.$diff->d . ' hari '- $diff->h . ' jam '.$diff->i . ' menit ' . $diff->s . ' detik ';

	return $print;
}
function countumur($a)
{
	$skr = $tgl_skrg . " " . $jam_sekarang;
	$date1 = date_create($a);
	$date2 = date_create($skr);
	$diff = date_diff($date1, $date2);

	$tahun = $diff->y;
	$bulan = $diff->m;
	$hari = $diff->d;
	$jam = $diff->h;
	$menit = $diff->i;
	$detik = $diff->s;

	$print = "";
	if ($tahun) {
		$print .= $tahun . " Tahun ";
	}
	if ($bulan) {
		$print .= $bulan . " Bulan ";
	}
	if ($hari) {
		$print .= $hari . " Hari ";
	}

	return $print;
}
