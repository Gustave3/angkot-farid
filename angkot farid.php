<?php

$nama = "===program angkot farid=== <br> <br> <br>";
echo $nama;

function cekKetersediaanAngkot($nomorAngkot) {
    $angkotTersedia = [1, 3, 10, 11];
    $angkotDiperbaiki = [2, 9, 12, 17];

    if (in_array($nomorAngkot, $angkotTersedia)) {
        return "tersedia <br>";
    } elseif (in_array($nomorAngkot, $angkotDiperbaiki)) {
        return "sedang diperbaiki <br>";
    } else {
        return "tidak tersedia <br>";
    }
}


function tampilkanStatusAngkot($nomorAngkot) {
    $status = cekKetersediaanAngkot($nomorAngkot);
    echo "Angkot no - $nomorAngkot $status <br>";
}


for ($nomor = 1; $nomor <= 20; $nomor++) {
    tampilkanStatusAngkot($nomor);
}

?>


