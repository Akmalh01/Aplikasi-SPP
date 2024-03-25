<?php
include '../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id_kelas']) && isset($_POST['nama_kelas']) && isset($_POST['kompetensi_keahlian'])) {
        $id_kelas = $_POST['id_kelas'];
        $nama_kelas = $_POST['nama_kelas'];
        $kompetensi_keahlian = $_POST['kompetensi_keahlian'];

        $query = "UPDATE kelas SET nama_kelas='$nama_kelas', kompetensi_keahlian='$kompetensi_keahlian' WHERE id_kelas=$id_kelas";

        $result = mysqli_query($conn, $query);

        if ($result) {
            header("Location: ../admin/kelas.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Semua field harus diisi!";
    }
} else {
    echo "Metode request tidak valid!";
}
?>
