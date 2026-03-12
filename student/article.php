<?php
include "../db.php";

$query = "SELECT * FROM articles ORDER BY id DESC";
$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
<head>
<title>Latest Articles</title>

<style>
.article{
width:800px;
margin:20px auto;
padding:20px;
border:1px solid #ccc;
}
</style>

</head>

<body>

<h1 style="text-align:center;">Latest Articles</h1>

<?php
while($row = mysqli_fetch_assoc($result))
{
?>

<div class="article">

<h2><?php echo $row['title']; ?></h2>

<h4><?php echo $row['subtitle']; ?></h4>

<p><b>Author:</b> <?php echo $row['author']; ?></p>

<p><b>Date:</b> <?php echo $row['created_at']; ?></p>

<img src="../images/<?php echo $row['image']; ?>" width="500">

<p><?php echo $row['content']; ?></p>

</div>

<?php
}
?>

</body>
</html>