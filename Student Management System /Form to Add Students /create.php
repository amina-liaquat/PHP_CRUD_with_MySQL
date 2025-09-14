<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Student</title>
  <link href="style.css" rel="stylesheet">
</head>
<body class="container mt-4">
  <h2>Add Student</h2>
  
  <!-- Simple student form -->
  <form action="insert.php" method="POST" class="mt-3">
    <div class="mb-3">
      <label>Name</label>
      <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Email</label>
      <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Course</label>
      <input type="text" name="course" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Save</button>
    <a href="read.php" class="btn btn-secondary">View Students</a>
  </form>
</body>
</html>
