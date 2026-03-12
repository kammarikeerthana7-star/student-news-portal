<?php
include "../db.php";

if(isset($_POST['submit']))
{
$title = $_POST['title'];
$subtitle = $_POST['subtitle'];
$author = $_POST['author'];
$content = $_POST['content'];

$image = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];

move_uploaded_file($tmp,"../images/".$image);

$query = "INSERT INTO sports(title,subtitle,author,content,image)
VALUES('$title','$subtitle','$author','$content','$image')";

mysqli_query($conn,$query);
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Add Sports News</title>

<link rel="stylesheet" href="../css/add-sports.css">
<link rel="stylesheet" href="../css/sidebar.css">

</head>

<body>

<?php include "sidebar.php"; ?>

<div class="main-content">

<h2>Add Sports News</h2>

<form method="POST" enctype="multipart/form-data">

Title
<input type="text" name="title">

Subtitle
<input type="text" name="subtitle">

Author
<input type="text" name="author">

Image
<input type="file" name="image">

Content
<textarea name="content"></textarea>

<button type="submit" name="submit">Add News</button>

</form>

</div>

</body>
</html>