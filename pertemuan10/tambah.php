<?php
require 'functions.php';
// koneksi ke database (DBMS)
// $conn = mysqli_connect("localhost", "root", "", "phpdasar");

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])){
    // var_dump($_POST);
    // ambil data dari tiap elemen dalam form
    // $nama = $_POST["nama"];
    // $nim = $_POST["nim"];
    // $email = $_POST["email"];
    // $jurusan = $_POST["jurusan"];
    // $gambar = $_POST["gambar"];

    // query insert data
    // $query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nim', '$email', '$jurusan', '$gambar')";
    // mysqli_query($conn, $query);

    // cek apakah data berhasil di tambahkan atau tidak
    // var_dump(mysqli_affected_rows($conn));
    // if(mysqli_affected_rows($conn) > 0 ){
    //     echo "berhasil";
    // } else {
    //     echo "gagal!";
    //     echo "<br>";
    //     echo mysqli_error($conn);
    // }

    // cek apakah data berhasil di tambahkan atau tidak
    if( tambah($_POST) > 0 ){
        // echo "data berhasil ditambahkan!";
        echo "<script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>";
    } else {
        // echo "data gagal ditambahkan!";
        echo "<script>
                alert('data gagal ditambahkan!');
                document.location.href = 'index.php';
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data mahasiswa</title>
</head>
<body>
    <h1>tambah data mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li><label for="nama">nama</label>
                <input type="text" name="nama" id="nama" required>             
            </li>
            <li>
                <label for="nim">nim</label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
                <label for="email">email</label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">jurusan</label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">gambar</label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">tambah data!</button>
            </li>
        </ul>
    </form>
</body>
</html>