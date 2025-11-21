<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan PHP</title>
</head>
<body>

<h2>Daftar Nama Buah</h2>
<?php
$buah = ["Anggur", "Jeruk", "Pisang", "Mangga", "Alpukat"];

echo "<ul>";
foreach ($buah as $b) {
    echo "<li>$b</li>";
}
echo "</ul>";

$nama = "Adek khumai";  
$umur = 17;           
$tinggi = 165.8;          
$sarapan = false;         

$hobi1 = "Bernyanyi";
$hobi2 = "Membaca Buku";
$hobi3 = "Mengaji";
$hobi4 = "gaming";

$hobi = [$hobi1, $hobi2, $hobi3, $hobi4];
?>

<h2>Data Diri</h2>

<p><strong>Nama:</strong> <?php echo $nama; ?></p>
<p><strong>Umur:</strong> <?php echo $umur; ?> tahun</p>
<p><strong>Tinggi Badan:</strong> <?php echo $tinggi; ?> cm</p>
<p><strong>Sudah Sarapan:</strong> <?php echo ($sarapan ? "Ya" : "Belum"); ?></p>

<h2>Hobi</h2>
<ul>
    <?php
    foreach ($hobi as $h) {
        echo "<li>$h</li>";
    }
    ?>
</ul>

</body>
</html>