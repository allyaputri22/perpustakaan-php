<?php


include "koneksi.php";

//mengambil data inputan
    $npm_mhs = $_POST['npm'];
    $nilai_mhs = $_POST['nilai'];
  
    $proses = mysqli_query($koneksi,"INSERT INTO mahasiswa (nama,prodi) VALUES ('$npm_mhs','$nilai_mhs') ")
    or die (mysqli_error($koneksi));

    if($proses){
        echo "<script>
             alert('Data Berhasil Disimpan')
             window.location.href = 'pert11.php'
        </script>";
    }else{
        "<script>
        alert('Data Gagal Disimpan')
        window.location.href = 'pert11.php'
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


