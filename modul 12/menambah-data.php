<?php
if(isset($_POST['submit'])){
    $nik=$_POST['nik'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $unit=$_POST['unit'];
    $golongan=$_POST['golongan'];
    $anak=$_POST['anak'];
    $jam_kerja=$_POST['jam_kerja'];

    $data="$nik, $nama, $alamat, $unit, $golongan, $anak, $jam_kerja\n";

    $file= fopen("pegawai.txt","a");
    if ($file){
        fwrite($file,$data);
        fclose($file);
        echo "Data pegawai berhasil ditambahkan!";
    } else{
        echo "Gagal membuka file untuk menulis data.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Menambah Data Pegawai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e8f5e9;
            color: #333;
        }

        header {
            background-color: #3894a1;
            color: white;
            padding: 15px 0;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #3894a1;
            text-align: center;
            margin-top: 20px;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #2f404f;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #3894a1;
        }

        a {
            text-decoration: none;
            color: #3894a1;
            display: block;
            text-align: center;
            margin-top: 10px;
            transition: color 0.3s;
        }

        a:hover {
            color: #3894a1;
        }
    </style>
</head>
<body>
    <header>
        <h1>Tambah Data Pegawai</h1>
    </header>

    <h2>Menambah Data Pegawai</h2>
    <form method="POST" action="">
        <label for="nik">NIK:</label>
        <input type="text" id="nik" name="nik" required>

        <label for="nama">Nama Penduduk:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required>

        <label for="unit">Unit:</label>
        <input type="text" id="unit" name="unit" required>

        <label for="golongan">Golongan:</label>
        <input type="text" id="golongan" name="golongan" required>

        <label for="anak">Jumlah Anak:</label>
        <input type="text" id="anak" name="anak" required>

        <label for="jam_kerja">Jam Kerja:</label>
        <input type="text" id="jam_kerja" name="jam_kerja" required>

        <button type="submit" name="submit">Tambah Data</button>

        <a href="home.php">Kembali ke Halaman Utama</a>
    </form>
</body>
</html>
