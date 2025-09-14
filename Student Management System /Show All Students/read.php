<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Student Records</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
  <h2>Student Records</h2>

  <?php if (isset($_GET['msg'])) { ?>
    <p class="alert alert-success"><?php echo $_GET['msg']; ?></p>
  <?php } ?>

  <a href="create.php" class="btn btn-primary mb-3">Add New Student</a>

  <table class="table table-bordered">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Course</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $result = $conn->query("SELECT * FROM students");
      while ($row = $result->fetch_assoc()) {
        echo "<tr>
          <td>{$row['id']}</td>
          <td>{$row['name']}</td>
          <td>{$row['email']}</td>
          <td>{$row['course']}</td>
          <td>
            <a href='update.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
            <a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure?\")'>Delete</a>
          </td>
        </tr>";
      }
      ?>
    </tbody>
  </table>
</body>
</html>
