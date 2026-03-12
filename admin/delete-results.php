<?php

include "../db.php";

$id = $_GET['id'];

$query = "DELETE FROM student_results WHERE id='$id'";

mysqli_query($conn,$query);

header("Location: manage-results.php");

?>