<?php
include '../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengecek apakah semua field telah diisi
    if (isset($_POST['id_petugas']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['nama_petugas'])) {
        $id_petugas = $_POST['id_petugas'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama_petugas = $_POST['nama_petugas'];

        // Query untuk melakukan update data kelas
        $query = "UPDATE petugas SET username='$username', password='$password', nama_petugas='$nama_petugas' WHERE id_petugas=$id_petugas";

        $result = mysqli_query($conn, $query);

        if ($result) {
            // Jika pembaruan berhasil, arahkan kembali ke halaman utama
            header("Location: ../admin/petugas.php");
            exit();
        } else {
            // Jika pembaruan gagal, tampilkan pesan kesalahan
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        // Jika tidak semua field diisi, tampilkan pesan kesalahan
        echo "Semua field harus diisi!";
    }
} else {
    // Jika request bukan POST, tampilkan pesan kesalahan
    echo "Metode request tidak valid!";
}
?>
