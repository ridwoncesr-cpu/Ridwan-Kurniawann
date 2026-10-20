<?php
// Class Induk (Parent)
class Kendaraan
{
    
    public $merk;
    public function __construct($merk)
     {
        $this->merk = $merk;
    }

    public function berjalan()
    
    {
        return $this->merk . " sedang melaju...";
    }
}

// Class Anak (Child) mewarisi class kendaraan
class Mobil extends Kendaraan
 {
    public $jumlahPintu = 4;
    public function bukaPintu() 
    {
        return "Membuka " . $this->jumlahPintu ." pintu mobil " . $this->merk;
    }
}

$mobilRPL = new Mobil("Toyota");
echo $mobilRPL->berjalan(); // menggunakan method warisan dari parent
echo "<br>";
echo $mobilRPL->bukaPintu(); //menggunakan metode milik child sendiri
?>