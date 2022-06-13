<?php

require_once "conn.php";
/*
$sql = "INSERT INTO mahasiswaa VALUES(4,19280004,'bill','laki-aki','surabaya','01-02-2002','Jl.nangka No 5')";

*/

if ($_POST['input'] == "input") {
    //echo  $_POST['nim'];
   // require_once "conn.php";

    $sql = "INSERT INTO mahasiswaa VALUES(".$_POST['no'].",".$_POST['nim'].",'".$_POST['nama']."','".$_POST['jeniskelamin']."','".$_POST['tempatlahir']."','".$_POST['tanggallahir']."','".$_POST['alamat']."')";

    if ($conn->query($sql) === TRUE) {
        echo "new record data created successfully";
    } else {
        echo "error ". $sql . "<br>" . $conn->error;
    }
} else {
    echo "Restricted Area";
}