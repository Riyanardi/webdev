<?php

//  step 1
if (isset($_GET['no'])){
    $no = $_GET['no'];

    //echo $no;

    require_once "conn.php";
    // tampil data semua
    $sql = " SELECT * FROM mahasiswaa WHERE no=".$no;
   
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    //var_dump($result->fetch_assoc());

    //echo $row['nim'];
}
?>

<!-- end step 1 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input data</title>
</head>
<body>
    <h1>input data</h1>
    <form action="updatedata.php" method="post">
        <!-- <label>no</label><br>
        <input type="text" name="no"><br> -->
        <label>nim</label><br>
        <input type="text" name="nim" value="<?= $row['nim']; ?>"><br>
        <label>nama</label><br>
        <input type="text" name="nama" value="<?= $row['nama']; ?>"><br>
        <label>jelis kelamin</label><br>
        <select name="jeniskelamin">
            <option value="0">pilih</option>
            <option value="perempuan">perempuan</option>
            <option value="laki-laki">laki-laki</option>
        </select><br>
        <label>tempat lahir</label><br>
        <input type="text" name="tempatlahir" value="<?= $row['tempatlahir']; ?>"><br>
        <label>tanggal lahir</label><br>
        <input type="text" name="tanggallahir" value="<?= $row['tanggallahir']; ?>"><br>
        <label>alamat</label><br>
        <textarea name="alamat"><?= $row['alamat']; ?></textarea><br>
        <input type="submit" name="input" value="update">
        <input type="hidden" name="no" value="<?= $row['no']; ?>">
        
    </form>
</body>
</html>