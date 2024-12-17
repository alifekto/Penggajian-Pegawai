<?php
if (isset($_POST['register'])) {
    $username = $_POST['usn'];
    $password = $_POST['pwd'];

    // validasi input gak kosong
    if (empty($username) || empty($password)) {
        echo "<script type='text/javascript'>alert('Username dan password tidak boleh kosong!');</script>";
    } else {
        $file = fopen("pengguna.txt", "a");
        fwrite($file, $username . "," . $password . PHP_EOL);
        fclose($file);

        echo "<script type='text/javascript'>alert('Registrasi berhasil! Silahkan Login.');</script>";
    }
}
?>


<!DOCTYPE html>
<html>
    <head>
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
                background: url('register.jpeg') no-repeat;
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
        <title>Registrasi Pengguna</title>
    </head>
    <body>
        <?php
        if (isset($error_mssg)) echo "<p>$error_mssg</p>";
        if (isset($success_mssg)) echo "<p>$success_mssg</p>";
        ?>
        <div class="wrapper">
            <form method="POST" action="">
             <h1>Buat Akun</h1>   
             <div class="input-box">
            <input type="text" name="usn" placeholder="Username" required>
            <i class='bx bxs-user'></i>
             </div>
             <div class="input-box">
             <input type="password" name="pwd" placeholder="Password" required>
             <i class='bx bxs-lock-alt'></i>
             </div>
            <button class="btn" type="submit" name="register">Daftar</button>
        <div class="register-link">
        <p><a href="validasi-form.php">Kembali ke halaman Log in</a></p>
      </div>      
        </form>
        </div>
    </body>
</html>
