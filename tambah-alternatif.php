<?php
include "includes/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nm_alternatif = $_POST['nm_alternatif'];
    $id_alternatif = $_POST['id_alternatif'];

    // Validasi input agar tidak mengandung karakter berbahaya
    $nm_alternatif = mysqli_real_escape_string($koneksi, $nm_alternatif);
    $id_alternatif = mysqli_real_escape_string($koneksi, $id_alternatif);

    // Periksa apakah ID sudah terpakai
    $query_cek_id = mysqli_query($koneksi, "SELECT * FROM alternatif WHERE id_alternatif = '$id_alternatif'");
    $jumlah_id = mysqli_num_rows($query_cek_id);

    if ($jumlah_id > 0) {
        echo "ID sudah terpakai. Silakan gunakan ID yang lain.";
    } else {
        // Query tambah data
        $query_tambah = mysqli_query($koneksi, "INSERT INTO alternatif (nm_alternatif, id_alternatif) VALUES ('$nm_alternatif', '$id_alternatif')");

        if ($query_tambah) {
            header("Location: alternatif.php");
        } else {
            echo "Gagal menambah data. Silakan coba lagi.";
        }
    }
}

include "header.php";
?>

<!-- Form tambah data -->
<div class="container">
    <form method="post" action="">
        <div class="form-group">
            <label for="nm_alternatif">Nama Alternatif:</label>
            <input type="text" class="form-control" id="nm_alternatif" name="nm_alternatif" required>
        </div>
        <div class="form-group">
            <label for="id_alternatif">ID Alternatif:</label>
            <input type="text" class="form-control" id="id_alternatif" name="id_alternatif" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<?php
include "footer.php";
?>
