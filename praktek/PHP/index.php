<?php


// // cara deklarasi dengan tanda $
// // cara menampilkan output dengan echo

// $nama = "Allya Putri Nadila Gustin";

// //Penggabungan string (string concate) dengan menggunakan ().)
// echo $nama . "<br>";

// // nilai konstanta jangan menggunakan simbol $
// const PHI = 3.14;
// echo PHI;

// $nama .= "Fathur Rahman";
// echo "<br>" . $nama;

// // cara lain
// // $namaLengkap = $nama . "Rizky"
// // echo "<br>" . $namaLengkap;
// // Yang bisa di print dengan echo adalah yang primitif 
// // array gabisa karena bukan primitif . jadi pake var_dump

// $books = array("PHP For Beginner","Javascript For Beginner","Bootstrap For Beginner");
// $authors = ["Rasmus Lerdorf","Brendan Eich","Mark Otto"];
// var_dump($books);
// var_dump($authors);

$calon = ["Chanyeol","D.O","Baekhyun","Kai","Suho","Sehun"];
$pacar = array("1","2","3");

//modifikasi array
$calon  [0] = "Park Chanyeol";

//menampilkan struktur array
var_dump($calon);
var_dump($pacar);

//menampilkan data array dalam bentuk list
echo "<ul>";
    for ($i=0; $i < count($calon); $i++) { 
        echo "<li>" . $calon[$i] . "</li>";
    }

echo "</ul>";



