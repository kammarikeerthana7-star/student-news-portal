<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/admindashboard.css">
</head>
<body>

<div class="dashboard">

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Admin Panel</h2>

        <ul>
            <li><a href="#">📊 Dashboard</a></li>
            <li><a href="../govt-job.php">💼 Govt Jobs</a></li>
            <li><a href="../scholarship.php">🎓 Scholarships</a></li>
            <li><a href="../results.php">📄 Results</a></li>
            <li><a href="../sports.php">⚽ Sports</a></li>
            <li><a href="../articles.php">📰 Articles</a></li>
            <li><a href="../placements.php">🏢 Placements</a></li>
            <li><a href="logout.php">🚪 Logout</a></li>
        </ul>
    </div>

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