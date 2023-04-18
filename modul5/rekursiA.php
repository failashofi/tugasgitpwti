<?php
    function print_deret_fibonacci($jumlah){
        $angka_sebelum = 0;
        $angka_sekarang = 1;

        $hasil = "$angka_sekarang";

        for($i=0; $i<$jumlah-1; $i++){
            $output = $angka_sekarang + $angka_sebelum;
            $hasil = $hasil." $output";
            $angka_sebelum = $angka_sekarang;
            $angka_sekarang = $output;
        }
        return $hasil;
    }

    function piramida_fibonacci($tingkat) {
        for($i=1; $i<$tingkat+1; $i++) {
            echo print_deret_fibonacci ($i);
            echo "<br>";
        }
    }
    piramida_fibonacci(10); 
    ?>