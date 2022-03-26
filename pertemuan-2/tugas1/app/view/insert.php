<?php
include 'head.php';
include '../config/model.php';
$model = new Model();
$data = $model->get_genre();
?>

<div class="container">
    <div class="position-absolute position-absolute top-50 start-50 translate-middle">
        <h1 class="text-center mt-3 insert-data">Masukkan Data Film</h1>
        <form action="../config/proses.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td><label for="judul">Judul Film</label></td>
                    <td><label for="judul">:</label></td>
                    <td><input type="text" name="judul" class="form-control mb-2"></td>
                </tr>
                <tr>
                    <td><label for="subjudul">Sub Judul Film</label></td>
                    <td><label for="subjudul">:</label></td>
                    <td><input type="text" name="subjudul" class="form-control mb-2"></td>
                </tr>
                <tr>
                    <td><label for="deskripsi">Deskripsi</label></td>
                    <td><label for="deskripsi">:</label></td>
                    <td><input type="text" name="deskripsi" class="form-control mb-2"></td>
                </tr>
                <tr>
                    <td><label for="genre">Genre</label></td>
                    <td><label for="genre">:</label></td>
                    <td>
                    <select class="form-select mb-2" id="kd_genre" name="kd_genre" >
                        <option>Select Genre</option>
                        <?php
                        foreach ($data as $genre) : ?>
                        <option value="<?php echo $genre->id_genre ?>"><?php echo $genre->genre ?></option>
                        <?php endforeach; ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><a href="tambah-genre.php" class="btn btn-primary btn insert-genre">Tambah Genre Film</a></td>
                </tr>
                <tr>
                    <td><label for="tgl">Tanggal Rilis</label></td>
                    <td><label for="tgl">:</label></td>
                    <td>
                    <select class="form-select mb-2" id="tgl" name="tgl" >
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
                    <td><label for="durasi">Durasi <br> <span style="color: red; font-size:small">*Masukkan Dalam Satuan Menit</span></label></td>
                    <td><label for="durasi">:</label></td>
                    <td><input type="number" name="durasi" class="form-control mb-2"></td>
                </tr>
                <tr>
                    <td><label for="negara">Negara</label></td>
                    <td><label for="negara">:</label></td>
                    <td><input type="text" name="negara" class="form-control mb-2"></td>
                </tr>
                <tr>
                    <td><label for="rating">Rating</label></td>
                    <td><label for="rating">:</label></td>
                    <td><input type="number" name="rating" class="form-control mb-2"></td>
                </tr>
                <tr>
                    <td><label for="poster">Poster</label></td>
                    <td><label for="poster">:</label></td>
                    <td><input type="file" name="poster" class="form-control mb-2"></td>
                </tr>

            </table>
            <button type='submit' class="btn btn-success btn-sm" name='submitInsert'>Submit</button>
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