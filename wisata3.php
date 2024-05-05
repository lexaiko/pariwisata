<?php include 'includes/header.php'; ?>

    <!-- {{-- Navbar end --}}
    {{-- background top --}} -->
    <img src="img/herosection.png" alt="" class="absolute inset-0 w-full h-1/2 object-cover -z-50 rounded-b-lg">
    <!-- {{-- end of background top --}} -->

    <div class="container mx-auto px-[100px]">


        <!-- {{-- text tour start --}} -->
        <div class="teks mt-[450px] mb-[50px]" id="services">
            <p class="text-gray-500 text-xl">Best Prices</p>
            <div class="bungkus grid grid-cols-2 gap-4 mt-3">
                <div class="kiri col-span-1">
                    <h1 class="text-gray-800 text-4xl font-semibold">Rincian Pembayaran</h1>
                </div>
                <div class="kanan col-span-1">
                    <p class="text-gray-500 text-xl px-8"></p>
                </div>
            </div>
        </div>
        <!-- <! {{-- text tour end --}} -->
        <div class="bigcard grid justify-center">
            <img src="img/pinus.jpg" alt="" class="w-[1300px] h-[500px] rounded-lg">
            <div class="rincian block">
                <div class="relative overflow-x-auto">
                    <div class="w-full bg-gray-50 dark:bg-gray-700">
                        <div class="text-xs text-gray-700 uppercase dark:text-gray-400 grid grid-cols-3">
                            <div class="px-6 py-3 border-b border-gray-200 dark:border-gray-700 sticky top-0">
                                Nama
                            </div>
                            <div class="px-6 py-3 border-b border-gray-200 dark:border-gray-700">
                                Quantity
                            </div>
                            <div class="px-6 py-3 border-b border-gray-200 dark:border-gray-700">
                                Total Price
                            </div>
                        </div>
                        <div class="bg-white dark:bg-gray-800">
                            <div class="grid grid-cols-3">

                                <div
                                    class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                    Jumlah anggota
                                </div>
                                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                    <form action="proses_pemesanan.php" method="POST">
                                        <input type="hidden" name="nama" value="Pinus Camp">
                                        <select id="input1" name="jumlah_anggota" class="border-none appearance-none"
                                            onchange="calculateTotal()">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>


                                </div>
                                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                    <p id="anggota">$ 0</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-3">

                                <div
                                    class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                    Jumlah Hari Tour
                                </div>
                                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                    <select id="input2" name="jumlah_hari" class="border-none appearance-none"
                                        onchange="calculateTotal()">
                                        <option value="2">2</option>
                                        <option value="4">4</option>
                                        <option value="6">6</option>
                                    </select>
                                </div>
                                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                    <p id="hari">$ 100</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-3">

                                <div
                                    class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                    Jumlah Kunjungan Kuliner
                                </div>
                                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                    <select id="input3" name="jumlah_kunjungan_kuliner"
                                        class="border-none appearance-none" onchange="calculateTotal()">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                    </select>
                                </div>
                                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                    <p id="kuliner">$ 25</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-3">

                                <div
                                    class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                    Tanggal Mulai
                                </div>
                                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                    <input class="p-0 border-none" type="date" name="tanggal_mulai" value="">
                                </div>
                                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">

                                </div>
                            </div>
                            <div class="grid grid-cols-3">

                                <div
                                    class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">

                                </div>
                                <div
                                    class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">
                                    Total Biaya
                                </div>
                                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                    <div>
                                        <span>$</span> <!-- Menampilkan simbol dolar -->
                                        <input type="text" class="border-none appearance-none" id="totalBill"
                                            name="total_bayar" value="" readonly> <!-- Input untuk angka -->
                                    </div>

                                </div>
                            </div>
                            <div class="grid grid-cols-3">

                                <div
                                    class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-medium text-gray-900 dark:text-white">

                                </div>
                                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                    <button type="submit"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                                        Submit
                                    </button>
                                </div>
                                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                </div>
                            </div>

                        </div>

                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <script>
        // Ambil elemen select
        var input1 = document.getElementById('input1');
        var input2 = document.getElementById('input2');
        var input3 = document.getElementById('input3');

        // Tambahkan event listener untuk setiap select
        input1.addEventListener('input', calculateTotal);
        input2.addEventListener('input', calculateTotal);
        input3.addEventListener('input', calculateTotal);

        function calculateTotal() {
            // Ambil nilai dari setiap input
            var val1 = parseFloat(input1.value) || 0;
            var val2 = parseFloat(input2.value) || 0;
            var val3 = parseFloat(input3.value) || 0;

            // Hitung total

            var anggota = val1 * 50; // Misalkan harga per anggota adalah $50
            var hari = val2 * 50; // Misalkan harga per anggota adalah $50
            var kuliner = val3 * 25; // Misalkan harga per anggota adalah $50
            var total = anggota + hari + kuliner;

            // Tampilkan total
            document.getElementById('totalBill').value = total;
            document.getElementById('hari').textContent = "$" + hari;
            document.getElementById('kuliner').textContent = "$" + kuliner;
            document.getElementById('anggota').textContent = "$" + anggota;
        }
    </script>

<?php include 'includes/footer.php'; ?>