<?php
//session_start();

//if (!isset($_SESSION['username']) || $_SESSION['level_petugas'] != 'admin') {
  //  header("Location: ../index.php");
   // exit();
//}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include '../components/sidebar.php'; ?>
    <div id="content" class="ml-72 mt-20 p-5 flex">

        <div class="w-56 h-32 p-6 border rounded-lg shadow bg-cyan-400 border-cyan-500">
            <a href="siswa.php">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-white text-center">Siswa</h5>
            </a>
            <a href="siswa.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg focus:ring-4 focus:outline-none bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                Lihat
            </a>
        </div>

        <div class="w-56 h-32 ml-9 p-6 border rounded-lg shadow bg-sky-400 border-cyan-400">
            <a href="kelas.php">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-white text-center">Kelas</h5>
            </a>
            <a href="kelas.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg focus:ring-4 focus:outline-none bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                Lihat
            </a>
        </div>

        <div class="w-56 h-32 p-6 ml-9 border rounded-lg shadow bg-blue-400 border-cyan-500">
            <a href="spp.php">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-white text-center">SPP</h5>
            </a>
            <a href="spp.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg focus:ring-4 focus:outline-none bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                Lihat
            </a>
        </div>

        <div class="w-56 h-32 p-6 ml-9 border rounded-lg shadow bg-sky-300 border-cyan-500">
            <a href="petugas.php">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-white text-center">Petugas</h5>
            </a>
            <a href="petugas.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg focus:ring-4 focus:outline-none bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                Lihat
            </a>
        </div>
    </div>
    <div id="content" class="ml-72 mt-2 p-5 flex">
        <div class="w-56 h-32 p-6 border rounded-lg shadow bg-indigo-400 border-cyan-500">
            <a href="pembayaran.php">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-white text-center">Pembayaran</h5>
            </a>
            <a href="pembayaran.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg focus:ring-4 focus:outline-none bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                Lihat
            </a>
        </div>
        <div class="w-56 h32 p-6 ml-9 border rounded-lg shadow bg-cyan-600 border-cyan-700">
            <a href="riwayat.php">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-white text-center">Riwayat</h5>
            </a>
            <a href="riwayat.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg focus:ring-4 focus:outline-none bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                Lihat
            </a>
        </div>
    </div>

    <script src="../components/js/script.js"></script>
</body>

</html>