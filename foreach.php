<?php
$nama = array("Andri", "Joko", "Sukma", "Rina", "Sari");
 
for ($i = 0; $i < 5; $i++) {
  echo "$nama[$i]";
  echo "<br>";
}

$nilai = [80, 65, 90, 45, 70, 100, 40, 35, 20, 44, 78];

echo "<br>";

foreach ($nilai as $n) {
    if ($n > 67) {
        echo $n . "<br>";
    }
}

?>
