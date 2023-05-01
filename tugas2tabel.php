<?php
$servername = "localhost";
$username= "root";
$password = "";
$dbname = "db_pegawai";

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Check connection
if(!$conn){
    die("connection failed : " . mysqli_connect_error());
}

//Create tabel data_pegawai
$sql = "CREATE TABLE data_pegawai(
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(200) NOT NULL,
    email VARCHAR(50) NOT NULL,
    alamat VARCHAR(200) NOT NULL,
    no_telp VARCHAR(20) NOT NULL)";

if(mysqli_query($conn, $sql)){
	echo "New record created successfully";
} else {
	echo "Error: ". $sql. "<br>" . mysqli_error($conn);
}

mysqli_close($conn)
?>