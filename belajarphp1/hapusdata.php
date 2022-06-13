<?php
if (isset($_GET['no'])){
    $no = $_GET['no'];

    require_once "conn.php";

    // delete data
    $sql = "DELETE FROM mahasiswaa WHERE no=$no";
   
    if ($conn->query($sql) === TRUE) {
        echo "Record data deleted Successfully";
    } else {
        echo "error ". $sql . "<br>" . $conn->error;
    }

   
}


