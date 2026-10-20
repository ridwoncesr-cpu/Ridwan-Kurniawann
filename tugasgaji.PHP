<?php
class Karyawan {
    private $nama;
    private $nik;
    protected $gajibulanan;

    public function __construct($nama, $nik, $gajibulanan) {
        $this->nama = $nama;
        $this->nik = $nik;
        $this->gajibulanan = $gajibulanan;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getNik() {
        return $this->nik;
    }

    public function getgajibulanan() {
        return $this->gajibulanan;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setNik($nik) {
        $this->nik = $nik;
    }

    public function setgajibulanan($gajibulanan) {
        $this->gajibulanan = $gajibulanan;
    }

    public function hitungTotalGaji() {
        return $this->gajibulanan;
    }
}

class KaryawanTetap extends Karyawan {
    private $tunjanganKeluarga;

    public function __construct($nama, $nik, $gajibulanan, $tunjanganKeluarga) {
        parent::__construct($nama, $nik, $gajibulanan);
        $this->tunjanganKeluarga = $tunjanganKeluarga;
    }

    public function hitungTotalGaji() {
        $total = $this->gajibulanan + $this->tunjanganKeluarga;
        return $total - ($total * 5 / 100);
    }
}

class KaryawanKontrak extends Karyawan {
    private $durasiKontrakBulan;
    private $bonusLembur;

    public function __construct($nama, $nik, $gajibulanan, $durasiKontrakBulan, $bonusLembur) {
        parent::__construct($nama, $nik, $gajibulanan);
        $this->durasiKontrakBulan = $durasiKontrakBulan;
        $this->bonusLembur = $bonusLembur;
    }

    public function hitungTotalGaji() {
        return $this->gajibulanan + $this->bonusLembur;
    }
}
$k1 = new KaryawanTetap("Ridwan", "202571326", 3000000, 500000);
$k2 = new KaryawanKontrak("iwan", "202571330", 2500000, 12, 300000);

echo "<h3>Karyawan Tetap</h3>";
echo "Nama: " . $k1->getNama() . "<br>";
echo "NIK: " . $k1->getNik() . "<br>";
echo "Gaji bulanan: Rp " . number_format($k1->getgajibulanan(), 0, ',', '.') . "<br>";
echo "Total Gaji: Rp " . number_format($k1->hitungTotalGaji(), 0, ',', '.');

echo "<h3>Karyawan Kontrak</h3>";
echo "Nama: " . $k2->getNama() . "<br>";
echo "NIK: " . $k2->getNik() . "<br>";
echo "Gaji bulanan: Rp " . number_format($k2->getgajibulanan(), 0, ',', '.') . "<br>";
echo "Total Gaji: Rp " . number_format($k2->hitungTotalGaji(), 0, ',', '.');
?>