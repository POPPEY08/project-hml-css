<?php
echo "Pengkondisian<br>";
echo "Bilanagan Ganjil (1-20):";
for ($i = 1; $i <= 20; $i++){
    if($i %2 !=  0) {
        echo $i ." ";
    }
}

        echo "<br>";

echo "Bilangan Genap (1-20)";
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 ==0) {
        echo $i ." ";
    }
}
echo "<br>";

echo "Perulangan<>";
for ($i = 100; $i >= 0 ; $i--){
    echo $i;
    echo "<br>";
}
?>