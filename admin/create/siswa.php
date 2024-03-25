<?php
require '../../config/config.php';

if (isset($_POST['tambah'])) {
    $nisn = $_POST['nisn'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $id_kelas = $_POST['id_kelas'];
    $id_spp = $_POST['id_spp'];

    $query = "INSERT INTO siswa (nisn, nis, nama, alamat, no_telp, id_kelas, id_spp) VALUES ('$nisn', '$nis', '$nama', '$alamat', '$no_telp', '$id_kelas', '$id_spp')";

    if (mysqli_query($conn, $query)) {
        echo "<script>
        alert('Data Siswa Berhasil Ditambahkan');
            document.location.href = '../siswa.php';
        </script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <label for=nisn">NISN</label>
        <input type="number" name="nisn" required><br><br>
        <label for="nis">NIS</label>
        <input type="number" name="nis" required><br><br>
        <label for="nama">Nama</label>
        <input type="text" name="nama" required><br><br>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" required><br><br>
        <label for="no_telp">Nomor Telpon</label>
        <input type="number" name="no_telp" required><br><br>
        <label for="id_kelas">Kelas:</label><br>
        <select id="id_kelas" name="id_kelas" required><br><br>
            <?php
            require '../../config/config.php';

            $sql_kelas = "SELECT id_kelas, nama_kelas FROM kelas";
            $result_kelas = $conn->query($sql_kelas);


            if ($result_kelas->num_rows > 0) {
                while ($row_kelas = $result_kelas->fetch_assoc()) {
                    echo "<option value='" . $row_kelas['id_kelas'] . "'>" . $row_kelas['nama_kelas'] . "</option>";
                }
            } else {
                echo "<option value=''>Tidak ada data kelas</option>";
            }
            ?>
        </select><br>
        <label for="id_spp">SPP:</label><br>
        <select id="id_spp" name="id_spp"><br><br>
            <?php
            require '../../config/config.php';
            $sql_spp = "SELECT id_spp, tahun FROM spp";
            $result_spp = $conn->query($sql_spp);

            if ($result_spp->num_rows > 0) {
                while ($row_spp = $result_spp->fetch_assoc()) {
                    echo "<option value='" . $row_spp['id_spp'] . "'>" . $row_spp['tahun'] . "</option>";
                }
            } else {
                echo "<option value=''>Tidak ada data SPP</option>";
            }

            $conn->close();
            ?>
        </select><br><br>
        <button type="submit" name="tambah">Tambah</button>
    </form>
</body>

</html>

