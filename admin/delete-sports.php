<?php

include "../db.php";

$id = $_GET['id'];

$query = "DELETE FROM sports WHERE id='$id'";
mysqli_query($conn,$query);

header("Location: manage-sports.php");

?>