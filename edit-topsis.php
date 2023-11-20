<?php
include "header.php";
include "includes/config.php";

// Check if the ID is provided in the URL
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    // Fetch data from the topsis_maxmin table based on the provided ID
    $query = mysqli_query($koneksi, "SELECT * FROM topsis_maxmin WHERE id_kriteria = $id");

    // Check if a record is found
    if ($row = mysqli_fetch_array($query)) {
        // Fetched data
        $id_kriteria = $row['id_kriteria'];
        $nm_kriteria = $row['nm_kriteria'];
        $maximum = $row['maximum'];
        $minimum = $row['minimum'];

        // Handle the form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $nm_kriteria = $_POST["nm_kriteria"];
            $maximum = $_POST["maximum"];
            $minimum = $_POST["minimum"];

            // Update data in the topsis_maxmin table
            $update_query = mysqli_query($koneksi, "UPDATE topsis_maxmin SET nm_kriteria = '$nm_kriteria', maximum = '$maximum', minimum = '$minimum' WHERE id_kriteria = $id");

            // Check if the update was successful
            if ($update_query) {
                echo "Data updated successfully.";
            } else {
                echo "Error updating data: " . mysqli_error($koneksi);
            }
        }
    } else {
        echo "Record not found.";
    }
} else {
    echo "ID not provided in the URL.";
}

?>

<!-- Your HTML form for editing data in topsis_maxmin -->
<form method="post" action="">
    <!-- Populate form fields with fetched data -->
    <input type="text" name="nm_kriteria" value="<?php echo $nm_kriteria; ?>">
    <input type="text" name="maximum" value="<?php echo $maximum; ?>">
    <input type="text" name="minimum" value="<?php echo $minimum; ?>">
    <button type="submit">Update</button>
</form>

<?php
include "footer.php";
?>
