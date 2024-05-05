<?php
session_start();

// Cek apakah pengguna belum login
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Jika belum login, redirect ke halaman login
    header("Location: login.php");
    exit();
} // Proses logout jika tombol logout ditekan
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <!-- navbar   -->
<nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Lexatourism Dashboard</span>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="index.php" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500">Destinasi</a>
          </li>
        <li>
          <a href="buku_tamu.php" class="bblock py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" aria-current="page">Buku Tamu</a>
        </li>
        <li>
            <!-- tombol logout -->
        <form method="POST" action="logout.php">
    <button type="submit" name="logout" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Logout</button>
</form>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Destinasi
                </th>
                <th scope="col" class="px-6 py-3">
                    Jumlah Anggota
                </th>
                <th scope="col" class="px-6 py-3">
                    Jumlah Hari
                </th>
                <th scope="col" class="px-6 py-3">
                    Jumlah Kunjungan Kuliner
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal Mulai
                </th>
                <th scope="col" class="px-6 py-3">
                    Total Biaya
                </th>
                <th scope="col" class="px-6 py-3">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../db_connection.php';
            // Query untuk mengambil data dari database
            $query = "SELECT * FROM dashboard"; // Ganti 'nama_tabel' dengan nama tabel Anda
            // Eksekusi query
            $result = mysqli_query($koneksi, $query);
            // Loop melalui setiap baris hasil query
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <!-- Edit user modal -->
                <div id="editUserModal<?php echo $row['id']; ?>" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full bg-gray-100 rounded-lg">
            <!-- Modal content -->
            <form action="update_dashboard.php" method="POST" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Edit user
                    </h3>
                   <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editUserModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6 bg-gray-100">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Destinasi</label>
                            <input type="text" name="nama" id="first-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo $row['nama']; ?>" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Anggota</label>
                            <input type="text" name="jumlah_anggota" id="last-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo $row['jumlah_anggota']; ?>" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Hari</label>
                            <input type="number" name="jumlah_hari" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo $row['jumlah_hari']; ?>" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Kunjungan Kuliner</label>
                            <input type="number" name="jumlah_kunjungan_kuliner" id="phone-number" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo $row['jumlah_kunjungan_kuliner']; ?>" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Mulai</label>
                            <input type="text" name="tanggal_mulai" id="department" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo $row['tanggal_mulai']; ?>" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Biaya</label>
                            <input type="number" name="total_bayar" id="company" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo $row['total_bayar']; ?>" required="">
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save all</button>
                </div>
            </form>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="px-6 py-4">
                        <div class="text-base font-semibold"><?php echo $row['id']; ?></div>
                    </div>  
                </th>
                <td class="px-6 py-4"><?php echo $row['nama']; ?></td>
                <td class="px-6 py-4"><?php echo $row['jumlah_anggota']; ?></td>
                <td class="px-6 py-4"><?php echo $row['jumlah_hari']; ?></td>
                <td class="px-6 py-4"><?php echo $row['jumlah_kunjungan_kuliner']; ?></td>
                <td class="px-6 py-4"><?php echo $row['tanggal_mulai']; ?></td>
                <td class="px-6 py-4"><?php echo $row['total_bayar']; ?>
            </td>
                <td class="px-6 py-4">
                    
                    <div class="bungkus">
                    <!-- Modal toggle -->
                    <a href="#" type="button" data-modal-target="editUserModal<?php echo $row['id']; ?>" data-modal-show="editUserModal<?php echo $row['id']; ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user</a>
        <a href="delete_dashboard.php?id=<?php echo $row['id']; ?>" class="font-medium text-red-700 ml-3">Delete</a>
    </div>
                </div>
                </td>
            </tr>
             
            <?php
        }
        ?>
        </tbody>
    </table>
   
                
        </div>
    </div>
</div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</html>