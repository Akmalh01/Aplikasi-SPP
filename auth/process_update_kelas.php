<?php
include '../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengecek apakah semua field telah diisi
    if (isset($_POST['id_kelas']) && isset($_POST['nama_kelas']) && isset($_POST['kompetensi_keahlian'])) {
        $id_kelas = $_POST['id_kelas'];
        $nama_kelas = $_POST['nama_kelas'];
        $kompetensi_keahlian = $_POST['kompetensi_keahlian'];

        // Query untuk melakukan update data kelas
        $query = "UPDATE kelas SET nama_kelas='$nama_kelas', kompetensi_keahlian='$kompetensi_keahlian' WHERE id_kelas=$id_kelas";

        $result = mysqli_query($conn, $query);

        if ($result) {
            // Jika pembaruan berhasil, arahkan kembali ke halaman utama
            header("Location: ../admin/kelas.php");
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
