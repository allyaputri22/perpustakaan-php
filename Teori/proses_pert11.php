<?php

include "koneksi.php";

$nama = $_POST['nama'];
$prodi = $_POST['prodi'];

$proses_insert_data = mysqli_query($koneksi, "INSERT INTO mahasiswa (nama, prodi) VALUES ('$nama', '$prodi')")
    or die(mysqli_error($koneksi));

if ($proses_insert_data) {
    echo "
        <script>
            alert('Data Berhasil Disimpan');
            window.location.href='pert11.php';
        </script>";
} else {
    echo "
        <script>
            alert('Data Gagal Disimpan');
            window.location.href='pert11.php';
        </script>";
}


    
    if($nilai_mhs != ""){

        if($nilai_mhs >= 85){
            $huruf_mutu ='A';
        }else if($nilai_mhs >= 75){
            $huruf_mutu = 'B';
        }else if($nilai_mhs >= 65){
            $huruf_mutu = 'C';
        }else{
            $huruf_mutu = 'E';
        }

      
        // for($x = 0; $x < $perulangan; $x++) {
        //     // echo "<script>alert ('". $npm_mhs . " Nilai mata kuliah adalah : ". $huruf_mutu . "')</script>";
        //     echo $npm_mhs . " Nilai mata kuliah adalah : ". $huruf_mutu . "<br>";  
        // }
        
    }


