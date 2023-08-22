<?php

$jm = 2;
$m = 30; 
$dt = 45; 

$total_detik = $jm * 3600 + $m * 60 + $dt;

echo "Total detik: " . $total_detik . " detik";
echo "<br>";

$jarak = 100;
$kecepatan = 2;

$detik_dibutuhkan = $jarak/$kecepatan;
echo "detik dibuthkan untuk 100m adalah " . $detik_dibutuhkan." detik";
echo "<br>";

$jam;
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

?>


?>   



