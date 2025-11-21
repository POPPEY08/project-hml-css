<?php
$suka_pisang = true;
$suka_jeruk = true;
$suka_semangka = false;
$suka_rambutan = false;

if ($suka_pisang && $suka_jeruk) {
    $warna_langit = "Biru";
} elseif ($suka_semangka || $suka_rambutan) {
    $warna_langit = "Hitam";
} else {
    $warna_langit = "Oren";
}

echo "Warna Langit: " . $warna_langit;
// Output dengan input di atas: Warna Langit: Biru
?>