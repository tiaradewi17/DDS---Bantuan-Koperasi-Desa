<?php
include "header.php";
include "includes/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form submission (insert data into the database)
    // Ensure that you validate and sanitize user inputs before using them in SQL queries
    $id_kriteria = $_POST['id_kriteria'];
    $value = $_POST['value'];

    // Perform the database insertion
    $query = "INSERT INTO bobot (id_kriteria, value) VALUES ('$id_kriteria', '$value')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Redirect to bobot.php after successful insertion
        header("Location: bobot.php");
        exit();
    } else {
        // Handle the error, e.g., display an error message
        echo "Error: " . mysqli_error($koneksi);
    }
}

// Fetch kriteria data for dropdown
$queryKriteria = mysqli_query($koneksi, "SELECT * FROM kriteria");
?>

<br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4>Tambah Data Bobot</h4>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label for="id_kriteria">ID Kriteria:</label>
                    <select class="form-control" id="id_kriteria" name="id_kriteria">
                        <?php
                        while ($rowKriteria = mysqli_fetch_array($queryKriteria)) {
                            echo "<option value='" . $rowKriteria['id_kriteria'] . "'>" . $rowKriteria['id_kriteria'] . " - " . $rowKriteria['nm_kriteria'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="value">Value:</label>
                    <input type="text" class="form-control" id="value" name="value" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>
