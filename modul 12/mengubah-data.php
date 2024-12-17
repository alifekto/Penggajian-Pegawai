<?php
session_start();

if (!isset($_SESSION['usn'])) {
    header("Location: validasi-form.php");
    exit;
}

if (isset($_POST['submit'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $unit = $_POST['unit'];
    $golongan = $_POST['golongan'];
    $anak = $_POST['anak'];
    $jam_kerja = $_POST['jam_kerja'];

    // Membaca file pegawai.txt
    $file = file("pegawai.txt");
    $updated_data = [];

    // Loop untuk mencari data pegawai berdasarkan NIK dan mengubah data
    foreach ($file as $line) {
        $data = explode(", ", trim($line)); // Memecah data berdasarkan koma
        if ($data[0] === $nik) {
            // Mengubah data pegawai sesuai input yang baru
            $updated_data[] = "$nik, $nama, $alamat, $unit, $golongan, $anak, $jam_kerja";
        } else {
            $updated_data[] = $line; // Menjaga data yang lain tetap ada
        }
    }

    // Menyimpan kembali data yang sudah diperbarui ke file
    file_put_contents("pegawai.txt", implode("\n", $updated_data));
    echo "Data pegawai berhasil diubah!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Pegawai</title>

    <!-- Menambahkan Google Fonts untuk font yang lebih menarik -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        /* Global Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        h2 {
            text-align: center;
            color: #3894a1;
            margin-top: 30px;
        }

        /* Form Container */
        .form-container {
            width: 50%;
            margin: 0 auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .form-container label {
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
            display: block;
        }

        .form-container input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
        }

        .form-container input:focus {
            border-color: #4CAF50;
            outline: none;
        }

        /* Button Styles */
        .form-container button {
            width: 100%;
            padding: 12px;
            background-color: #2f404f;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-container button:hover {
            background-color: #3894a1;
        }

        /* Link to Go Back */
        .form-container a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #3894a1;
            font-weight: 600;
            text-align: center;
            transition: color 0.3s ease;
        }

        .form-container a:hover {
            color: #3894a1;
        }
    </style>
</head>
<body>

    <h2>Ubah Data Pegawai</h2>

    <!-- Form Container -->
    <div class="form-container">
        <form method="POST" action="">
            <label for="nik">NIK :</label>
            <input type="text" id="nik" name="nik" required><br>

            <label for="nama">Nama Penduduk :</label>
            <input type="text" id="nama" name="nama" required><br>

            <label for="alamat">Alamat :</label>
            <input type="text" id="alamat" name="alamat" required><br>

            <label for="unit">Unit :</label>
            <input type="text" id="unit" name="unit" required><br>

            <label for="golongan">Golongan :</label>
            <input type="text" id="golongan" name="golongan" required><br>

            <label for="anak">Jumlah Anak :</label>
            <input type="text" id="anak" name="anak" required><br>

            <label for="jam_kerja">Jam Kerja :</label>
            <input type="text" id="jam_kerja" name="jam_kerja" required><br>

            <button type="submit" name="submit">Ubah Data</button><br><br>

            <a href="home.php">Kembali ke Halaman Utama</a>
        </form>
    </div>

</body>
</html>
