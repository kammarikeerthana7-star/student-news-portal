<?php
include "../db.php";

$query = "SELECT * FROM articles ORDER BY id DESC";
$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
<head>
<title>Manage Articles</title>

<link rel="stylesheet" href="../css/add-article.css">
<link rel="stylesheet" href="../css/sidebar.css">

</head>

<body>

<?php include "sidebar.php"; ?>

<div class="main-content">

<h2>Manage Articles</h2>

<table border="1" cellpadding="10">

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
<a href="edit-article.php?id=<?php echo $row['id']; ?>">Edit</a>
</td>

<td>
<a href="delete-article.php?id=<?php echo $row['id']; ?>" 
onclick="return confirm('Are you sure?')">Delete</a>
</td>

</tr>

<?php
}
?>

</table>

</div>

</body>
</html>