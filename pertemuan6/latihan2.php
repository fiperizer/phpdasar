<?php 
// $mahasiswa = [
//     ["fadjar", "2016141599", "fajarumar.b@gmail.com", "teknik informatika"],
//     ["umar", "2016141599", "fajarumar.b@gmail.com", "teknik informatika"],
//     ["basuseno", "2016141599", "fajarumar.b@gmail.com", "teknik informatika"]
// ];

//array associative
//definisinya sama seperti array numerik, kecuali
//key-nya adalah string yang kita buat sendiri 
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
    "nim" => "2016141599", 
    "email" => "fajarumar.b@gmail.com", 
    "jurusan" => "teknik informatika",
    "gambar" => "Foto.png"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar mahasiswa</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>

    <!-- <ul>
        <li><?php echo $mahasiswa[0]; ?></li>
        <li><?php echo $mahasiswa[1]; ?></li>
        <li><?php echo $mahasiswa[2]; ?></li>
        <li><?php echo $mahasiswa[3]; ?></li>
    </ul> -->

    <!-- <?php foreach( $mahasiswa as $mhs) : ?>
    <ul>
        <li>nama : <?php echo $mhs[0]; ?></li>
        <li>nim : <?php echo $mhs[1]; ?></li>
        <li>emal : <?php echo $mhs[2]; ?></li>
        <li>jurusan : <?php echo $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?> -->

    <?php foreach( $mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]?>">
        </li>
        <li>nama : <?php echo $mhs["nama"]; ?></li>
        <li>nim : <?php echo $mhs["nim"]; ?></li>
        <li>emal : <?php echo $mhs["email"]; ?></li>
        <li>jurusan : <?php echo $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>