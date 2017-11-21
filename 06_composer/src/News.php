<?php 
namespace Portal;

use Faker\Factory;

class News {

    public function getCategory()
    {
        return 'news';
    }
    public function getTitle()
    {
        $title = Factory::create("id_ID");
        return $title->address;
        
    }
}