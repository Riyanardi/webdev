<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman proses</title>
</head>
<body>
<?php

// simpan nilai

function is_valid_password($password) {
    return preg_match_all('$S*(?=S{8,})(?=S*[a-z])(?=S*[A-Z])(?=S*[d])(?=S*[W])S*$', $password) ? TRUE : FALSE;
}

$username = $_POST['username'];
$password = $_POST['password'];

// tampilan nilai
?>

<?php
if ($_POST['submit'] == 'kirim') {

if (empty($username)) {
    echo "username tidak diisi.";
    return false;
}

if (empty($password)) {
    echo "password tidak diisi.";
    return false;
} 

if (is_valid_password($username) == FALSE) {
    echo "kombinasi password salah";
    return;
}

if ($username == "admin" && $password == 'Abc123?') {
    echo "selamat datang dihalaman utama. <br/> berikut adalah data anda :<br/>";
    echo "username : ".$username;
    echo "<br/>";
    echo "password :".$password;
    
} else {
    echo "anda tidak dapat mengakses halaman utama";
}




} else {
    echo "halaman tidak dapat diakses";
}
?>

<?php
// menampilkan hasil gambar
/*
$size = getimagesize($_FILES['file']['tmp_name']); //get size

$image = "data:" . $size['mime'] . ";base64," .
        base64_encode(file_get_contents($_FILES['file']['tmp_name'])); // get image
echo '<img src="'.$image.'" width="720px" />';
*/
?>
</body>
</html>


