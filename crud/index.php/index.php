<?php
include "db.php";
$result = mysqli_query($conn, "SELECT * FROM students");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Student Management System</h2>

<!-- ADD FORM -->
<form method="POST" action="create.php">
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="class" placeholder="Class" required>
    <input type="text" name="roll" placeholder="Roll No" required>
    <button type="submit">Add Student</button>
</form>

<hr>

<!-- TABLE -->
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Class</th>
        <th>Roll</th>
        <th>Actions</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['class'] ?></td>
        <td><?= $row['roll'] ?></td>
        <td>
            <a href="update.php?id=<?= $row['id'] ?>">Edit</a>
            <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>

</body>
</html>