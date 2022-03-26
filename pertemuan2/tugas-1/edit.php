<?php
$id = $_GET['nim'];
include 'model.php';
$model = new Model();
$data = $model->edit($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Nilai Mahasiswa</title>
</head>
<body>
    <h1>Edit Nilai Mahasiswa</h1>
    <a href="index.php">Kembali</a>
    <br>
    <form action="process.php" method="POST">
        <label for="nim">Nim</label>
        <input type="text" name="nim" value="<?= $data->nim ?>">
        <br>
        <label for="nama">Nama</label>
        <input type="text" name="nama" value="<?= $data->nama ?>">
        <br>
        <label for="uts">Uts</label>
        <input type="text" name="uts" value="<?= $data->uts ?>">
        <br>
        <label for="tugas">Tugas</label>
        <input type="text" name="tugas" value="<?= $data->tugas ?>">
        <br>
        <label for="uas">Uas</label>
        <input type="text" name="uas" value="<?= $data->uas ?>">
        <br>
        <button type="submit" name="submit_edit">Submit</button>
    </form>
</body>
</html>