<?php
include "../db.php";

$id = $_GET['id'];

$query = "SELECT * FROM articles WHERE id='$id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{
$title = $_POST['title'];
$subtitle = $_POST['subtitle'];
$content = $_POST['content'];
$author = $_POST['author'];

$sql = "UPDATE articles 
SET title='$title',
subtitle='$subtitle',
content='$content',
author='$author'
WHERE id='$id'";

mysqli_query($conn,$sql);

header("Location: manage-articles.php");
}
?>

<h2>Edit Article</h2>

<form method="POST">

Title<br>
<input type="text" name="title" value="<?php echo $row['title']; ?>"><br><br>

Subtitle<br>
<input type="text" name="subtitle" value="<?php echo $row['subtitle']; ?>"><br><br>

Author<br>
<input type="text" name="author" value="<?php echo $row['author']; ?>"><br><br>

Content<br>
<textarea name="content" rows="8"><?php echo $row['content']; ?></textarea><br><br>

<button name="update">Update Article</button>

</form>