<?php

include "../db.php";

$id = $_GET['id'];

$query = "SELECT * FROM student_results WHERE id='$id'";

$result = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{

$subject1 = $_POST['subject1'];
$subject2 = $_POST['subject2'];
$subject3 = $_POST['subject3'];
$subject4 = $_POST['subject4'];
$subject5 = $_POST['subject5'];

$result_status = $_POST['result'];

$query = "UPDATE student_results SET

subject1='$subject1',
subject2='$subject2',
subject3='$subject3',
subject4='$subject4',
subject5='$subject5',
result='$result_status'

WHERE id='$id'";

mysqli_query($conn,$query);

header("Location: manage-results.php");

}

?>

<!DOCTYPE html>
<html>

<head>

<title>Edit Result</title>

<link rel="stylesheet" href="../css/add-sports.css">
<link rel="stylesheet" href="../css/sidebar.css">

</head>

<body>

<?php include "sidebar.php"; ?>

<div class="main-content">

<h2>Edit Result</h2>

<form method="POST">

Subject1
<input type="number" name="subject1" value="<?php echo $row['subject1']; ?>">

Subject2
<input type="number" name="subject2" value="<?php echo $row['subject2']; ?>">

Subject3
<input type="number" name="subject3" value="<?php echo $row['subject3']; ?>">

Subject4
<input type="number" name="subject4" value="<?php echo $row['subject4']; ?>">

Subject5
<input type="number" name="subject5" value="<?php echo $row['subject5']; ?>">

Result
<input type="text" name="result" value="<?php echo $row['result']; ?>">

<button type="submit" name="update">Update</button>

</form>

</div>

</body>
</html>