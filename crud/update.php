<?php
include "db.php";

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $class = $_POST['class'];
    $roll = $_POST['roll'];

    mysqli_query($conn,
        "UPDATE students SET name='$name', class='$class', roll='$roll' WHERE id=$id"
    );

    header("Location: index.php");
}
?>

<form method="POST">
    <input type="text" name="name" value="<?= $row['name'] ?>">
    <input type="text" name="class" value="<?= $row['class'] ?>">
    <input type="text" name="roll" value="<?= $row['roll'] ?>">
    <button type="submit" name="update">Update</button>
</form>