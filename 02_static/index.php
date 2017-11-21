<?php 
include_once("Pesawat.php");

$pesawat = new Pesawat();
echo $pesawat->typeNotStatic();

echo pesawat::type();
echo pesawat::getHarga();
?>