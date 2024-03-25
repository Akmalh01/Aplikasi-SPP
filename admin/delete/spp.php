<?php
include '../../config/config.php';

if(isset($_GET['id'])) {
    $id_spp = $_GET['id'];

    $query = "DELETE FROM spp WHERE id_spp = $id_spp";
    $result = mysqli_query($conn, $query);

    if($result) {
        echo  "<script>alert('SPP Berhasil Dihapus!');window.location='../spp.php'</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "ID spp tidak ditemukan.";
}
?>
