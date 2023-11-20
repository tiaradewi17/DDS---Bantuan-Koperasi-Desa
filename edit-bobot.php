<?php
include "header.php";
include "includes/config.php";

// Cek apakah parameter id ada
if (isset($_GET['id'])) {
    $id_bobot = $_GET['id'];

    // Query untuk mendapatkan data bobot berdasarkan id
    $query_edit = mysqli_query($koneksi, "SELECT * FROM bobot WHERE id_bobot = '$id_bobot'");
    $data_edit = mysqli_fetch_array($query_edit);
} else {
    // Jika parameter id tidak ada, arahkan pengguna kembali ke halaman bobot.php
    header("Location: bobot.php");
    exit();
}

// Proses form jika ada data yang disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Tangkap data yang di-submit
    $id_kriteria = $_POST['id_kriteria'];
    $value = $_POST['value'];

    // Query untuk melakukan update data bobot
    $query_update = mysqli_query($koneksi, "UPDATE bobot SET id_kriteria='$id_kriteria', value='$value' WHERE id_bobot='$id_bobot'");

    // Cek apakah query berhasil dijalankan
    if ($query_update) {
        // Redirect ke halaman bobot.php setelah berhasil diupdate
        header("Location: bobot.php");
        exit();
    } else {
        // Tampilkan pesan error jika query gagal dijalankan
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<br>
<div class="tab-content">
    <div id="nk" class="container tab-pane active"><br>
        <div class="row">
            <div class="col-md-6 text-left">
                <h4>Edit Data Bobot</h4>
            </div>
        </div>
        <br>
        <!-- Form edit bobot -->
        <form method="post">
            <div class="form-group">
                <label for="id_kriteria">Id Kriteria:</label>
                <input type="text" class="form-control" id="id_kriteria" name="id_kriteria" value="<?php echo $data_edit['id_kriteria']; ?>" required>
            </div>
            <div class="form-group">
                <label for="value">Value:</label>
                <input type="text" class="form-control" id="value" name="value" value="<?php echo $data_edit['value']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
</div>

<?php
include "footer.php";
?>
