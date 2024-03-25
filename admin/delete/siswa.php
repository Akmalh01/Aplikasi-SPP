<?php
include '../../config/config.php';

if(isset($_GET['id'])) {
    $nisn = $_GET['id'];

    $query = "DELETE FROM siswa WHERE nisn = $nisn";
    $result = mysqli_query($conn, $query);

    if($result) {
        echo  "<script>alert('Data Siswa Berhasil Dihapus!');window.location='../siswa.php'</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "NISN tidak ditemukan.";
}
?>
