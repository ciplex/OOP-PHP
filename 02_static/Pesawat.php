<?php 

class pesawat {

        private static $harga = 109000000;

        public static function type()
        {
            return 'sukhoi' ."</br>";
        }
        
        public static function getHarga()
        {
            return self::$harga;
        }
    
        public static function typeNotStatic()
        {
            return 'typeNotStatic' . "</br>";
        }
    }


?>