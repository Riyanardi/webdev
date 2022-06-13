<?php

require_once "conn.php";

if ($_POST['input'] == "update") {

    $no = $_POST['no'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $tempatlahir = $_POST['tempatlahir'];
    $tanggallahir = $_POST['tanggallahir'];
    $alamat = $_POST['alamat'];

    //var_dump($_POST);


    $sql = "UPDATE mahasiswaa SET 
    no = '$no',
    nama = '$nama',
    jeniskelamin= '$jeniskelamin',
    tempatlahir = '$tempatlahir',
    tanggallahir = '$tanggallahir',
    alamat = '$alamat'
    WHERE no=$no";

    if ($conn->query($sql) === TRUE) {
        echo "Record UPDATED Successfully";
    } else {
        echo "error ". $sql . "<br>" . $conn->error;
    }
}