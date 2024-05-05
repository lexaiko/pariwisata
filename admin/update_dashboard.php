<?php
include '../db_connection.php';

// Menangkap data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$jumlah_anggota = $_POST['jumlah_anggota'];
$jumlah_hari = $_POST['jumlah_hari'];
$jumlah_kunjungan_kuliner = $_POST['jumlah_kunjungan_kuliner'];
$tanggal_mulai = $_POST['tanggal_mulai'];
$total_bayar = $_POST['total_bayar'];

// Update data pemesanan berdasarkan ID
$sql = "UPDATE dashboard SET nama='$nama', jumlah_anggota='$jumlah_anggota', jumlah_hari='$jumlah_hari', jumlah_kunjungan_kuliner='$jumlah_kunjungan_kuliner' , tanggal_mulai='$tanggal_mulai' , total_bayar='$total_bayar' WHERE id=$id";

//debugging data
// echo $id;
// echo $nama;
// echo $jumlah_anggota;
// echo $jumlah_hari;
// echo $jumlah_kunjungan_kuliner;
// echo $tanggal_mulai;
// echo $total_bayar;

if (mysqli_query($koneksi, $sql)) {
    // Jika berhasil menyimpan data, arahkan kembali ke halaman detail-pemesanan.php
    header("Location: index.php");
    exit(); // Pastikan tidak ada output lain setelah header() untuk menghindari kesalahan
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

// Menutup koneksi database
mysqli_close($koneksi);
?>