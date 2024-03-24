<?php
include '../../config/config.php';

if(isset($_GET['id'])) {
    $id_pembayaran = $_GET['id'];

    $query = "DELETE FROM pembayaran WHERE id_pembayaran = $id_pembayaran";
    $result = mysqli_query($conn, $query);

    if($result) {
        echo  "<script>alert('Riwayat Pembayaran Berhasil Dihapus!');window.location='../riwayat.php'</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Jika tidak ada parameter id, tampilkan pesan kesalahan
    echo "ID kelas tidak ditemukan.";
}
?>
