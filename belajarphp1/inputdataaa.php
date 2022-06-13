<?php

require_once "conn.php";

$sql = "INSERT INTO mahasiswaa VALUES
        ('No', 'NIM', 'nama', 'Jeniskelamin', 'Tempatlahir', 'Tanggallahir', 'Alamat',)
        ('4', '19280005', 'nabil', 'laki-laki', 'malang', '2000-02-01', 'Jl nangka',)";
        
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  $conn->close();
  ?>