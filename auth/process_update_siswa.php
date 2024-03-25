<?php
include '../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memastikan bahwa data telah disubmit melalui metode POST

    // Mengambil nilai yang diterima dari formulir
    $nisn = $_POST['nisn'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $id_kelas = $_POST['id_kelas'];

    // Mengeksekusi query SQL untuk memperbarui data siswa
    $query = "UPDATE siswa SET nis=?, nama=?, alamat=?, no_telp=?, id_kelas=? WHERE nisn=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("issisi", $nis, $nama, $alamat, $no_telp, $id_kelas, $nisn);

    if ($stmt) {
            // Jika pembaruan berhasil, arahkan kembali ke halaman utama
            header("Location: ../admin/siswa.php");
            exit();
        } else {
            // Jika pembaruan gagal, tampilkan pesan kesalahan
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        // Jika tidak semua field diisi, tampilkan pesan kesalahan
        echo "Semua field harus diisi!";
    }
?>
