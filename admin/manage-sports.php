<?php
include "../db.php";

$query = "SELECT * FROM sports ORDER BY id DESC";
$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
<head>

<title>Manage Sports</title>

<link rel="stylesheet" href="../css/add-sports.css">
<link rel="stylesheet" href="../css/sidebar.css">

</head>

<body>

<?php include "sidebar.php"; ?>

<div class="main-content">

<h2>Manage Sports</h2>

<table>

<tr>
<th>ID</th>
<th>Title</th>
<th>Author</th>
<th>Date</th>
<th>Edit</th>
<th>Delete</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['title']; ?></td>
<td><?php echo $row['author']; ?></td>
<td><?php echo $row['created_at']; ?></td>

<td>
<a href="edit-sports.php?id=<?php echo $row['id']; ?>">Edit</a>
</td>

<td>
<a href="delete-sports.php?id=<?php echo $row['id']; ?>">Delete</a>
</td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>