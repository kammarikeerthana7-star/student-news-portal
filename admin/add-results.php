<?php
include "../db.php";

if(isset($_POST['submit']))
{

$hall_ticket = $_POST['hall_ticket'];
$student_name = $_POST['student_name'];
$course = $_POST['course'];
$semester = $_POST['semester'];

$subject1 = $_POST['subject1'];
$subject2 = $_POST['subject2'];
$subject3 = $_POST['subject3'];
$subject4 = $_POST['subject4'];
$subject5 = $_POST['subject5'];

$result = $_POST['result'];

$query = "INSERT INTO results
(hall_ticket,student_name,course,semester,subject1,subject2,subject3,subject4,subject5,result)

VALUES
('$hall_ticket','$student_name','$course','$semester','$subject1','$subject2','$subject3','$subject4','$subject5','$result')";

mysqli_query($conn,$query);

echo "Result Added Successfully";

}
?>

<!DOCTYPE html>
<html>

<head>

<title>Add Results</title>

<link rel="stylesheet" href="../css/add-sports.css">
<link rel="stylesheet" href="../css/sidebar.css">

</head>

<body>

<?php include "sidebar.php"; ?>

<div class="main-content">

<h2>Add Student Result</h2>

<form method="POST">

Hall Ticket
<input type="text" name="hall_ticket" required>

Student Name
<input type="text" name="student_name" required>

Course
<input type="text" name="course">

Semester
<input type="text" name="semester">

Subject 1
<input type="number" name="subject1">

Subject 2
<input type="number" name="subject2">

Subject 3
<input type="number" name="subject3">

Subject 4
<input type="number" name="subject4">

Subject 5
<input type="number" name="subject5">

Result
<input type="text" name="result">

<button type="submit" name="submit">Add Result</button>

</form>

</div>

</body>
</html>