<?php

$nilai = $_POST['nilai'];


    if ($nilai >= 0 && $nilai <= 30) {
        echo 'Nilai : ' . $nilai . ' <br> Grade = E. ';
    } else if ($nilai >= 31 && $nilai <= 50) {
        echo 'Nilai : ' . $nilai . ' <br> Grade = D.';
    } else if ($nilai >= 51 && $nilai <= 75) {
        echo 'Nilai : ' . $nilai . ' <br> Grade = C.';
    } else if ($nilai >= 76 && $nilai <= 85) {
        echo 'Nilai : ' . $nilai . ' <br> Grade = B.  ';
    } else if ($nilai >= 86 && $nilai <= 100) {
        echo 'Nilai : ' . $nilai . ' <br> Grade = A.';
    }


        // pengisian nilai awal 
    //$a = 8;
    //$b = 4;
    //$c = 11;
    // proses aritmatika
    //$jumlah = $a + $b;
    //$kurang = $a - $b;
    //$kali = $a * $b;
    //$bagi = $a / $b;
    //$modulo = $a % $b;
    //$boolean1 = ($a < $b) ? "true" : "false";
    //$boolean2 = ($a > $b) ? "true" : "false";
    $a = 6;
    $b = 8;

    $hayo = ($a*$a) + ($b*$b);
    echo "kuadrat sama dengan $hayo <br/>";

    echo "<hr>";
    echo "<br>";
    //echo "Penjumlahan : ". $a ." + ". $b ." = ". $jumlah;
    //echo "<br>";
    //echo "Pengurangan : ". $a ." - ". $b ." = ". $kurang;
    //echo "<br>";
    //echo "Perkalian : ". $a ." * ". $b ." = ". $kali;
    //echo "<br>";
    //echo "Pembagian : ". $a ." / ". $b ." = ". $bagi;
    //echo "<br>";
    //echo "modulo : ". $a ." % ". $b ." = ". $modulo;
    //echo "<br>";
    //echo "boolean : ". $a ." < ". $b ." = ". $boolean1;
    //echo "<br>";
    //echo "boolean : ". $a ." > ". $b ." = ". $boolean2;  
    
    //if ($a < $b) {
        //echo "nilai a lebih besar dari nilai b";
    //} else {
        //echo "nilai a lebih kecil dari nilai b";
    //}

    //ini inisialisasi awal
    $a = 4;
    $b = 6;

    //ini aritmatika dasar
    $c = $a + $b;
    echo "$a ditambah $b hasilnya $c<br />";
    $c = $a - $b;
    echo "$a dikurang $b hasilnya $c<br />";
    $c = $a * $b;
    echo "$a dikali $b hasilnya $c<br />";
    $c = $a / $b;
    echo "$a dibagi $b hasilnya $c<br />";
    $c = $a % $b;
    echo "$a dibagi $b sisanya $c<br />";

    //ini tugas
    $panjang = 8;
    $lebar = 7;
    $tinggi = 3;
    $jari_jari = 5;
    $nilai = 80;
    $alas = 4;

    $luas_persegi_panjang = $panjang * $lebar;
    echo "Maka luas persegi panjang sama dengan [ $panjang x $lebar ] = $luas_persegi_panjang<br />";
    $luas_segitiga = ($alas * $tinggi)/2;
    echo "Maka luas segi tiga sama dengan = $luas_segitiga<br />";
    $keliling= (22/7) * 2 * $jari_jari;
    echo "Keliling Lingkaran = $keliling <br>";


       //grade nilai
       if ($nilaiku >= 0 && $nilaiku <= 30) {
        echo 'Nilai akhir : ' . $nilaiku . ' <br> Grade = E. ';
    } else if ($nilaiku >= 31 && $nilaiku <= 50) {
        echo 'Nilai akhir : ' . $nilaiku . ' <br> Grade = D.';
    } else if ($nilaiku >= 51 && $nilaiku <= 75) {
        echo 'Nilai akhir : ' . $nilaiku . ' <br> Grade = C.';
    } else if ($nilaiku >= 76 && $nilaiku <= 85) {
        echo 'Nilai akhir : ' . $nilaiku . ' <br> Grade = B.  ';
    } else if ($nilaiku >= 86 && $nilaiku <= 100) {
        echo 'Nilai akhir : ' . $nilaiku . ' <br> Grade = A.';
    }
