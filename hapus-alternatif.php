<?php
include "includes/config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $hapus = mysqli_query($koneksi, "DELETE FROM alternatif WHERE id_alternatif='$id'");

    if ($hapus) {
        header("location: alternatif.php");
    } else {
        echo mysqli_error($koneksi);
    }
}
?>
