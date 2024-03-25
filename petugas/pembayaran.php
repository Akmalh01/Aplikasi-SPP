<?php
require '../config/config.php';

if (isset($_POST['bayar'])) {
    $id_petugas = $_POST['id_petugas'];
    $nisn = $_POST['nisn'];
    $tgl_bayar = $_POST['tgl_bayar'];
    $bulan_dibayar = $_POST['bulan_dibayar'];
    $tahun_dibayar = $_POST['tahun_dibayar'];
    $id_spp = $_POST['id_spp'];
    $jumlah_bayar = $_POST['jumlah_bayar'];

    $query = "INSERT INTO pembayaran (id_petugas, nisn, tgl_bayar, bulan_dibayar, tahun_dibayar, id_spp, jumlah_bayar) VALUES ('$id_petugas', '$nisn', '$tgl_bayar', '$bulan_dibayar', '$tahun_dibayar', '$id_spp', '$jumlah_bayar')";

    if (mysqli_query($conn, $query)) {
        echo "<script>
        alert('Pembayaran SPP Berhasil Ditambahkan');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
<?php include '../components/header.html'; ?>

<div class="ml-7 mr-7">
<form method="post" action="">
    <div class="grid gap-6 mb-6 md:grid-cols-2">
    <div>
            <label for="id_petugas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-blacke">Petugas</label>
            <select id="id_petugas" name="id_petugas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required >
            <?php
            require '../config/config.php';
            $sql_petugas = "SELECT id_petugas, username FROM petugas";
            $result_petugas = $conn->query($sql_petugas);

            // Memasukkan data kelas ke dalam dropdown
            if ($result_petugas->num_rows > 0) {
                while ($row_petugas = $result_petugas->fetch_assoc()) {
                    echo "<option value='" . $row_petugas['id_petugas'] . "'>" . $row_petugas['username'] . "</option>";
                }
            } else {
                echo "<option value=''>Tidak ada data Petugas</option>";
            }


            $conn->close();
            ?>
            </select>
        </div>
        <div>
            <label for="nisn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-blacke">Nama Siswa</label>
            <select name="nisn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required >
            <?php
            require '../config/config.php';
            // Mengambil data kelas dari tabel kelas
            $sql_siswa = "SELECT nisn, nama FROM siswa";
            $result_siswa = $conn->query($sql_siswa);

            if ($result_siswa->num_rows > 0) {
                while ($row_siswa = $result_siswa->fetch_assoc()) {
                    echo "<option value='" . $row_siswa['nisn'] . "'>" . $row_siswa['nama'] . "</option>";
                }
            } else {
                echo "<option value=''>Tidak ada data Petugas</option>";
            }
            $conn->close();
            ?>
            </select>
        </div>
        <div>
            <label for="tgl_bayar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Tanggal Bayar</label>
            <input type="date" name="tgl_bayar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>
        <div>
            <label for="bulan_dibayar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Bulan Dibayar</label>
            <input type="text" name="bulan_dibayar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>  
        <div>
            <label for="tahun_dibayar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Tahun Dibayar</label>
            <input type="number" name="tahun_dibayar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>
        <div>
            <label for="id_spp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-blacke">id SPP</label>
            <select id="id_spp" name="id_spp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required >
            <?php
            require '../config/config.php';

            $sql_spp = "SELECT id_spp, tahun, nominal FROM spp";
            $result_spp = $conn->query($sql_spp);

            if ($result_spp->num_rows > 0) {
                while ($row_spp = $result_spp->fetch_assoc()) {
                    echo "<option value='" . $row_spp['id_spp'] . "'>" . $row_spp['tahun'] . " Rp." . number_format($row_spp['nominal']) . "</option>";
                }
            } else {
                echo "<option value=''>Tidak ada data SPP</option>";
            }

            // Menutup koneksi
            $conn->close();
            ?>
            </select>
        </div>
        <div>
            <label for="jumlah_bayar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Jumlah Dibayar</label>
            <input type="number" name="jumlah_bayar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>
    </div>
    <button type="submit" name="bayar" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>
</div>

</body>
</html>