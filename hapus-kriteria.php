<?php
include "includes/config.php";

if(isset($_GET['id'])) {
    $id_kriteria = $_GET['id'];

    // Validasi $id_kriteria agar tidak mengandung karakter berbahaya
    $id_kriteria = mysqli_real_escape_string($koneksi, $id_kriteria);

    // Query hapus data
    $query_hapus = mysqli_query($koneksi, "DELETE FROM kriteria WHERE id_kriteria = '$id_kriteria'");

    if($query_hapus) {
        header("Location: kriteria.php");
    } else {
        echo "Gagal menghapus data. Silakan coba lagi.";
    }
} else {
    echo "Akses tidak sah.";
}
?>
