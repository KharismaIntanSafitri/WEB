<?php
include 'koneksi.php';

$id =$_GET["id"];
$sql = "DELETE FROM tbl_mhs WHERE id_mhs=$id";
$hasil = mysqli_query ($koneksi, $sql);
if (!$hasil){
    echo"gagal";
}else{
    echo "berhasil";
    echo "<a href = 'data_mhs.php'Show data</a>";
}
?>