<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Nilai</title>
</head>

<body>
    <h1>Tambah Data Nilai</h1>
    <a href="index.php">Kembali</a>

    <form action="process.php" method="post">
        <label for="nim">Nim</label>
        <input type="number" name="nim">
        <br>
        <label for="nama">Nama</label>
        <input type="text" name="nama">
        <br>
        <label for="uts">Uts</label>
        <input type="text" name="uts">
        <br>
        <label for="uas">Uas</label>
        <input type="text" name="uas">
        <br>
        <label for="tugas">Tugas</label>
        <input type="number" name="tugas">
        <br>
        <button type="submit" name="submit_simpan">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>

</html>