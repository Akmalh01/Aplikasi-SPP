    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Admin</title>
    </head>

    <body>

        <div>
            <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-blue-600 dark:border-gray-400">
                <div class="px-3 py-3 lg:px-5 lg:pl-3">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center justify-start rtl:justify-end">
                            <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                                <span class="sr-only">Open sidebar</span>
                                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                                </svg>
                            </button>
                            <a href="" class="flex ms-2 md:me-24">
                                <span class="self-center text-xl font-semibold sm:text-2xl ml-20 whitespace-nowrap dark:text-white">Admin</span>
                            </a>
                        </div>
                        <div class="flex items-center">
                            <div class="flex items-center ms-3">
                                <div>
                                    <button id="user-menu-toggle" type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" aria-haspopup="true">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="w-8 h-8 rounded-full" src="../asset/image/user.png" alt="user photo">
                                    </button>
                                </div>

                                <?php
                                session_start();

                                if (!isset($_SESSION['username'])) {
                                    header("Location: ../index.php");
                                    exit();
                                }

                                // Ambil informasi username dan level akun dari session
                                $username = $_SESSION['username'];
                                $level = $_SESSION['level_petugas'];

                                // Sekarang kita bisa menampilkan informasi pengguna di HTML
                                ?>

                                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                        <div class="px-4 py-3" role="none">
                        <p class="text-sm text-gray-900 dark:text-white" role="none">
                            <?= $username; ?>
                        </p>
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                            <?= $level; ?>
                        </p>
                        </div>
                                <ul class="py-1" role="none">
                                    <li>
                                        <a href="../logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </nav>

        <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-blue-600 dark:border-gray-400" aria-label="Sidebar">
            <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-blue-600">
                <img src="../asset/image/logo.png" alt="" class="flex items-center justify-center w-24 ml-20">
                <ul class="space-y-2 font-medium text-center">
                    <li>
                        <a href="../admin/index.php" class="flex items-center p-2 text-blue-800 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-blue-800 group">
                            <span class="flex-1 ms-3 whitespace-nowrap">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="../admin/siswa.php" class="flex items-center p-2 text-blue-800 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-blue-800 group">
                            <span class="flex-1 ms-3 whitespace-nowrap">Siswa</span>
                        </a>
                    </li>
                    <li>
                        <a href="../admin/kelas.php" class="flex items-center p-2 text-blue-800 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-blue-800 group">
                            <span class="flex-1 ms-3 whitespace-nowrap">Kelas</span>
                        </a>
                    </li>
                    <li>
                        <a href="../admin/spp.php" class="flex items-center p-2 text-blue-800 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-blue-800 group">
                            <span class="flex-1 ms-3 whitespace-nowrap">SPP</span>
                        </a>
                    </li>
                    <li>
                        <a href="../admin/petugas.php" class="flex items-center p-2 text-blue-800 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-blue-800 group">

                            <span class="flex-1 ms-3 whitespace-nowrap">Petugas</span>
                        </a>
                    </li>
                    <li>
                        <a href="../admin/pembayaran.php" class="flex items-center p-2 text-blue-800 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-blue-800 group">
                            <span class="flex-1 ms-3 whitespace-nowrap">Pembayaran</span>
                        </a>
                    </li>
                    <li>
                        <a href="../admin/riwayat.php" class="flex items-center p-2 text-blue-800 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-blue-800 group">
                            <span class="flex-1 ms-3 whitespace-nowrap">Riwayat</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        </div>

        <script src="js/script.js"></script>
    </body>

    </html>