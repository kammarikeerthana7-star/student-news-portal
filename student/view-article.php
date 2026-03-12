<?php
include "../db.php";

$id = $_GET['id'];

$query = "SELECT * FROM articles WHERE id='$id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
?>

<div style="width:900px;margin:auto">

<h1><?php echo $row['title']; ?></h1>

<p><?php echo $row['subtitle']; ?></p>

<img src="../images/<?php echo $row['image']; ?>" width="300">

<p><?php echo $row['content']; ?></p>

<p><b>Author:</b> <?php echo $row['author']; ?></p>

</div>