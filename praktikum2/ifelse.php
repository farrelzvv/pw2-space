<?php
$nilai = 90;

$keterangan = "";

if($nilai > 90) {
    $keterangan = "sangat baik";
} elseif ($nilai > 70 || $nilai <= 90) {
    $keterangan = "Lumayan Baik";
} else {
    $keterangan = "Oke deh";
}

echo "<h1>$keterangan</h1>";