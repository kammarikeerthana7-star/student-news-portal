<?php
session_start();
if(!isset($_SESSION['student_name'])){
    header("Location: ../studentlogin.php");
    exit();
}

include("../db.php");

$sql = "SELECT * FROM placements ORDER BY last_date ASC";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Placement Notifications</title>
</head>
<body>

<h2 style="text-align:center;">Placement Notifications</h2>
<?php
if(mysqli_num_rows($result) > 0)
{
?>

<table border="1" width="95%" align="center">

<tr>
<th>Company Name</th>
<th>Job Role</th>
<th>Qualification</th>
<th>Salary</th>
<th>Location</th>
<th>Drive Date</th>
<th>Last Date</th>
<th>Notification</th>
<th>Apply</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)) { ?>

<tr>

<td><?php echo $row['company_name']; ?></td>
<td><?php echo $row['job_role']; ?></td>
<td><?php echo $row['qualification']; ?></td>
<td><?php echo $row['salary']; ?></td>
<td><?php echo $row['location']; ?></td>
<td><?php echo $row['drive_date']; ?></td>
<td><?php echo $row['last_date']; ?></td>

<td>
<a href="<?php echo $row['notification']; ?>" target="_blank">
View
</a>
</td>

<td>
<a href="<?php echo $row['application_link']; ?>" target="_blank">
Apply
</a>
</td>

</tr>

<?php } ?>

</table>
<?php
}
else
{
    echo "<p style='text-align:center;'>No Jobs Available</p>";
}
?>

<p class="last-updated">
Last Updated: <?php echo date("d F Y"); ?>
</p>


</body>
</html>