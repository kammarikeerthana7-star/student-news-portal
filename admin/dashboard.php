<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: ../login.php");
    exit();
}
?>


<div class="main">

<h2>Welcome Admin</h2>

<div class="cards">

<div class="card">
<h3>6</h3>
<p>Categories</p>
</div>

<div class="card">
<h3>3</h3>
<p>Announcements</p>
</div>

<div class="card">
<h3>25</h3>
<p>Students</p>
</div>

<div class="card">
<h3>10</h3>
<p>Posts</p>
</div>

</div>

<h3>Latest Announcements</h3>

<table>
<tr>
<th>Title</th>
<th>Date</th>
</tr>

<tr>
<td>Semester Exam Timetable</td>
<td>26 Jan 2026</td>
</tr>

<tr>
<td>College Fest</td>
<td>24 Jan 2026</td>
</tr>

</table>

</div>

<?php include 'footer.php'; ?>
