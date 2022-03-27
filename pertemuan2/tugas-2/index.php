<?php
include './app/view/head.php';
$no = 1;

include './app/config/model.php';
$model = new Model();
?>

<div class="container">
    <h1>Panel Admin Stream Film</h1>
    <hr>
    <a href="./app/view/insert.php" target="_blank" class="btn btn-primary btn-sm mb-3">Tambah Data Film</a>
    <a href="./app/view/page.php" target="_blank" class="btn btn-primary btn-sm mb-3">Pergi Ke Web</a>
    <a href="" target="_blank" class="btn btn-secondary btn-sm mb-3" onclick="window.location.reload()">Refresh</a>
    <table class="table-dark table table-striped table-hover table-bordered">
        <tr>
            <th>No.</th>
            <th>Judul</th>
            <th>Sub Judul</th>
            <th>Deskripsi</th>
            <th>Genre</th>
            <th>Tanggal Rilis</th>
            <th>Durasi</th>
            <th>Negara</th>
            <th>Rating</th>
            <th>Gambar</th>
            <th class="text-center">Aksi</th>
        </tr>
        <?php
        $result = $model->tampil_data();
        if (!empty($result)) {
            foreach ($result as $data) : ?>
                <tr class="table-light">
                    <td><?= $no++ ?></td>
                    <td><?= $data->judul_film ?></td>
                    <td><?= $data->subjudul ?></td>
                    <td><?= $data->deskripsi ?></td>
                    <td><?= $data->genre ?></td>
                    <td><?= $data->tgl_rilis ?></td>
                    <td><?= $data->durasi ?> Menit</td>
                    <td><?= $data->negara ?></td>
                    <td><?= $data->rating ?></td>
                    <td><img style="width: 100px;" src="./app/template/img/<?= $data->gambar ?>" alt=""></td>
                    <td class="text-center">
                        <a href="./app/view/edit.php?id=<?=$data->id_film?>" name="edit" target="_blank" class="btn btn-warning">Edit Data</a> |
                        <a href="./app/config/proses.php?id=<?= $data->id_film ?>" name="delete" class="btn btn-danger">Delete Data</a> 
                    </td>
                </tr>
            <?php endforeach;
        } else {
            ?>
            <tr>
                <td colspan="11">Belum ada data.</td>
            </tr>
        <?php } ?>
    </table>
</div>
<?php
include './app/view/footer.php';
?>