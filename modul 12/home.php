<!-- menampilkan fitur membuat, menambah, mengubah, menghitung gaji pegawai -->
<?php
session_start();

if(!isset($_SESSION['usn'])){
    header("Location: validasi-form.php");
    exit;
}

$username = $_SESSION['usn'];

if(isset($_POST['logout'])){
    session_destroy();
    header("Location: validasi-form.php");
    exit; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>

    <!-- Tambahkan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tambahkan Font Awesome untuk Ikon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <!-- Tambahkan Animate.css untuk Animasi -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

    <!-- Tambahkan Gaya Custom -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff7ec;
            color: #333;
        }

        header {
            background-color: #3894a1;
            color: white;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 20px auto;
            max-width: 600px;
        }

        ul li a {
            display: flex;
            align-items: center;
            justify-content: space-between;
            text-decoration: none;
            background-color: #2f404f;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        ul li a:hover {
            background-color: #3894a1;
        }

        ul li a i {
            margin-right: 10px;
        }

        button {
            display: block;
            margin: 30px auto;
            padding: 10px 20px;
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #d32f2f;
        }

        footer {
            text-align: center;
            padding: 10px;
            margin-top: 20px;
            background-color: #3894a1;
            color: white;
        }

    </style>
</head>
<body>
    <!-- Header dengan animasi fade-in -->
    <header class="animate__animated animate__fadeInDown">
        <h1><i class="fas fa-user-cog"></i> Sistem Pengelolaan Administrasi Pegawai</h1>
    </header>

    <!-- Container untuk konten utama -->
    <div class="container mt-4">
        <!-- Selamat Datang dengan animasi -->
        <h2 class="text-center animate__animated animate__fadeInUp text-dark">
            Selamat Datang, <?php echo $username ?? 'Admin'; ?>!
        </h2>

        <!-- Fitur sistem dengan daftar fitur -->
        <h3 class="text-center text-dark mt-4">Fitur Sistem Pengelolaan Administrasi Pegawai</h3>
        <ul class="list-group mt-4">
            <li class="list-group-item animate__animated animate__fadeInLeft">
                <a href="membuat-database.php">
                    <i class="fas fa-database"></i> Buat Database Pegawai
                </a>
            </li>
            <li class="list-group-item animate__animated animate__fadeInLeft" style="animation-delay: 0.2s;">
                <a href="menambah-data.php">
                    <i class="fas fa-user-plus"></i> Tambah Data Pegawai
                </a>
            </li>
            <li class="list-group-item animate__animated animate__fadeInLeft" style="animation-delay: 0.4s;">
                <a href="mengubah-data.php">
                    <i class="fas fa-user-edit"></i> Ubah Data Pegawai
                </a>
            </li>
            <li class="list-group-item animate__animated animate__fadeInLeft" style="animation-delay: 0.6s;">
                <a href="menghapus-data.php">
                    <i class="fas fa-user-times"></i> Hapus Data Pegawai
                </a>
            </li>
            <li class="list-group-item animate__animated animate__fadeInLeft" style="animation-delay: 0.8s;">
                <a href="mencari-data.php">
                    <i class="fas fa-search"></i> Cari Pegawai Berdasarkan Nama
                </a>
            </li>
            <li class="list-group-item animate__animated animate__fadeInLeft" style="animation-delay: 1s;">
                <a href="menampilkan-data.php">
                    <i class="fas fa-list"></i> Lihat Semua Data Pegawai
                </a>
            </li>
            <li class="list-group-item animate__animated animate__fadeInLeft" style="animation-delay: 1.2s;">
                <a href="menghitung-gaji.php">
                    <i class="fas fa-calculator"></i> Hitung Gaji Pegawai
                </a>
            </li>
        </ul>

        <!-- Tombol logout -->
        <form method="POST" action="">
            <button type="submit" name="logout" class="btn btn-danger animate__animated animate__fadeInUp">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </form>
    </div>

    <!-- Footer -->
    <footer>
        &copy; 2024 Sistem Pengelolaan Administrasi Pegawai
    </footer>

    <!-- Tambahkan Bootstrap dan Font Awesome Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
