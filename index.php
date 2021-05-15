<?php
session_start();

if( !isset($_SESSION["Login"]) ) {
    header("Location: login.php");
}
require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

?>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>

<a href="logout.php">Logout</a>

<h1>Daftar Mahasiswa</h1>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Prodi</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ( $mahasiswa as $row ) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $row["nim"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>
</body>
</html>