<?php
include 'db.php';
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $desc = $_POST['description'];

    mysqli_query($conn, "INSERT INTO tasks (title, description) VALUES ('$title', '$desc')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Add Task</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h2>Add Task</h2>
<form method="post">
<input type="text" name="title" placeholder="Task Title" required><br><br>
<textarea name="description" placeholder="Task Description"></textarea><br><br>
<input type="submit" name="submit" value="Add Task">
</form>
</div>
</body>
</html>
