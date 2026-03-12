<?php
include "../db.php";

$query = "SELECT * FROM results ORDER BY id DESC";

$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>

<head>

<title>Manage Results</title>

<link rel="stylesheet" href="../css/add-sports.css">
<link rel="stylesheet" href="../css/sidebar.css">

</head>

<body>

<?php include "sidebar.php"; ?>

<div class="main-content">

<h2>Manage Results</h2>

<table>

<tr>
<th>ID</th>
<th>Hall Ticket</th>
<th>Name</th>
<th>Course</th>
<th>Edit</th>
<th>Delete</th>
</tr>

<?php

while($row = mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['hall_ticket']; ?></td>

<td><?php echo $row['student_name']; ?></td>

<td><?php echo $row['course']; ?></td>

<td>
<a href="edit-results.php?id=<?php echo $row['id']; ?>">Edit</a>
</td>

<td>
<a href="delete-results.php?id=<?php echo $row['id']; ?>">Delete</a>
</td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>