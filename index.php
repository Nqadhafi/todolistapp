
<?php

function kaliDua($target){
    $target = $target * 2;
    return $target;
    
}

$angka = 10;
echo kaliDua($angka);
echo "<br>" . $angka;
file_put_contents("coba.txt" , $angka . kaliDua($angka) );
?>