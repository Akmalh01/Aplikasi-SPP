<?php
include '../../config/config.php';

if(isset($_GET['id'])) {
    $id_petugas = $_GET['id'];

    $query = "DELETE FROM petugas WHERE id_petugas = $id_petugas";
    $result = mysqli_query($conn, $query);

    if($result) {
        echo  "<script>alert('Data Petugas Berhasil Dihapus!');window.location='../petugas.php'</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "ID petugas tidak ditemukan.";
}
?>
