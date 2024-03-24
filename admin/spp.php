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
    include '../components/sidebar.php'
    ?>

    <div id="content" class="ml-64 mt-12 p-5">
    <div class="relative flex flex-wrap items-center my-2">
        <button id="open-popup-btn" class="inline-block text-[.925rem] font-medium leading-normal text-center align-middle cursor-pointer rounded-lg py-2 px-3 bg-blue-700 text-white" type="button">Add SPP</button>
    </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-blue-500 dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Tahun
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nominal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Hapus
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Edit
                        </th>
                        <!-- <th scope="col" class="px-6 py-3">
                    Action
                </th> -->
                    </tr>
                </thead>
                <?php
                include '../config/config.php';
                $spp = mysqli_query($conn, "SELECT * FROM spp");
                foreach ($spp as $data) :
                ?>
                    <tbody class="border-blue-800">
                        <tr class="odd:bg-white odd:dark:bg-neutral-50 even:bg-gray-50 even:dark:bg-blue-800 border-b dark:border-blue-800">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-400">
                                <?= $data['tahun'] ?>
                            </td>
                            <td class="px-6 py-4">
                                Rp <?= number_format($data['nominal'])  ?>
                            </td>
                            <td class="px-6 py-4">
                                <a onclick="return confirm('Anda yakin ingin menghapus spp ?')" href="delete/spp.php?id=<?= $data['id_spp'] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="update/spp.php?action=update&id_spp=<?= $data['id_spp'] ?>&tahun=<?= $data['tahun'] ?>&nominal=<?= $data['nominal'] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Update</a>
                            </td>
                            <!-- <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td> -->
                        </tr>

                    </tbody>
                <?php endforeach ?>
            </table>
        </div>
    </div>

    <?php include 'create/spp.php'; ?>
    <script src="../components/js/script.js"></script>
</body>

</html>