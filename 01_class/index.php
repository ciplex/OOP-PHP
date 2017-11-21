<?php
include_once("IbuKucing.php");
include_once("Kucing.php");


$kucing = new Kucing('kemseng', 'sari');
$kucing2 = new Kucing('aan', 'sarboah');



echo "Nama Kucing: ". $kucing2->getNamaKucing()."</br>";
echo "Istri Kucing: ". $kucing2->getIstri();
?>