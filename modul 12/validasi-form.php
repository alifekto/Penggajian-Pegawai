<?php
session_start();
if(isset($_POST['login'])){
    $username = $_POST['usn'];
    $password = $_POST['pwd'];

    $file = fopen("pengguna.txt", "r");
    $valid = false;

    while(($line = fgets($file)) !== false){
        // memisahkan usn dan pwd dengan explode
        list($user, $pass) = explode(",",trim($line));
        // cek kesesuaian usn dan pwd
        if ($user === $username && $pass === $password){
            $_SESSION['usn']=$username;
            $valid=true;
            break;
        }
    }
    
    //  tutup file setelah selesai membaca
    fclose($file);

    if ($valid){
        header("Location: home.php");
        exit;
    } else{
        $error_mssg = "Username atau password salah";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Halaman Login</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: "Poppins", sans-serif;
            }

            body{
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                background: url('login.jpeg') no-repeat;
                background-size: cover;
                background-position: center;
            }

            .wrapper {
                width: 420px;
                background-color: transparent;
                border: 2px solid rgba(255, 255, 255, .2);
                backdrop-filter: blur(5px);
                box-shadow: 0 0 10px rgba(0, 0, 0, .2) ;
                color: #fff;
                border-radius: 10px;
                padding: 30px 40px;
            }

            .wrapper h1{
                font-size: 36px;
                text-align: center;
            }

            .wrapper .input-box {
                position: relative;
                width: 100%;
                height: 50px;
                margin: 30px 0;
            }

            .input-box input {
                width: 100%;
                height: 100%;
                background: transparent;
                border: none;
                outline: none;
                border: 2px solid rgba(255, 255, 255, .2);
                border-radius: 40px;
                font-size: 16px;
                color: #fff;
                padding: 20px 45px 20px 20px;
            }

            .input-box input::placeholder {
                color: #fff;
            }

            .input-box i {
                position: absolute;
                right: 20px;
                top: 50%;
                transform: translateY(-50%);
                font-size: 20px;
            }

            .wrapper .btn {
                width: 100%;
                height: 45px;
                background: #fff;
                border: none;
                outline: none;
                border-radius: 40px;
                box-shadow: 0 0 10px rgba(0, 0, 0, .1);
                cursor: pointer;
                font-size: 16px;
                color: #333;
                font-weight: 600;
            }

            .wrapper .register-link {
                font-size: 14.5px;
                text-align: center;
                margin: 20px 0 15px;
            }

            .register-link p a {
                color: #fff;
                text-decoration: none;
                font-weight: 600;
            }

            .register-link p a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <?php 
        // tampilkan pesan error jika ada
        if (isset($error_mssg))
        echo "<p>$error_mssg</p>";
        ?>
       <div class="wrapper">
        <form method="POST" action="">
            <h1>Login</h1>
            <div class="input-box">
                 <input placeholder="Username" type="text" name="usn" required>
                 <i class='bx bxs-user'></i>
            </div>
                <div class="input-box">
                 <input placeholder="Password" type="password" name="pwd" required> 
                 <i class='bx bxs-lock-alt'></i>
                </div>
            <button class="btn" type="submit" name="login">Login</button>
            <div class="register-link">
                <p>Belum punya akun? <a href="register.php">Daftar Disini</a></p>
            </div>
        </form>
        </div>
    </body>
</html>