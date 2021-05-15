<?php
require 'function.php';

if( isset($_POST["Register"]) ) {
    if( Registrasi($_POST) > 0 ) {
        echo "<script>
                alert('User baru berhasil ditambahkan!');
              </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>
<html lang="en">
<head>
    <title>Registrasi</title>
    <link rel="stylesheet" href="style2.css">
    <script src="script2.js"></script>
</head>
<body>
    <section id="ContactUs">
                <div class="ContactUsPage">
                    <h1><em style="text-align: center;color: rgb(255, 255, 255);
                    font-family: Edwardian Script ITC;font-size: 2cm;margin-block-start: 1em;">R</em> EGISTRASI<br />
                    </h1>
                <div class="ContactUs">
                    <form action="" method="POST">
                        <table>
                            <text1>Halaman Registrasi</text1>
                            <tr>
                                <td><label for="username">Username :</label></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="username" id="username" size="28"></td>
                            </tr>
                            <tr>
                                <td><label for="password">Password :</label></td>
                            </tr>
                            <tr>
                                <td><input type="password" name="password" id="password" size="28"></td>
                            </tr>
                            <tr>
                                <td><label for="password2">Konfirmasi Password :</label></td>
                            </tr>
                            <tr>
                                <td><input type="password" name="password2" id="password2" size="28"></td>
                            </tr>
                        </table>
                        <button type="submit" name="Register">Daftar</button>
</form>
</body>
</html>