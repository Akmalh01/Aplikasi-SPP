<?php
include '../../config/config.php';

if(isset($_GET['action']) && $_GET['action'] == 'update' && isset($_GET['id_petugas'])) {
    $id_petugas = $_GET['id_petugas'];

    // Ambil informasi kelas dari database berdasarkan id_kelas
    $query = "SELECT * FROM petugas WHERE id_petugas = $id_petugas";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {
        $petugas = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Petugas</title>
</head>

<body>
    <h2>Update Kelas</h2>
    <form action="../../auth/process_update_petugas.php" method="POST">
        <input type="hidden" name="id_petugas" value="<?= $petugas['id_petugas'] ?>">
        <label for="username">Username</label><br>
        <input type="text" name="username" value="<?= $petugas['username'] ?>"><br>
        <label for="password">Password</label><br>
        <input type="text" name="password" value="<?= $petugas['password'] ?>"><br>
        <label for="nama_petugas">Nama Petugas</label><br>
        <input type="text" name="nama_petugas" value="<?= $petugas['nama_petugas'] ?>"><br><br>
        <input type="submit" value="Update">
    </form>
</body>

</html>
<?php
    } else {
        echo "Data petugas tidak ditemukan.";
    }
} else {
    echo "Aksi tidak valid.";
}
?>
