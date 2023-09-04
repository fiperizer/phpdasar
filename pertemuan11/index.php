<?php
// menghubungukan ke koneksi database yg ada di functions.php
require 'functions.php';
$mahasiswa = query ("SELECT * FROM mahasiswa");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman admin</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>
    <a href="tambah.php">tambah data mahasiswa</a>
    <br><br>
    <table border="1" cellpadding="10 cellspacing="0>
        <tr>
            <th>no.</th>
            <th>aksi</th>
            <th>gambar</th>
            <th>nim</th>
            <th>nama</th>
            <th>email</th>
            <th>jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach( $mahasiswa as $row) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="ubah.php?id=<?= $row ["id"] ; ?>">ubah</a>
                <a href="hapus.php?id=<?= $row ["id"] ; ?>" onclick="return confirm('yakin?');">hapus</a>
            </td>
            <td><img src="img/<?php echo $row ["gambar"] ; ?>" width="50"></td>
            <td> <?= $row ["nim"]; ?></td>
            <td> <?= $row ["nama"]; ?></td>
            <td> <?= $row ["email"]; ?></td>
            <td> <?= $row ["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach;?>

    </table>
</body>
</html>