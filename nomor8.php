<?php $jam;
$sisa_detik;
$menit;
$detik;
$detik_total;

$detik_total = 6000;
$jam = floor($detik_total / 3600);
$sisa_detik = $detik_total % 3600;
$menit = floor($sisa_detik / 60);
$detik = $sisa_detik % 60;

echo "6000 detik sama dengan: ";
echo $jam . " jam, ";
echo $menit . " menit, ";
echo $detik . " detik.\n";
?>