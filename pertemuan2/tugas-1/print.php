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
    <title>Cetak Data</title>
    <style>
        h1{ text-align: center; }

        table,td,th{
            border: 1px solid #ddd;
            text-align: left;
        }

        table{
            border-collapse: collapse;
            width: 100%;
        }

        th,td{ padding:15px; }
    </style>
</head>
<body>
    <h1>Laporan Data Nilai Mahasiswa</h1>
    <table>
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
            </tr>
        </thead>
        <tbody>
            <?php
                $result = $model->tampil_data();
                if (!empty($result)) {
                    foreach ($result as $data) :
            ?>
            <tr>
                <td><?= $index++ ?></td>
                <td><?= $data->nim ?></td>
                <td><?= $data->nama ?></td>
                <td><?= $data->uts ?></td>
                <td><?= $data->uas ?></td>
                <td><?= $data->tugas ?></td>
                <td><?= $data->na ?></td>
                <td><?= $data->status ?></td>
            </tr>
            <?php endforeach ;
                }else{ ?>
            <tr>
                <td colspan="9">Belum ada data pada tabel nilai mahasiswa.</td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>
</html>