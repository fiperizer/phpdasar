<?php
// variable scope / lingkup variabel

// $x = 10;
// //echo $x;

// function tampilx(){
//     // global untuk menampilkan variabel diluar function
//     // global $x;
//     $x = 20;
//     // hanya menampilkan variabel yang ada pada function
//     echo $x;
// }
// tampilx();
// echo "<br>";
// // hanya menampilkan variabel yang ada diluar function
// echo $x;


// SUPERGLOBAL
// variable global milik PHP
// merupakan Array Associative
// var_dump($_GET);
// var_dump($_POST);
// var_dump($_SERVER);
// echo $_SERVER["SERVER_NAME"];


// $_GET
$mahasiswa = [
    [
    "nama" => "fadjar", 
    "nim" => "2016141599", 
    "email" => "fajarumar.b@gmail.com", 
    "jurusan" => "teknik informatika",
    "gambar" => "profile.jpg"
    ],
    [
    "nama" => "umar", 
    "nim" => "1122334455", 
    "email" => "umar@gmail.com", 
    "jurusan" => "sistem informasi",
    "gambar" => "Foto.png"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach($mahasiswa as $mhs) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>  "><?= $mhs["nama"]; ?></a>
        </li>         
    <?php endforeach; ?>
    </ul>
</body>
</html>