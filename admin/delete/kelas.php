<?php
include '../../config/config.php';

if(isset($_GET['id'])) {
    $id_kelas = $_GET['id'];

    $query = "DELETE FROM kelas WHERE id_kelas = $id_kelas";
    $result = mysqli_query($conn, $query);

    if($result) {
        echo  "<script>alert('Kelas Berhasil Dihapus!');window.location='../kelas.php'</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Jika tidak ada parameter id, tampilkan pesan kesalahan
    echo "ID kelas tidak ditemukan.";
}
?>
