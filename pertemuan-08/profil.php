<?php
$namaMahasiswa = "Jesica Keyra Aprillia";
$nimMahasiswa = "2622500001";
$programStudi = "Sistem Informasi";
$tempatTanggalLahir = "Kelapa, 10 April 2008";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Aice Ice Cream Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="header">
        <h1>Aice Ice Cream Store</h1>
    </div>
    <div id="menu">
        <a href="index.php">Home</a>
        <a href="profil.php">Profil</a>
        <a href="tentang.php">Tentang</a>
        <a href="registrasi.php">Registrasi</a>
    </div>
    <div id="isi">
        <h2>Biodata Diri</h2>
        <div class="profil">
            <img src="img/foto profile.jpeg">
            <p>Nama: <?php echo $namaMahasiswa; ?></p>
            <p>NIM: <?php echo $nimMahasiswa; ?></p>
            <p>Program Studi: <?php echo $programStudi; ?></p>
            <p>Tempat/Tanggal Lahir: <?php echo $tempatTanggalLahir; ?></p>
        </div>
    </div>
    <div id="footer">
        2622500001_Jesica Keyra Aprillia_SI1A_UTS Pemograman Web Dasar
    </div>
    <script src="script.js"></script>
</body>
</html>