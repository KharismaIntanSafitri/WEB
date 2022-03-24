<?php
include "koneksi.php";

$nama = $_POST ["nama_mhs"];
$min = $_POST ["min_mhs"];
$alamat = $_POST ["alamat_mhs"];

$sql = "INSERT INTO tbl_mhs VALUES (null,'$nama','$min','$alamat')";
$hasil = mysqli_query ($koneksi, $sql);
if ($hasil){
    echo "<a href = 'data_mhs.php'Show data</a>";
}else{
    echo "gagal";
    
}
?>