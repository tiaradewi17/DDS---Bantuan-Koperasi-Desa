<?php
include "header.php";
include "includes/config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM alternatif WHERE id_alternatif='$id'");
    $data = mysqli_fetch_array($query);
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nm_alternatif = $_POST['nm_alternatif'];

    $update = mysqli_query($koneksi, "UPDATE alternatif SET nm_alternatif='$nm_alternatif' WHERE id_alternatif='$id'");

    if ($update) {
        header("location: alternatif.php");
    } else {
        echo mysqli_error($koneksi);
    }
}
?>

<br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4>Edit Data Alternatif</h4>
            <form method="post" action="">
                <input type="hidden" name="id" value="<?php echo $data['id_alternatif']; ?>">
                <div class="form-group">
                    <label for="nm_alternatif">Nama Alternatif:</label>
                    <input type="text" class="form-control" id="nm_alternatif" name="nm_alternatif" value="<?php echo $data['nm_alternatif']; ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="update">Update</button>
            </form>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>
