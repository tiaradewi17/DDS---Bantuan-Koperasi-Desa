<?php
include "includes/config.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    // Perform deletion from topsis_maxmin table based on the provided id
    // Redirect to topsis.php after deletion
    header("Location: topsis.php");
    exit();
}
?>
