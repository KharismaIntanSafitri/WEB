<?php
include "koneksi.php";
$id =$_POST ["idmhs"];
$nama =$_POST ["nama_mhs"];
$min =$_POST ["min_mhs"];
$alamat =$_POST ["alamat_mhs"];

$sql = "UPDATE tbl_mhs set nama_mhs='$nama',min_mhs='$min', alamat_mhs='$alamat' where id_mhs=$id";
$hasil = mysqli_query ($koneksi, $sql);
if ($hasil){
    echo "<a href = 'data_mhs.php'Show data</a>";
}else{
    echo "gagal";
    
}
?>