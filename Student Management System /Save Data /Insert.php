<?php
include "db.php";

// save data from form into database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name   = $_POST["name"];
    $email  = $_POST["email"];
    $course = $_POST["course"];

    $sql = "INSERT INTO students (name, email, course) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $course);

    if ($stmt->execute()) {
        header("Location: read.php?msg=Student added successfully");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
