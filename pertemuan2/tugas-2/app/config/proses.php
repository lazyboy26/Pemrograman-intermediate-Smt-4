<?php

include 'model.php';

// Insert Data
if (isset($_POST['submitInsert'])) {
    $judul = $_POST['judul'];
    $subjudul = $_POST['subjudul'];
    $deskripsi = $_POST['deskripsi'];
    $tgl = $_POST['tgl'];
    $durasi = $_POST['durasi'];
    $negara = $_POST['negara'];
    $rating = $_POST['rating'];
    $kd_genre = $_POST['kd_genre'];
    $gambar = $_FILES['poster']['name'];

    $model = new Model();
    $model->insert($kd_genre, $judul, $subjudul, $deskripsi, $tgl, $durasi, $negara, $rating, $gambar);
    echo "<script>
    confirm('Data Berhasil Ditambahkan!');
    document.location='/index.php';
    window.close()
    </script>";
}

// Insert genre
if (isset($_POST['submitGenre'])) {
    $judul_genre = $_POST['judul_genre'];

    $model = new Model();
    $model->insertGenre($judul_genre);
    echo "<script>
    confirm('Data Berhasil Ditambahkan!');
    document.location='../view/insert.php';
    </script>";
}

// Edit data
if (isset($_POST['submitEdit'])) {
    $judul = $_POST['judul'];
    $subjudul = $_POST['subjudul'];
    $deskripsi = $_POST['deskripsi'];
    $kd_genre = $_POST['kd_genre'];
    $tgl = $_POST['tgl'];
    $durasi = $_POST['durasi'];
    $negara = $_POST['negara'];
    $rating = $_POST['rating'];
    $gambar = $_POST['gambarlama'];
    $id = $_POST['id'];
    $model = new Model();
    $model->update($id, $judul, $subjudul, $deskripsi, $kd_genre, $tgl, $durasi, $negara, $rating, $gambar);

    echo "<script>
    confirm('Data Berhasil Diedit!');
    document.location='/index.php';
    window.close()</script>";
}
// Delete Data
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $model = new Model();
    $model->delete($id);
    echo "<script language = 'Javascript'>
    confirm('Data Berhasil Dihapus!');
    document.location='/index.php';
    </script>";
}
