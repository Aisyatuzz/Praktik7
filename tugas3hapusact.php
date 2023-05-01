<?php
include 'tugas3koneksi.php';

//Mengambil data yang dikirim user
$id = $_POST['id'];

//Delete data yang ada pada database
mysqli_query($koneksi, "DELETE FROM `data_pegawai` WHERE `data_pegawai`.`id` = $id");

//Kembali ke halaman utama
header("location: tugas3index.php");
?>