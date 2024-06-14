<<<<<<< HEAD
<?php

class Kendaraan
{
    public $nama;
    public $warna;
    public $tempatOperasi;

    function __construct($nama, $warna, $tempatOperasi)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->tempatOperasi = $tempatOperasi;
    }
}

$kendaraan = new Kendaraan("Mobil", "Merah", "Darat");
echo $kendaraan ->nama;
echo "<br>";
echo $kendaraan ->warna;
echo "<br>";
=======
<?php

class Kendaraan
{
    public $nama;
    public $warna;
    public $tempatOperasi;

    function __construct($nama, $warna, $tempatOperasi)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->tempatOperasi = $tempatOperasi;
    }
}

$kendaraan = new Kendaraan("Mobil", "Merah", "Darat");
echo $kendaraan ->nama;
echo "<br>";
echo $kendaraan ->warna;
echo "<br>";
>>>>>>> 434e38f46c443560e8cb1f1c318de2855d84cc4b
echo $kendaraan ->tempatOperasi;