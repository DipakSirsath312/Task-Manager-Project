<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h2>Task Manager</h2>
<a href="add.php">+ Add Task</a>
<br><br>

<table>
<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Description</th>
    <th>Status</th>
    <th>Action</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM tasks");
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['title']; ?></td>
<td><?php echo $row['description']; ?></td>
<td><?php echo $row['status']; ?></td>
<td>
    <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
    <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Delete task?')">Delete</a>
</td>
</tr>
<?php } ?>

</table>
</div>
</body>
</html>
