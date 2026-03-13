<?php
include "../db.php";
?>

<!DOCTYPE html>
<html>
<head>

<title>Student Result</title>

<style>

body{
    font-family: Arial;
    background:#f4f6f9;
}

.container{
    width:600px;
    margin:50px auto;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0px 0px 10px #ccc;
}

h2{
    text-align:center;
}

input{
    width:100%;
    padding:10px;
    margin:10px 0;
}

button{
    width:100%;
    padding:10px;
    background:#007bff;
    color:white;
    border:none;
    cursor:pointer;
}

table{
    width:100%;
    margin-top:20px;
    border-collapse:collapse;
}

table,th,td{
    border:1px solid #ccc;
    padding:10px;
    text-align:center;
}

.result-pass{
    color:green;
    font-weight:bold;
}

.result-fail{
    color:red;
    font-weight:bold;
}

</style>

</head>

<body>

<div class="container">

<h2>Check Your Result</h2>

<form method="POST">

Enter Hall Ticket Number
<input type="text" name="hall_ticket" required>

<button type="submit" name="search">View Result</button>

</form>


<?php

if(isset($_POST['search']))
{

$hall_ticket = $_POST['hall_ticket'];

$query = "SELECT * FROM results WHERE hall_ticket='$hall_ticket'";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0)
{

$row = mysqli_fetch_assoc($result);

?>

<table>

<tr>
<th>Hall Ticket</th>
<td><?php echo $row['hall_ticket']; ?></td>
</tr>

<tr>
<th>Student Name</th>
<td><?php echo $row['student_name']; ?></td>
</tr>

<tr>
<th>Course</th>
<td><?php echo $row['course']; ?></td>
</tr>

<tr>
<th>Semester</th>
<td><?php echo $row['semester']; ?></td>
</tr>

<tr>
<th>Subject 1</th>
<td><?php echo $row['subject1']; ?></td>
</tr>

<tr>
<th>Subject 2</th>
<td><?php echo $row['subject2']; ?></td>
</tr>

<tr>
<th>Subject 3</th>
<td><?php echo $row['subject3']; ?></td>
</tr>

<tr>
<th>Subject 4</th>
<td><?php echo $row['subject4']; ?></td>
</tr>

<tr>
<th>Subject 5</th>
<td><?php echo $row['subject5']; ?></td>
</tr>

<tr>
<th>Final Result</th>
<td class="<?php echo ($row['result']=='Pass') ? 'result-pass' : 'result-fail'; ?>">
<?php echo $row['result']; ?>
</td>
</tr>

</table>

<?php
}
else
{
echo "<p style='color:red;text-align:center;'>Result Not Found</p>";
}

}
?>

</div>

</body>
</html>