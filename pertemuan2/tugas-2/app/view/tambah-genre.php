<?php
include 'head.php';
include '../config/model.php';
$model = new Model();
?>

<div class="container">
    <div class="position-absolute position-absolute top-50 start-50 translate-middle">
        <h1 class="text-centerinsert-data">Tambah Data Genre</h1>
        <form action="../config/proses.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td><label for="judul_genre">Genre</label></td>
                    <td><label for="judul_genre">:</label></td>
                    <td><input type="text" name="judul_genre" class="form-control mb-2"></td>
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