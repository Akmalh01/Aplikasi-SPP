<?php
include '../../config/config.php';

if(isset($_GET['id'])) {
    $nisn = $_GET['id'];

    // Query untuk menghapus data kelas berdasarkan id_kelas
    $query = "DELETE FROM siswa WHERE nisn = $nisn";
    $result = mysqli_query($conn, $query);

    if($result) {
        // Jika penghapusan berhasil, arahkan kembali ke halaman utama
        echo  "<script>alert('Data Siswa Berhasil Dihapus!');window.location='../siswa.php'</script>";
    } else {
        // Jika penghapusan gagal, tampilkan pesan kesalahan
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Jika tidak ada parameter id, tampilkan pesan kesalahan
    echo "NISN tidak ditemukan.";
}
?>
