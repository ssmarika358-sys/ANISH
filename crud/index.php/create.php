<?php
include "db.php";

$name = $_POST['name'];
$class = $_POST['class'];
$roll = $_POST['roll'];

$sql = "INSERT INTO students (name, class, roll)
        VALUES ('$name', '$class', '$roll')";

mysqli_query($conn, $sql);

header("Location: index.php");
?>