<?php
include '../../config/config.php';

if(isset($_GET['action']) && $_GET['action'] == 'update' && isset($_GET['id_spp'])) {
    $id_spp = $_GET['id_spp'];

    $query = "SELECT * FROM spp WHERE id_spp = $id_spp";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {
        $spp = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update SPP</title>
</head>

<body>
    <h2>Update Kelas</h2>
    <form action="../../auth/process_update_spp.php" method="POST">
        <input type="hidden" name="id_spp" value="<?= $spp['id_spp'] ?>">
        <label for="tahun">Tahum</label><br>
        <input type="number" name="tahun" value="<?= $spp['tahun'] ?>"><br>
        <label for="nominal">Nominal</label><br>
        <input type="number" name="nominal" value="<?= $spp['nominal'] ?>"><br><br>
        <input type="submit" value="Update">
    </form>
</body>

</html>
<?php
    } else {
        echo "Data SPP tidak ditemukan.";
    }
} else {
    echo "Aksi tidak valid.";
}
?>
