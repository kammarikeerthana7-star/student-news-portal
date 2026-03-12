<?php
include "../db.php";
if(isset($_POST['submit']))
{
$title = $_POST['title'];
$subtitle = $_POST['subtitle'];
$content = $_POST['content'];
$author = $_POST['author'];
$image = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];
move_uploaded_file($tmp,"../images/".$image);
$sql = "INSERT INTO articles(title,subtitle,content,image,author)
VALUES('$title','$subtitle','$content','$image','$author')";
mysqli_query($conn,$sql);
echo "Article Added Successfully";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Add Article</title>
<link rel="stylesheet" href="../css/add-article.css">
<link rel="stylesheet" href="../css/sidebar.css">
</head>
<body>
<?php include "sidebar.php"; ?>
<div class="main-content">
<h2>Add Article</h2>
<form method="POST" enctype="multipart/form-data">
Title<br>
<input type="text" name="title"><br><br>
Subtitle<br>
<input type="text" name="subtitle"><br><br>
Author<br>
<input type="text" name="author"><br><br>
Image<br>
<input type="file" name="image"><br><br>
Content<br>
<textarea name="content" rows="8" cols="50"></textarea><br><br>
<button type="submit" name="submit">Publish Article</button>
</form>
</div>
</body>
</html>