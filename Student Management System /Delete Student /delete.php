<?php
include "db.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM students WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: read.php?msg=Record deleted successfully");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
