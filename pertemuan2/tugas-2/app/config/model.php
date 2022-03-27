<?php
include 'db.php';
class Model extends Connection
{
    // ambil koneksi
    public function __construct()
    {
        $this->conn = $this->get_conn();
    }

    //insert data
    public function insert($kd_genre, $judul, $subjudul, $deskripsi, $tgl, $durasi, $negara, $rating, $gambar)
    {
        $gambar = $this->upload($gambar);
        if (!$gambar) {
            return false;
        }

        $sql = "INSERT data_film(kd_genre,judul_film, subjudul, deskripsi, tgl_rilis, durasi, negara, rating, gambar) VALUES ('$kd_genre','$judul', '$subjudul', '$deskripsi', '$tgl', '$durasi', '$negara', '$rating','$gambar')";

        $this->conn->query($sql);
    }

    // gambar
    public function upload($judul)
    {

        $nama = $_FILES['poster']['name'];
        $tempat = $_FILES['poster']['tmp_name'];
        $error = $_FILES['poster']['error'];
        $size = $_FILES['poster']['size'];

        // apakah ada gambar yang diup

        if ($error == 4) {
            echo "
                    <script>alert('Silahkan Upload Gambar Terlebih Dahulu !')
                            document.location='../view/insert.php';
                    
                    </script>
            ";
            return false;
        }

        // Cek apakah bukan gambar yang diupload
        $ekstensivalid = ["jpeg", "jpg", "png"];
        $ekstensigambar = explode('.', $nama);
        $ekstensigambar = strtolower(end($ekstensigambar));

        // Cek apakah Gambar Yang diupload valid
        if (!in_array($ekstensigambar, $ekstensivalid)) {
            echo "
                    <script>alert('Yang Anda Upload Bukan Gambar !')</script>
            ";
            return false;
        }

        // Cek apakah size ukuran gambar yang diupload melebihi batas maksimal yaitu 2 mb
        if ($size > 3000000) {
            echo "
                    <script>alert('Ukuran Foto Anda Terlalu Besar (Max 3mb) ')</script>
            ";
            return false;
        }

        // Jika Lolos pengecekan maka gabar siap di up

        // mengganti nama gambar 
        $namabaru = time() . '-' . $judul  . '.' . $ekstensigambar;


        if (move_uploaded_file($tempat, '../template/img/' . $namabaru)) {
            return $namabaru;
        }
    }

    // insert genre
    public function insertGenre($judul_genre)
    {
        $sql = "INSERT genre(genre) VALUES ('$judul_genre')";

        $this->conn->query($sql);
    }

    // Tampilkan data
    public function tampil_data()
    {
        $sql = "SELECT data_film.*,genre.* FROM data_film INNER JOIN genre ON data_film.kd_genre = genre.id_genre";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }
    public function get_genre()
    {
        $sql = "SELECT * FROM genre";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }

    // edit data
    public function edit($id)
    {
        $sql = "SELECT data_film.*,genre.* FROM data_film INNER JOIN genre ON data_film.kd_genre = genre.id_genre WHERE data_film.id_film='$id'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }

    public function update($id, $judul, $subjudul, $deskripsi, $kd_genre, $tgl, $durasi, $negara, $rating, $gambar)
    {
        if ($_FILES['poster']['error'] === 4) {
            $gambarbaru = $gambar;
        } else {
            $gambarbaru = $this->upload($gambar);
        }
        $sql = "UPDATE data_film
        SET judul_film='$judul',
            subjudul='$subjudul',
            deskripsi='$deskripsi',
            kd_genre='$kd_genre',
            tgl_rilis='$tgl',
            durasi='$durasi',
            negara='$negara',
            rating='$rating',
            gambar='$gambarbaru' WHERE id_film='$id'";
        $this->conn->query($sql);
    }

    // delete data
    public function delete($id)
    {
        $sql = "DELETE FROM data_film WHERE id_film='$id'";
        $this->conn->query($sql);
    }
}