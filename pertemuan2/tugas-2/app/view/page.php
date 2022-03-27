<?php
include 'head.php';

include '../config/model.php';
$model = new Model();
?>
<div class="container">
    <h1>Daftar Film</h1>
    <div class="row wrapper-cards">
        <?php
        $result = $model->tampil_data();
        if (!empty($result)) {
            foreach ($result as $data) : ?>
                <div class="col-lg-2 col-md-4 col-sm-2 cards-space">
                    <div class="cards card">
                        <a data-bs-toggle="modal" href="#Modal" role="button">
                            <img src="../template/img/<?= $data->gambar ?>" class="card-img-top card-img" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title product-judul"></h5>
                            <div class="info">
                                <p class="stok-product"><?= $data->judul_film ?> <?= $data->subjudul ?></p>
                            </div>
                            <br>
                            <a class="btn btn-primary detail" data-bs-toggle="modal" href="#Modal" role="button">Details</a>

                        </div>
                    </div>
                </div>
        <?php endforeach;
        }
        ?>
    </div>
    <!-- 
    <div class="modal fade" id="Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Detail Film</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-9">
                                    <h3><?= $data->judul_film ?> <?= $data->subjudul ?></h3>
                                    <div class="row">
                                        <div class="col-8 col-sm-5">
                                            <img src="../template/img/<?= $data->gambar ?>" class="card-img-top card-img" alt="...">

                                        </div>
                                        <div class="col-6 col-sm-7">
                                            <table>
                                                <tr>
                                                    <td colspan="2">Judul Film</td>
                                                    <td>:</td>
                                                    <td><?= $data->judul_film ?> <?= $data->subjudul ?></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Deskripsi</td>
                                                    <td>:</td>
                                                    <td><?= $data->deskripsi ?></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Genre</td>
                                                    <td>:</td>
                                                    <td><?= $data->genre ?></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Tanggal Rilis</td>
                                                    <td>:</td>

                                                    <td><?= $data->tgl_rilis ?></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Durasi</td>
                                                    <td>:</td>
                                                    <td><?= $data->durasi ?> Menit</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Negara</td>
                                                    <td>:</td>
                                                    <td><?= $data->negara ?></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Rating</td>
                                                    <td>:</td>
                                                    <td><?= $data->rating ?></td>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div> -->
    <?php

    include 'footer.php';

    ?>