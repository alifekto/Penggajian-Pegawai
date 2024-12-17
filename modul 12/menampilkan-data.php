<?php
session_start();

if (!isset($_SESSION['usn'])) {
    header("Location: validasi-form.php");
    exit;
}

// Membaca file pegawai.txt
$file = file("pegawai.txt");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>

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

        .table-container {
            width: 90%;
            margin: 0 auto;
            margin-top: 30px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #3894a1;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .table-container a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #4CAF50;
            font-weight: 600;
            text-align: center;
            transition: color 0.3s ease;
        }

        .table-container a:hover {
            color: #45a049;
        }
    </style>
</head>
<body>

    <h2 class="animate__animated animate__fadeInDown">Data Semua Pegawai</h2>

    <div class="table-container animate__animated animate__fadeInUp">
        <table>
            <thead>
                <tr>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Unit</th>
                    <th>Golongan</th>
                    <th>Jumlah Anak</th>
                    <th>Jam Kerja</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($file as $line): ?>
                    <?php $data = explode(", ", trim($line)); ?>
                    <tr>
                        <td><?php echo $data[0]; ?></td>
                        <td><?php echo $data[1]; ?></td>
                        <td><?php echo $data[2]; ?></td>
                        <td><?php echo $data[3]; ?></td>
                        <td><?php echo $data[4]; ?></td>
                        <td><?php echo $data[5]; ?></td>
                        <td><?php echo $data[6]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="text-center mt-4">
        <a href="home.php">Kembali ke Halaman Utama</a>
    </div>

</body>
</html>
