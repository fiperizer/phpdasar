<?php
function salam($waktu = "datang", $nama = "admin"){
    return "selamat $waktu, $nama!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan function</title>
</head>
<body>
    <h1><?= salam("pagi","fadjar"); ?></h1>
</body>
</html>