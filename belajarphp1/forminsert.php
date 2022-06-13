<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form insert data</title>
</head>
<body>
    <h1>form insert data</h1>

    <form action="inputdataa.php" method="post">
        <p>no:</p>
        <input type="text" name="no">
        <br>

        <p>nim:</p>
        <input type="text" name="nim">
        <br>

        <p>nama:</p>
        <input type="text" name="nama">
        <br>

        <p>jenis kelamin:</p>
        <input type="radio" id="male" name="jeniskelamin" value="laki-laki">
        <label for="male">laki-laki</label>

        <input type="radio" id="female" name="jeniskelamin" value="perempuan">
        <label for="female">perempuan</label>
        <br>

        <p>tanggal lahir:</p>
        <input type="date" name="tanggllahir">
        <br>

        <p>tempat lahir:</p>
        <input type="text" name="tempatlahir">
        <br>

        <p>alamat:</p>
        <textarea name="alamat" id="" cols="30" rows="3"></textarea>
        <br>

        <input type="submit" value="simpan">
    </form>
</body>
</html>