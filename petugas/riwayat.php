<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php
    include '../components/header.html'
    ?>

    <div id="content" class="ml-4 mr-4 mt-0.5 p-5">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-blue-500 dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            id Pembayaran
                        </th>
                        <th scope="col" class="px-6 py-3">
                            id Petugas
                        </th>
                        <th scope="col" class="px-6 py-3">
                            NISN
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tgl Bayar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Bulan Dibayar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tahun Dibayar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Id_SPP
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah Bayar
                        </th>
                    </tr>
                </thead>
                <?php
                include '../config/config.php';
                $pembayaran = mysqli_query($conn, "SELECT * FROM pembayaran");
                foreach ($pembayaran as $data) :
                ?>
                    <tbody class="border-blue-800">
                        <tr class="odd:bg-white odd:dark:bg-neutral-50 even:bg-gray-50 even:dark:bg-blue-800 border-b dark:border-blue-800">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-400">
                                <?= $data['id_pembayaran'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $data['id_petugas'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $data['nisn'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $data['tgl_bayar'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $data['bulan_dibayar'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $data['tahun_dibayar'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $data['id_spp'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $data['jumlah_bayar'] ?>
                            </td>
                        </tr>

                    </tbody>
                <?php endforeach ?>
            </table>
        </div>
    </div>

    
    <script src="../components/js/script.js"></script>
</body>

</html>