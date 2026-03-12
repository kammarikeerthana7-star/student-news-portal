<?php
include "../db.php";

$id = $_GET['id'];

$query = "DELETE FROM articles WHERE id='$id'";
mysqli_query($conn,$query);

header("Location: manage-article.php");
exit();
?>