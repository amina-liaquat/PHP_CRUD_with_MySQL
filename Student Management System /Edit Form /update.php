<?php
include "db.php";
$id = $_GET["id"];
$result = $conn->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit Student</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
  <h2>Edit Student</h2>
  
  <form action="update-process.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <div class="mb-3">
      <label>Name</label>
      <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>" required>
    </div>
    <div class="mb-3">
      <label>Email</label>
      <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>" required>
    </div>
    <div class="mb-3">
      <label>Course</label>
      <input type="text" name="course" class="form-control" value="<?php echo $row['course']; ?>" required>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    <a href="read.php" class="btn btn-secondary">Back</a>
  </form>
</body>
</html>
