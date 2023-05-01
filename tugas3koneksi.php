<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_pegawai");
if(!$koneksi){
    die("connection failed : " . mysqli_connect_error()); 
}
?>