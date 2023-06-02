<?php

$anggotaKelompok = [
    ["nama" => "Abyan", "nim" => "506156"],
    ["nama" => "Rasyid", "nim" => "505791"],
    ["nama" => "Pudyasta", "nim" => "504005"],
    ["nama" => "Ghita", "nim" => "496466"],
    ["nama" => "Rambu", "nim" => "505631"],
];

function tentukanPeran($nim)
{
    $angkaTerakhirNIM = intval(substr($nim, -1));

    if ($angkaTerakhirNIM % 2 == 0) {
        return "Back-end Developer";
    } else {
        return "Front-end Developer";
    }
}

echo "Tugas Kerja Kelompok: <br>";
foreach ($anggotaKelompok as $anggota) {
    $nama = $anggota["nama"];
    $nim = $anggota["nim"];

    if($nim == 506156){
        echo "- Nama: $nama | NIM: $nim | Peran: Project Manager <br>";
    }else{
        $peran = tentukanPeran($nim);
        echo "- Nama: $nama | NIM: $nim | Peran: $peran <br>";
    }
    
    
}
?>
