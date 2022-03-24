<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data mahasiswa abel</title>
</head>
<body>
    <h1>TABEL DATA MAHASISWA</h1>
    <a href="form_mhs.php">tambah data</a>
    <table width=99% border="1" cellspacing="1">
        <tr>
            <td>ID MHS</td>
            <td>NAMA MHS</td>
            <td>MIN MHS</td>
            <td>ALAMAT MHS</td>
        </tr>

        <>
            <?php
            include 'koneksi.php';
            $sql = "SELECT * FROM tbl_mhs";
            $hasil = mysqli_query ($koneksi, $sql);
            while($row = mysqli_fetch_array($hasil))
            {
            ?>
            <tr>
                <td><?php echo $row['id_mhs'];?></td>
                <td><?php echo $row['nama_mhs'];?></td>
                <td><?php echo $row["min_mhs"];?></td>
                <td><?php echo $row["alamat_mhs"];?></td>
                <td>
                    <a href="edit_mhs.php?id=<?= $row["id_mhs"]?>">Edit</a> | 
                    <a href="hapus.php?id=<?= $row["id_mhs"]?>">Hapus</a>
                </td>
            </tr>
            <?php } 
            ?>

            
        
    </table>
</body>
</html>
