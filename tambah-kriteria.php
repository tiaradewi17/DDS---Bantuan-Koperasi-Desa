<?php
include "includes/config.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nm_kriteria = $_POST['nm_kriteria'];

    // Validasi input agar tidak mengandung karakter berbahaya
    $nm_kriteria = mysqli_real_escape_string($koneksi, $nm_kriteria);

    // Query tambah data
    $query_tambah = mysqli_query($koneksi, "INSERT INTO kriteria (nm_kriteria) VALUES ('$nm_kriteria')");

    if($query_tambah) {
        header("Location: kriteria.php");
    } else {
        echo "Gagal menambah data. Silakan coba lagi.";
    }
}

include "header.php";
?>

<!-- Form tambah data -->
<div class="container">
    <form method="post" action="">
        <div class="form-group">
            <label for="nm_kriteria">Nama Kriteria:</label>
            <input type="text" class="form-control" id="nm_kriteria" name="nm_kriteria" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<?php  
include "footer.php";
?>
