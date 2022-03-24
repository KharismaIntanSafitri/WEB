<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form tambah mahasiswa</title>
</head>
<body>
    <?php
        include 'koneksi.php';
        $id=$_GET['id'];
        $sql = "SELECT * FROM tbl_mhs where id_mhs=$id";
        $hasil = mysqli_query($koneksi, $sql);
        if (!$hasil){
            echo "query salah";
        }
    ?>

        <h1>EDIT DATA MAHASISWA</h1>
    
    <?php
        while ($row = mysqli_fetch_array($hasil))
        {
    ?>
        <form method ="post" action ="update.php">
            <input type="hidden" name="idmhs" value="<?php echo $row['id_mhs']?>">
            nama mahasiswa :<input type="text" name="nama_mhs" value="<?php echo $row['nama_mhs']?>"><br/>
            min mahasiswa :<input type="text" name="min_mhs" value="<?php echo $row['min_mhs']?>"><br/>
            alamat mahasiswa :<input type="text" name="alamat_mhs" value="<?php echo $row['alamat_mhs']?>"><br/>
            <button type=submit>update</button>
        </form>
    <?php 
        } 
    ?>
</body>
</html>