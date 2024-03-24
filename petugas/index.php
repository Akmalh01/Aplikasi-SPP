<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['level_petugas'] != 'petugas') {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <?php
    include '../components/header.html';

    $username = $_SESSION['username'];
    $level = $_SESSION['level_petugas'];
    ?>

    <p class="text-md font-semibold p-8">Welcome! <?=  $username ?></p>
    <div id="content" class="ml-96 mt-20 p-5 flex">

        <div class="w-56 h-32 p-6 border rounded-lg shadow bg-cyan-400 border-cyan-500">
            <a href="pembayaran.php">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-white text-center">Pembayaran</h5>
            </a>
            <a href="pembayaran.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg focus:ring-4 focus:outline-none bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                Lihat
            </a>
        </div>

        <div class="w-56 h-32 ml-36 p-6 border rounded-lg shadow bg-sky-400 border-cyan-400">
            <a href="riwayat.php">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-white text-center">Riwayat</h5>
            </a>
            <a href="riwayat.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg focus:ring-4 focus:outline-none bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                Lihat
            </a>
        </div>
</body>

</html>