<<<<<<< HEAD

<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
=======
<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: ../login.php");
>>>>>>> 01b97edd98bec8a9c9a89361f3c82d3de9936be7
    exit();
}
?>

<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/admindashboard.css">
</head>
<body>

<div class="dashboard">

    <!-- Sidebar -->
    <?php include("sidebar.php"); ?>
    <!-- Main Content -->
    <div class="main">
        <!-- Topbar -->
        <div class="topbar">
            <h1>Welcome, Admin</h1>
        </div>
        <!-- Cards -->
        <div class="cards">
            <div class="card">
                <h3>Govt Jobs</h3>
                <p>Manage government job posts</p>
            </div>
            <div class="card">
                <h3>Scholarships</h3>
                <p>Manage scholarship updates</p>
            </div>
            <div class="card">
                <h3>Results</h3>
                <p>Manage student results</p>
            </div>
            <div class="card">
                <h3>Articles</h3>
                <p>Manage news and articles</p>
            </div>
            <div class="card">
                <h3>Placements</h3>
                <p>Manage placement updates</p>
            </div>
            <div class="card">
                <h3>Sports</h3>
                <p>Manage sports activities</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
=======

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
>>>>>>> 01b97edd98bec8a9c9a89361f3c82d3de9936be7
