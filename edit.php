<?php
include 'db.php';
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM tasks WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $status = $_POST['status'];

    mysqli_query($conn, "UPDATE tasks SET title='$title', description='$desc', status='$status' WHERE id=$id");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Task</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h2>Edit Task</h2>
<form method="post">
<input type="text" name="title" value="<?php echo $row['title']; ?>" required><br><br>
<textarea name="description"><?php echo $row['description']; ?></textarea><br><br>
<select name="status">
<option>Pending</option>
<option>Completed</option>
</select><br><br>
<input type="submit" name="update" value="Update Task">
</form>
</div>
</body>
</html>
