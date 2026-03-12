<?php
include "../db.php";

$id = $_GET['id'];

$query = "SELECT * FROM sports WHERE id='$id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{

$title = $_POST['title'];
$subtitle = $_POST['subtitle'];
$author = $_POST['author'];
$content = $_POST['content'];

$query = "UPDATE sports SET
title='$title',
subtitle='$subtitle',
author='$author',
content='$content'
WHERE id='$id'";

mysqli_query($conn,$query);

header("Location: manage-sports.php");

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Edit Sports</title>

<link rel="stylesheet" href="../css/add-sports.css">
<link rel="stylesheet" href="../css/sidebar.css">

</head>

<body>

<?php include "sidebar.php"; ?>

<div class="main-content">

<h2>Edit Sports News</h2>

<form method="POST">

Title
<input type="text" name="title" value="<?php echo $row['title']; ?>">

Subtitle
<input type="text" name="subtitle" value="<?php echo $row['subtitle']; ?>">

Author
<input type="text" name="author" value="<?php echo $row['author']; ?>">

Content
<textarea name="content"><?php echo $row['content']; ?></textarea>

<button type="submit" name="update">Update</button>

</form>

</div>

</body>
</html>