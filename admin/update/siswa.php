<?php
include '../../config/config.php';

if (isset($_GET['action']) && $_GET['action'] == 'update' && isset($_GET['nisn'])) {
    $nisn = $_GET['nisn'];

    // Statement yang telah dipersiapkan untuk mencegah injeksi SQL
    $query = "SELECT * FROM siswa WHERE nisn = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $nisn);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $siswa = $result->fetch_assoc();
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Perbarui Siswa</title>
        </head>

        <body>
            <h2>Perbarui Kelas</h2>
            <form action="../../auth/process_update_siswa.php" method="POST">
                <label for="nisn">NISN</label>
                <input type="number" name="nisn" value="<?= $siswa['nisn'] ?>" readonly><br>
                <label for="nis">NIS</label><br>
                <input type="number" name="nis" value="<?= $siswa['nis'] ?>"><br>
                <label for="nama">Nama</label><br>
                <input type="text" name="nama" value="<?= $siswa['nama'] ?>"><br>
                <label for="alamat">Alamat</label><br>
                <input type="text" name="alamat" value="<?= $siswa['alamat'] ?>"><br><br>
                <label for="no_telp">Nomor Telepon</label><br>
                <input type="number" name="no_telp" value="<?= $siswa['no_telp'] ?>"><br><br>
                <label for="id_kelas">ID Kelas</label><br>
                <select id="id_kelas" name="id_kelas">
                    <?php
                    $sql_kelas = "SELECT id_kelas, nama_kelas FROM kelas";
                    $result_kelas = $conn->query($sql_kelas);

                    if ($result_kelas->num_rows > 0) {
                        while ($row_kelas = $result_kelas->fetch_assoc()) {
                            $selected = ($row_kelas['id_kelas'] == $siswa['id_kelas']) ? "selected" : "";
                            echo "<option value='" . $row_kelas['id_kelas'] . "' $selected>" . $row_kelas['nama_kelas'] . "</option>";
                        }
                    } else {
                        echo "<option value=''>Tidak ada data kelas</option>";
                    }
                    ?>
                </select><br>
                <input type="submit" value="Perbarui">
            </form>
        </body>

        </html>
<?php
    } else {
        echo "Data siswa tidak ditemukan.";
    }
} else {
    echo "Aksi tidak valid.";
}
?>
