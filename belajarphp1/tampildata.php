<?php

require_once "conn.php";

// tampil data semua
$sql = " SELECT * FROM mahasiswaa";

// tampil data individu
//$sql = " SELECT * FROM mahasiswaa ORDER BY no ASC lIMIT 2";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo$row['no']." | ".$row['nim']." | ".$row['nama']." | ".$row['jeniskelamin']." | ".$row['tempatlahir']." | ".$row['tanggallahir']." | ".$row['alamat'];
        echo ' | <a href="editdata.php?no='.$row['no'].'">edit</a>';
        echo ' | <a href="hapusdata.php?no='.$row['no'].'">hapus</a>';
        echo "<br>";
    }
} else {
    echo "Result : 0"; 
}