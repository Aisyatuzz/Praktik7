<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "myDB"; 

// Buat koneksi 
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
	die("Connection failed: ".mysqli_connect_error()); 
}

// Membuat tabel liga pada database myDB
$sql = "CREATE TABLE liga (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
kode VARCHAR(3) NOT NULL,
negara VARCHAR(30) NOT NULL,
champion int(3))";

if (mysqli_query($conn, $sql)) {
	echo "New record created successfully"; 
} else {
	echo "Error: ". $sql. "<br>" . mysqli_error($conn); 
}

mysqli_close($conn); 
?>