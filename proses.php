<?php

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kampus = $_POST['kampus'];
    $angkatan = $_POST['angkatan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    $fotobaru = date('dmYHis').$foto;
    $path = 'images/'. $fotobaru;
    $link_foto = $path;

    if (!move_uploaded_file($tmp, $path)) {
        echo "upload File gagal";
    }

    include("hasil.php");
?>