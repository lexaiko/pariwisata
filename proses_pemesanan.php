<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lexatour - Home</title>
    <link rel="icon" href="img/poliwangi.png" type="image">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200">
    <div class="scroll-to-top fixed z-10 bottom-5 right-5">
        <a href="#nav">
            <svg class="w-[40px] h-auto text-gray-500 dark:text-white" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m16 17-4-4-4 4m8-6-4-4-4 4" />
            </svg>
        </a>
    </div>
    <!-- {{-- Navbar Start --}} -->
    <div class="navbar" id="nav">
        <nav class="bg-white border-gray-200 dark:bg-gray-900 bg-opacity-0 fixed top-0 left-0 right-0 z-10">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Lexatourism</span>
                </a>
                <div class="flex md:order-2">
                    <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                        aria-expanded="false"
                        class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                    <div class="relative hidden md:block">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search icon</span>
                        </div>
                        <form action="search">
                            <input type="text" name="query" id="search-navbar"
                                class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search...">
                        </form>
                    </div>
                    <button data-collapse-toggle="navbar-search" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-search" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
                    <div class="relative mt-3 md:hidden">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="search-navbar"
                            class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search...">
                    </div>
                    <ul
                        class="flex flex-col p-4 text-blue-700 md:p-[10px] mt-4 font-medium border border-gray-400 rounded-xl bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white md:bg-opacity-30 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li class="pl-3">
                            <a href="#"
                                class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#services"
                                class="block py-2 px-3 md:text-white text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                        </li>
                        <li>
                            <a href="#ourtour"
                                class="block py-2 px-3 md:text-white text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tour</a>
                        </li>
                        <li>
                            <a href="#contacts"
                                class="block py-2 px-3 md:text-white text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                        </li>

                        <li class="pr-3">
                            <a href="#contacts"
                                class="block py-2 px-3 md:text-white text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- {{-- Navbar end --}}
    {{-- background top --}} -->
    <!-- {{-- end of background top --}} -->
    
<div class="container mx-auto px-[100px]">
        <div class="bigcard grid justify-center">
            <img src="img/bromo.png" alt="" class="w-[1300px] h-[500px] rounded-lg">
            <div class="rincian block">
                <div class="relative overflow-x-auto">
                    <div class="w-full bg-gray-50 dark:bg-gray-700">
                        <div class="text-xs text-gray-700 uppercase dark:text-gray-400 grid grid-cols-2">
                            <div class="px-6 py-3 border-b border-gray-200 dark:border-gray-700 sticky top-0">
                                Nama
                            </div>
                            <div class="px-6 py-3 border-b border-gray-200 dark:border-gray-700">
                                Quantity
                            </div>
                        </div>

                        <div class="bg-white dark:bg-gray-800">
                            <div class="grid grid-cols-2">
                                
                                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                    Nama Destinasi
                                </div>
                                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                               <?php 
                               if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if(isset($_POST["nama"]) && $_POST["nama"] !== '') {
                                    echo $_POST["nama"];
                                } else {
                                    echo "tidak ada data";
                                 }  
                                } else {
                                    // Jika halaman ini diakses secara langsung tanpa mengirimkan data melalui formulir, tampilkan pesan error
                                    echo "Akses tidak sah.";
                                }
                                ?>

                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                    Jumlah anggota
                                </div>
                                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                <?php if((isset($_POST["nama"]) && isset($_POST["jumlah_anggota"]) && isset($_POST["jumlah_hari"]) && isset($_POST["jumlah_kunjungan_kuliner"]) && isset($_POST["tanggal_mulai"]) && isset($_POST["total_bayar"]))) {
                                     echo $_POST["jumlah_anggota"];
                                } else {
                                    echo "tidak ada data";
                                }
                                     ?> Anggota
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                    Jumlah Hari
                                </div>
                                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                <?php if((isset($_POST["nama"]) && isset($_POST["jumlah_anggota"]) && isset($_POST["jumlah_hari"]) && isset($_POST["jumlah_kunjungan_kuliner"]) && isset($_POST["tanggal_mulai"]) && isset($_POST["total_bayar"]))) {
                                     echo $_POST["jumlah_hari"];
                                } else {
                                    echo "tidak ada data";
                                }
                                     ?> Hari
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                   Jumlah Kunjungan Kuliner 
                                </div>
                                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                <?php if(isset($_POST["nama"]) && isset($_POST["jumlah_anggota"]) && isset($_POST["jumlah_hari"]) && isset($_POST["jumlah_kunjungan_kuliner"]) && isset($_POST["tanggal_mulai"]) && isset($_POST["total_bayar"])) {
                                     echo $_POST["jumlah_kunjungan_kuliner"];
                                } else {
                                    echo "tidak ada data";
                                }
                                     ?> Kunjungan
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                 Tanggal Mulai   
                                </div>
                                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                <?php if(isset($_POST["nama"]) && isset($_POST["jumlah_anggota"]) && isset($_POST["jumlah_hari"]) && isset($_POST["jumlah_kunjungan_kuliner"]) && isset($_POST["tanggal_mulai"]) && isset($_POST["total_bayar"])) {
                                     echo $_POST["tanggal_mulai"];
                                } else {
                                    echo "tidak ada data";
                                }
                                     ?>
                                 </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                    Total Bayar
                                </div>
                                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                <?php if($_POST["total_bayar"] !== null) {
                                    echo "$" . $_POST["total_bayar"];
                                } else {
                                    echo "tidak ada data";
                                }
                                     ?>
                                </div>
                            </div>
                            <div class="grid grid-cols-3">
                            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                            <?php
include 'db_connection.php';

// Memeriksa apakah data telah dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memeriksa apakah semua input telah terisi dengan benar
    if (isset($_POST["nama"]) && 
    isset($_POST["jumlah_anggota"]) && 
    isset($_POST["jumlah_hari"]) && 
    isset($_POST["jumlah_kunjungan_kuliner"]) && 
    isset($_POST["tanggal_mulai"]) && 
    isset($_POST["total_bayar"]) && 
    $_POST["total_bayar"] != 0 && 
    $_POST["tanggal_mulai"] != '0000-00-00' &&
    $_POST["jumlah_anggota"] != 0) {
        
        // Mengambil nilai dari formulir
        $nama = $_POST["nama"];
        $jumlah_anggota = $_POST["jumlah_anggota"];
        $jumlah_hari = $_POST["jumlah_hari"];
        $jumlah_kunjungan_kuliner = $_POST["jumlah_kunjungan_kuliner"];
        $tanggal_mulai = $_POST["tanggal_mulai"];
        $total_bayar = $_POST["total_bayar"];

        // Query SQL untuk menyimpan data ke dalam tabel database
        $sql = "INSERT INTO dashboard (nama, jumlah_anggota, jumlah_hari, jumlah_kunjungan_kuliner, tanggal_mulai, total_bayar) 
                VALUES ('$nama', '$jumlah_anggota', '$jumlah_hari', '$jumlah_kunjungan_kuliner', '$tanggal_mulai', '$total_bayar')";

        // Menjalankan query SQL
        if (mysqli_query($koneksi, $sql)) {
            echo "Data berhasil disimpan";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
        }
       
    } else {
        // Jika ada input yang kosong, tampilkan pesan error
        echo "Ada input yang kosong. Silakan lengkapi semua informasi.";
    }
} else {
    // Jika halaman ini diakses secara langsung tanpa mengirimkan data melalui formulir, tampilkan pesan error
    echo "Akses tidak sah.";
}

// Menutup koneksi database
mysqli_close($koneksi);
?>
</div>
<div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                    <a href="index.php">Kembali ke beranda</a>
                                </div>
                                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                    <a href="detail.php">pesan lagi</a>
                                </div>
                        </div>
                    </div>                        
                    </form>
                    </div>
                </div>
                

            </div>
        </div>        
    </div>
    <?php include 'includes/footer.php'; ?>