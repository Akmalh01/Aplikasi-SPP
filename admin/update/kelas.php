<?php
include '../../config/config.php';

if(isset($_GET['action']) && $_GET['action'] == 'update' && isset($_GET['id_kelas'])) {
    $id_kelas = $_GET['id_kelas'];

    $query = "SELECT * FROM kelas WHERE id_kelas = $id_kelas";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {
        $kelas = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Kelas</title>
</head>

<body>
    <h2>Update Kelas</h2>
    <form action="../../auth/process_update_kelas.php" method="POST">
        <input type="hidden" name="id_kelas" value="<?= $kelas['id_kelas'] ?>">
        <label for="nama_kelas">Nama Kelas:</label><br>
        <input type="text" id="nama_kelas" name="nama_kelas" value="<?= $kelas['nama_kelas'] ?>"><br>
        <label for="kompetensi_keahlian">Kompetensi Keahlian:</label><br>
        <input type="text" id="kompetensi_keahlian" name="kompetensi_keahlian" value="<?= $kelas['kompetensi_keahlian'] ?>"><br><br>
        <input type="submit" value="Update">
    </form>
</body>

</html>
<?php
    } else {
        echo "Kelas tidak ditemukan.";
    }
} else {
    echo "Aksi tidak valid.";
}
?>
