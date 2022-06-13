<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mahasiswaa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Can't Connect The Server. Error : ".$conn->connect_error);
}