<?php
//require '../../config/config.php';

if(isset( $_POST['tambah'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama_petugas = $_POST['nama_petugas']; 
    $level = $_POST['level'];  

    $query = "INSERT INTO petugas (username, password, nama_petugas, level) VALUES ('$username', '$password', '$nama_petugas', '$level')";

    if (mysqli_query($conn, $query)) {
        echo "<script>
        alert('Data Admin Berhasil Ditambahkan');
            document.location.href = 'petugas.php';
        </script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
    mysqli_close($conn);
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
<div id="popup-bg" class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 hidden"></div>

<div id="popup-form" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white shadow-md rounded-md p-8 max-w-xs w-full sm:max-w-md hidden">
        <h2 class="text-lg font-semibold mb-4">Tambah Petugas</h2>
        <form action="" method="POST">
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" name="username" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="nama_petugas" class="block text-sm font-medium text-gray-700">Nama Petugas</label>
                <input type="text" name="nama_petugas" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="level" class="block text-sm font-medium text-gray-700">Level</label>
                <select name="level" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
                    <option value="admin">admin</option>
                <option value="petugas">Petugas</option>
                </select>
            </div>
            <div class="flex justify-end">
                <button type="submit" name="tambah" class="bg-blue-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Tambah</button>
            </div>
        </form>
    </div>

    <script src="../../components/js/script.js"></script>
</body>
</html>