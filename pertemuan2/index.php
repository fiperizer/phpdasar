<?php
   // pertemuan 2 - PHP Dasar
   // Sintaks PHP
   
   // Standar Outpot
   // echo, print
   // print_r
   // var_dump

//    echo "fadjar umar basuseno";
//    print "fadjar umar basuseno";
//    print_r ("fadjar umar basuseno");
//    var_dump ("fadjar umar basuseno");

   // Penulisan sintaks PHP
   // 1. PHP di dalam HTML
   // 2. HTML di dalam PHP

   // Variabel dan Tipe Data
   // Variabel
   // Variabel tidak boleh diawali dengan angka, tapi boleh menggunakan angka

//    $nama ="Fadjar Umar Basuseno";
//    echo ,Halo, nama saya $nama';

// Operator
// aritmatika
// + - * / %
// echo 1+1;
// $x = 10;
// $y = 20;
// echo $x * $y;

// Penggabung string / concatenation / concat
// .
// $nama_depan ="Fadjar";
// $nama_tengah ="Umar";
// $nama_belakang ="Basuseno";
// echo $nama_depan . "". $nama_tengah ."". $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Fadjar";
// $nama .= "";
// $nama .= "Umar";
// echo $nama;

//Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 === "1")

// Logika
// &&, ||, !
// $x = 30;
// var_dump($x < 20 || $x % 2 == 0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo "Fadjar"; ?></h1>
    <p><?php echo "ini adalah paragraf"; ?></p>

    <?php 
        echo "<h1>Halo, Selamat Datang Fadjar</h1>"
    ?>
</body>
</html>