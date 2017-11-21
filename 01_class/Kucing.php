<?php 
// 1. Nama harus huruf besar awalnya
// 2. Nama file harus sama dengan nama classnya

class Kucing extends IbuKucing{
    // public bisa diakses oleh semua class
    // protected hanya bisa diakses oleh class itu sama class anaknya
    // private hanya bisa diakses oleh class itu sendiri 
    
    // constructor = method yg pertama kali dipanggil setiap kali membuat object baru


    private $namaKucing;
    private $istriKucing;

    public function __construct($nama, $istri)
    {
        $this->namaKucing = $nama;
        $this->istriKucing = $istri;
    }
    

    public function makan()
    {
        return "makan";
    }

    public function getAyahKucing() 
    {
        return $this->ayah;
    }

    public function getNamaKucing() 
    {
        return $this->namaKucing;
    }

    public function getIstri() {
        return $this->istriKucing;
    }

}
?>