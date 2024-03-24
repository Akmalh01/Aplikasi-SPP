<?php
include '../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengecek apakah semua field telah diisi
    if (isset($_POST['id_spp']) && isset($_POST['tahun']) && isset($_POST['nominal'])) {
        $id_spp = $_POST['id_spp'];
        $tahun = $_POST['tahun'];
        $nominal = $_POST['nominal'];

        // Query untuk melakukan update data kelas
        $query = "UPDATE spp SET tahun='$tahun', nominal='$nominal' WHERE id_spp=$id_spp";

        $result = mysqli_query($conn, $query);

        if ($result) {
            // Jika pembaruan berhasil, arahkan kembali ke halaman utama
            header("Location: ../admin/spp.php");
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
