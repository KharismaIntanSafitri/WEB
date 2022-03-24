<?php
$host = "localhost";
$user = "root";
$password ="";
$dbname = "web";

$koneksi = mysqli_connect($host,$user,$password,$dbname);
if (!$koneksi){
    echo "koneksi gagal";
}else{
    echo "koneksi berhasil"; 
}

?>