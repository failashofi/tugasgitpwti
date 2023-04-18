<?php

$nama =['Faila','Shofi'];
function cari($array, $cari):bool {
    if(in_array($cari,$array)){
        echo "Nama siswa $cari bernilai TRUE".'</br>';
        return true;
    }
    else {echo "Nama siswa $cari bernilai FALSE".'</br>';
        return false;
    }
}
cari($nama, 'Faila');
cari($nama, 'Wonwoo');
