<?php
$servername = "localhost"; 
$username = "root";
$password = "kkkhansa"; 
$dbname = "experian";
 
// Create connection
$koneksi = mysqli_connect($servername, $username, $password, $dbname); 
// Check connection
if (!$koneksi) { 
    die("Connection failed: " . mysqli_connect_error());
}else{
	//echo "Koneksi berhasil";
} 
//mysqli_close($conn);
?> 