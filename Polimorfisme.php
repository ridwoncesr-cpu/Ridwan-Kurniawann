<?php
// Class Parent
class Profesi {
    public function bekerja() {
        return "Melakukan pekerjaan umum...";
    }
}

// Class Child 1
class Guru extends Profesi {
    // Method Overriding (menimpa methode parent)
    public function bekerja() {
        return "Pergi ke kelas dan mengajar siswa SMK.";
    }
}

// Class Child 2
class Programmer extends Profesi {
    // Method Overriding
    public function bekerja() {
        return "Membuka VS Code, mengetik kode PHP, dan meminum kopi.";
    }
}

$pakGuru = new Guru();
$anakRPL = new Programmer();
echo $pakGuru->bekerja(); // Output : pergi ke kelas dan mengajar siswa SMK. 
echo "<br>";
echo $anakRPL->bekerja(); // Output: membuka VS Code, mengrttik kode PHP, dan meminum kopi.
?>