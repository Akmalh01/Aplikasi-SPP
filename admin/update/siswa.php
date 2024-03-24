<?php
include '../../config/config.php';

if(isset($_GET['action']) && $_GET['action'] == 'update' && isset($_GET['nisn'])) {
    $nisn = $_GET['nisn'];

    // Ambil informasi kelas dari database berdasarkan id_kelas
    $query = "SELECT * FROM siswa WHERE nisn = $nisn";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {
        $siswa = mysqli_fetch_assoc($result);
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
    <form action="../../auth/process_update_siswa.php" method="POST">
        <label for="nisn">NISN</label>
        <input type="number" name="nisn" value="<?= $siswa['nisn'] ?>">
        <label for="nis">NIS</label><br>
        <input type="number" name="nis" value="<?= $siswa['nis'] ?>"><br>
        <label for="nama">Nama</label><br>
        <input type="text" name="nama" value="<?= $siswa['nama'] ?>"><br>
        <label for="alamat">alamat</label><br>
        <input type="text" name="alamat" value="<?= $siswa['alamat'] ?>"><br><br>
        <label for="no_telp">No Telp</label><br>
        <input type="number" name="no_telp" value="<?= $siswa['no_telp'] ?>"><br><br>
        <label for="id_kelas">Id_Kelas</label><br>
        <select id="id_kelas" name="id_kelas" value="<?= $siswa['id_kelas'] ?>"><br><br>
            <?php
                require '../../config/config.php';

                // Mengambil data kelas dari tabel kelas
                $sql_kelas = "SELECT id_kelas, nama_kelas FROM kelas";
                $result_kelas = $conn->query($sql_kelas);

                // Memasukkan data kelas ke dalam dropdown
                if ($result_kelas->num_rows > 0) {
                    while ($row_kelas = $result_kelas->fetch_assoc()) {
                        echo "<option value='" . $row_kelas['id_kelas'] . "'>" . $row_kelas['nama_kelas'] . "</option>";
                    }
                } else {
                    echo "<option value=''>Tidak ada data kelas</option>";
                }
            ?>
        </select><br>
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
