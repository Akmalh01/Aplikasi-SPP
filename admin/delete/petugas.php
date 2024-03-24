<?php
include '../../config/config.php';

if(isset($_GET['id'])) {
    $id_petugas = $_GET['id'];

    // Query untuk menghapus data kelas berdasarkan id_kelas
    $query = "DELETE FROM petugas WHERE id_petugas = $id_petugas";
    $result = mysqli_query($conn, $query);

    if($result) {
        // Jika penghapusan berhasil, arahkan kembali ke halaman utama
        echo  "<script>alert('Data Petugas Berhasil Dihapus!');window.location='../petugas.php'</script>";
    } else {
        // Jika penghapusan gagal, tampilkan pesan kesalahan
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Jika tidak ada parameter id, tampilkan pesan kesalahan
    echo "ID petugas tidak ditemukan.";
}
?>
