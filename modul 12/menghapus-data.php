<?php
if(isset($_POST['submit'])){
    $nama=$_POST['nama'];

    $file=file("pegawai.txt");
    $updated_data=[];

    foreach($file as $line){
        if (trim($line)!==$nama){
            $updated_data[]=$line;
        }
    }
    file_put_contents("pegawai.txt",implode("\n",$updated_data));
    echo"Data pegawai berhasil dihapus!";
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Data Pegawai</title>

    <!-- Menambahkan Tailwind CSS melalui CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Menambahkan Animate.css melalui CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

    <style>
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

        .form-container {
            width: 50%;
            margin: 0 auto;
            padding: 40px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
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
            border-color: #3894a1;
            outline: none;
        }

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

    <h2 class="animate__animated animate__fadeInDown">Hapus Data Pegawai</h2>

    <div class="form-container animate__animated animate__fadeInUp">
        <form method="POST" action="">
            <label for="nama" class="block text-lg font-medium text-gray-700">Nama Pegawai:</label>
            <input type="text" id="nama" name="nama" required class="border border-gray-300 rounded-lg p-3 mb-4 focus:outline-none focus:ring-2">

            <button type="submit" name="submit" class="mt-4 p-3 bg-green-500 text-white rounded-lg w-full hover:bg-green-600 transition-colors duration-300">Hapus Data</button>
            
            <br><br>
            <a href="home.php" class="text-green-500 hover:text-green-600">Kembali ke Halaman Utama</a>
        </form>
    </div>

</body>
</html>
 