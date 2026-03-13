<?php
include "../db.php";

$query = "SELECT * FROM sports ORDER BY id DESC";
$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
<head>

<title>Sports News</title>

<style>

body{
font-family: Arial;
background:#f4f6f9;
}

.container{
width:90%;
margin:auto;
}

h2{
text-align:center;
margin:20px;
}

.cards{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
gap:20px;
}

.card{
background:white;
border-radius:10px;
box-shadow:0 0 10px #ccc;
overflow:hidden;
}

.card img{
width:100%;
height:200px;
object-fit:cover;
}

.card-content{
padding:15px;
}

.card h3{
margin:0;
color:#333;
}

.subtitle{
color:gray;
font-size:14px;
}

.author{
font-size:13px;
color:#777;
margin-bottom:10px;
}

.content{
font-size:14px;
line-height:1.5;
}

</style>

</head>

<body>

<div class="container">

<h2>🏆 Latest Sports News</h2>

<div class="cards">

<?php
while($row = mysqli_fetch_assoc($result))
{
?>

<div class="card">

<img src="../images/<?php echo $row['image']; ?>">

<div class="card-content">

<h3><?php echo $row['title']; ?></h3>

<p class="subtitle"><?php echo $row['subtitle']; ?></p>

<p class="author">By <?php echo $row['author']; ?></p>

<p class="content"><?php echo substr($row['content'],0,120); ?>...</p>

</div>

</div>

<?php
}
?>

</div>

</div>

</body>
</html>