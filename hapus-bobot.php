<?php
include "includes/config.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id_bobot = $_GET['id'];

    // Delete dependent records in the matrixkeputusan table
    $queryDeleteMatrix = "DELETE FROM matrixkeputusan WHERE id_bobot = '$id_bobot'";
    $resultDeleteMatrix = mysqli_query($koneksi, $queryDeleteMatrix);

    if ($resultDeleteMatrix) {
        // If deletion from matrixkeputusan is successful, delete the record from the bobot table
        $queryDeleteBobot = "DELETE FROM bobot WHERE id_bobot = '$id_bobot'";
        $resultDeleteBobot = mysqli_query($koneksi, $queryDeleteBobot);

        if ($resultDeleteBobot) {
            // Redirect to bobot.php after successful deletion
            header("Location: bobot.php");
            exit();
        } else {
            // Handle the error, e.g., display an error message
            echo "Error: " . mysqli_error($koneksi);
        }
    } else {
        // Handle the error, e.g., display an error message
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    // Redirect to bobot.php if no 'id' parameter is provided
    header("Location: bobot.php");
    exit();
}
?>
