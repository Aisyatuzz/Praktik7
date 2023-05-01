<?php
include 'tugas3koneksi.php';

//Mengambil data yang dikirim user
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

//Input data ke database
mysqli_query($koneksi,"INSERT INTO `data_pegawai` (`id`, `nama`, `email`, `alamat`, `no_telp`) 
VALUES (NULL, '$nama', '$email', '$alamat', '$no_telp')");

//Kembali ke halaman awal
header("location:tugas3index.php");
?>