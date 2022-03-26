<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <div>
        <h1>Data Nilai Mahasiswa</h1>
        <a href="create.php">Tambah Data</a>
        <br>
        <a href="print.php">Cetak Data</a>
        <br>
        <table border="1">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Uts</th>
                    <th>Uas</th>
                    <th>Tugas</th>
                    <th>Na</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $result = $model->tampil_data();
                    if (!empty($result)) {
                        foreach ($result as $data) : ?>
                <tr>
                    <td><?= $index++ ?></td>
                    <td><?= $data->nim ?></td>
                    <td><?= $data->nama ?></td>
                    <td><?= $data->uts ?></td>
                    <td><?= $data->uas ?></td>
                    <td><?= $data->tugas ?></td>
                    <td><?= $data->na ?></td>
                    <td><?= $data->status ?></td>
                    <td>
                        <a href="edit.php?nim=<?= $data->nim ?>" name="edit" id="edit">Edit</a>
                        <a href="process.php?nim=<?= $data->nim ?>" name="hapus" id="hapus">Delete</a>
                    </td>
                    </tr>
                    <?php endforeach;
                    }else{
                        ?>
                        <tr>
                            <td colspan="9">Belum ada data pada tabel nilai mahasiswa.</td>
                        </tr>
                            <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>