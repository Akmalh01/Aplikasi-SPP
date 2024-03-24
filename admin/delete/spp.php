<?php
include '../../config/config.php';

if(isset($_GET['id'])) {
    $id_spp = $_GET['id'];

    // Query untuk menghapus data kelas berdasarkan id_kelas
    $query = "DELETE FROM spp WHERE id_spp = $id_spp";
    $result = mysqli_query($conn, $query);

    if($result) {
        // Jika penghapusan berhasil, arahkan kembali ke halaman utama
        echo  "<script>alert('SPP Berhasil Dihapus!');window.location='../spp.php'</script>";
    } else {
        // Jika penghapusan gagal, tampilkan pesan kesalahan
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Jika tidak ada parameter id, tampilkan pesan kesalahan
    echo "ID spp tidak ditemukan.";
}
?>
