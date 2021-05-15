<?php
session_start();

// cek cookie
if( isset($_COOKIE['Login']) ) {
    if( $_COOKIE['Login'] == 'true' ) {
        $_SESSION['Login'] = true;
    }
}

if( isset($_SESSION["Login"]) ) {
    header("Location: index.php");
    exit;
}

require 'function.php';
if( isset($_POST["Login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if( mysqli_num_rows($result) === 1 ) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
            // set session
            $_SESSION["Login"] = true;

            // cek remember me
            if( isset($_POST['remember']) ) {
                // buat cookie
                setcookie('Login', 'true', time() + 120);
            }

            header("Location: index.php");
            exit;
        } 
    }

    $error = true;

}
?>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style2.css">
    <script src="script2.js"></script>
</head>
<body>
    <section id="ContactUs">
            <div class="ContactUsPage">
                <h1><em style="text-align: center;color: rgb(255, 255, 255);
                font-family: Edwardian Script ITC;font-size: 2cm;margin-block-start: 1em;">L</em> OGIN<br />
                </h1>
            <div class="ContactUs">

                <?php if( isset($error) ) : ?>
                    <p style="color: red; font-style: italic;">username/password salah</p>
                <?php endif; ?>
                <form action="" method="POST">
                    <table>
                        <text1>Halaman Login</text1>
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
                            <td><input type="checkbox" name="remember" id="remember"><label for="remember">Remember me </label></td>
                        </tr>
                    </table>
                    <button type="submit" name="Login">Login</button>
                    <!-- <ul>
                        <li>
                            <label for="username">Username :</label>
                            <input type="text" name="username" id="username">
                        </li>
                        <li>
                            <label for="password">Password :</label>
                            <input type="password" name="password" id="password">
                        </li>
                        <li>
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">Remember me </label>
                        </li>
                        <li>
                            <button type="submit" name="Login">Login</button>
                        </li>    
                    </ul> -->
                </form>
            </div>
            </div>
</body>
</html>