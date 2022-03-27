<?php
include 'head.php';
$id = $_GET['id'];
include '../config/model.php';
$model = new Model();
$data = $model->edit($id);
?>

<div class="container">
    <div class="position-absolute top-50 start-50 translate-middle">
        <h1 class="text-center edit-data">Edit Data Film</h1>
        <form action="../config/proses.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <input type="hidden" value="<?= $data->id_film ?>" name="id">
                    <td><label for="judul">Judul Film</label></td>
                    <td><label for="judul">:</label></td>
                    <td><input type="text" name="judul" class="form-control mb-2" value="<?= $data->judul_film ?>"></td>
                </tr>
                <tr>
                    <td><label for="subjudul">Sub Judul Film</label></td>
                    <td><label for="subjudul">:</label></td>
                    <td><input type="text" name="subjudul" class="form-control mb-2" value="<?= $data->subjudul ?>"></td>
                </tr>
                <tr>
                    <td><label for="deskripsi">Deskripsi</label></td>
                    <td><label for="deskripsi">:</label></td>
                    <td><textarea name="deskripsi" id="" cols="45" rows="1" class="form-control mb-2" value="<?= $data->deskripsi ?>"><?= $data->deskripsi ?> </textarea>
                </tr>
                <tr>
                    <td><label for="genre">Genre</label></td>
                    <td><label for="genre">:</label></td>
                    <td>
                        <select class="form-select mb-2" id="kd_genre" name="kd_genre">
                            <option value="<?= $data->kd_genre ?>"><?= $data->genre ?></option>
                            <?php
                            $result = $model->get_genre();
                            foreach ($result as $genre) : ?>
                                <option value="<?= $genre->id_genre ?>"><?= $genre->genre ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="tgl">Tanggal Rilis</label></td>
                    <td><label for="tgl">:</label></td>
                    <td>
                        <select class="form-select mb-2" id="tgl" name="tgl">
                            <option>Select Year</option>
                            <?php
                            $years = range(1900, date("Y", time()));
                            foreach ($years as $year) : ?>
                                <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="durasi">Durasi</label></td>
                    <td><label for="durasi">:</label></td>
                    <td><input type="number" name="durasi" class="form-control mb-2" value="<?= $data->durasi ?>"></td>
                </tr>
                <tr>
                    <td><label for="negara">Negara</label></td>
                    <td><label for="negara">:</label></td>
                    <td><input type="text" name="negara" class="form-control mb-2" value="<?= $data->negara ?>"></td>
                </tr>
                <tr>
                    <td><label for="rating">Rating</label></td>
                    <td><label for="rating">:</label></td>
                    <td><input type="number" name="rating" class="form-control mb-2" value="<?= $data->rating ?>"></td>
                </tr>
                <tr>
                    <td><label for="poster">Poster</label></td>
                    <td><label for="poster">:</label></td>
                    <td><img style="width: 100px; padding:0px;" src="../template/img/<?= $data->gambar ?>" alt=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="file" name="poster" class="form-control mb-2" value="<?= $data->gambar ?>"></td>
                    <input type="hidden" name="gambarlama" value="<?php echo $data->gambar ?>">
                </tr>

            </table>
            <button type='submit' class="btn btn-success btn-sm" name='submitEdit'>Submit</button>
            <a class="btn btn-info btn-sm" onclick="window.close()">Back</a>
            <script>
                function close_window() {
                    if (confirm("Close Window?")) {
                        close();
                    }
                }
            </script>

        </form>
    </div>
</div>

<?php
include 'footer.php'
?>