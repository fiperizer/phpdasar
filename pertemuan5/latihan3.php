<?php  
$mahasiswa = [
    ["fadjar", "2016141599", "Teknik Informatika", "fadjarumar.b@gmail.com"],
    ["umar", "2016141599", "Teknik Informatika", "fadjarumar.b@gmail.com"],
    ["basuseno", "2016141599", "Teknik Informatika", "fadjarumar.b@gmail.com"]
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
    
    <?php foreach( $mahasiswa as $mhs) : ?>
    <ul>
        <li>nama : <?= $mhs[0]; ?></li>
        <li>nim : <?= $mhs[1]; ?></li>
        <li>jurusan : <?= $mhs[2]; ?></li>
        <li>email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>