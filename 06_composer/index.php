<?php 
require_once("vendor/autoload.php");

use Carbon\Carbon;
use Portal\News;

$news = new News();
echo $news->getTitle();
echo "</br>";

echo "Sekarang:". Carbon::now() ."</br>"; 

echo "Umur Saya: ". Carbon::createFromDate(1998, 10, 08)->age . " Tahun, ";
echo "Saya Lahir: ". Carbon::createFromDate(1998, 10, 08)->diffForHumans();


// menjalankan composer 
// 1. composer init untuk membuat file composer.json
// 2. composer install untuk membuat file vendor