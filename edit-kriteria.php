<?php
include "includes/config.php";

if(isset($_GET['id'])) {
    $id_kriteria = $_GET['id'];

    // Validasi $id_kriteria agar tidak mengandung karakter berbahaya
    $id_kriteria = mysqli_real_escape_string($koneksi, $id_kriteria);

    // Query ambil data
    $query_edit = mysqli_query($koneksi, "SELECT * FROM kriteria WHERE id_kriteria = '$id_kriteria'");
    $data = mysqli_fetch_assoc($query_edit);

    if(!$data) {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "Akses tidak sah.";
    exit;
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nm_kriteria = $_POST['nm_kriteria'];

    // Validasi input agar tidak mengandung karakter berbahaya
    $nm_kriteria = mysqli_real_escape_string($koneksi, $nm_kriteria);

    // Query update data
    $query_update = mysqli_query($koneksi, "UPDATE kriteria SET nm_kriteria = '$nm_kriteria' WHERE id_kriteria = '$id_kriteria'");

    if($query_update) {
        header("Location: kriteria.php");
    } else {
        echo "Gagal mengupdate data. Silakan coba lagi.";
    }
}

include "header.php";
?>

<!-- Form edit data -->
<div class="container">
    <form method="post" action="">
        <div class="form-group">
            <label for="nm_kriteria">Nama Kriteria:</label>
            <input type="text" class="form-control" id="nm_kriteria" name="nm_kriteria" value="<?php echo $data['nm_kriteria']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<?php  
include "footer.php";
?>
