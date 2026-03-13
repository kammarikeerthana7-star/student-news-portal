<?php
session_start();
include "../db.php";

$studentName = isset($_SESSION['student_name']) ? $_SESSION['student_name'] : "Student";

// Government Jobs Count
$job_query = "SELECT COUNT(*) as total FROM govt_jobs";
$job_result = mysqli_query($conn,$job_query);
$jobs = mysqli_fetch_assoc($job_result)['total'];

// Scholarship Count
$sch_query = "SELECT COUNT(*) as total FROM scholarships";
$sch_result = mysqli_query($conn,$sch_query);
$scholarships = mysqli_fetch_assoc($sch_result)['total'];

// Placements Count
$place_query = "SELECT COUNT(*) as total FROM placements";
$place_result = mysqli_query($conn,$place_query);
$placements = mysqli_fetch_assoc($place_result)['total'];

// Results Count
$res_query = "SELECT COUNT(*) as total FROM results";
$res_result = mysqli_query($conn,$res_query);
$results = mysqli_fetch_assoc($res_result)['total'];

// Sports Count
$sports_query = "SELECT COUNT(*) as total FROM sports";
$sports_result = mysqli_query($conn,$sports_query);
$sports = mysqli_fetch_assoc($sports_result)['total'];

// Articles Count
$article_query = "SELECT COUNT(*) as total FROM articles";
$article_result = mysqli_query($conn,$article_query);
$articles = mysqli_fetch_assoc($article_result)['total'];

// Recent Updates (Dummy Data)
$recentUpdates = [
    "TSPSC Group 2 Notification Released",
    "National Scholarship Portal Open",
    "Campus Drive by Infosys",
    "Semester Results Published",
    "Inter-College Sports Meet Announced"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Dashboard</title>
<link rel="stylesheet" href="../css/studentdashboard.css">
</head>

<body>

<!-- Sidebar -->
<div class="sidebar">
    <h2>Student Portal</h2>
    <a href="#">🏠 Dashboard</a>
    <a href="govt-job.php">Government Jobs</a>
    <a href="scholarship.php">🎓 Scholarships</a>
    <a href="sports.php">🏆 Sports</a>
    <a href="article.php">📰 Articles</a>
    <a href="placements.php">🏢 Placements</a>
    <a href="results.php">📊 Results</a>
    <a href="#">🚪 Logout</a>
</div>

<!-- Main Content -->
<div class="main">

    <!-- Navbar -->
    <div class="navbar">
        <h3>Welcome, <?php echo $studentName; ?> 👋</h3>
        <div>🔔 Notifications | 👤 Profile</div>
    </div>

    <!-- Cards -->
    <div class="cards">
        <div class="card blue">
            <h2><?php echo $jobs; ?></h2>
            <h3>Government Jobs</h3>
        </div>

        <div class="card green">
            <h2><?php echo $scholarships; ?></h2>
            <h3>Scholarships</h3>
        </div>

        <div class="card orange">
            <h2><?php echo $placements; ?></h2>
            <h3>Placements</h3>
        </div>

        <div class="card purple">
            <h2><?php echo $results; ?></h2>
            <h3>Results</h3>
        </div>
        <div class="card cyan">
            <h2><?php echo $sports; ?></h2>
            <h3>sports</h3>
        </div>
        <div class="card pink">
            <h2><?php echo $articles; ?></h2>
            <h3>Articles</h3>
        </div>
    </div>

    <!-- Recent Updates -->
    <div class="updates">
        <h3>📢 Recent Updates</h3>
        <ul>
            <?php
            foreach($recentUpdates as $update){
                echo "<li>$update</li>";
            }
            ?>
        </ul>
    </div>

    <div class="footer">
        © 2026 Student News Portal 
    </div>

</div>

</body>
</html> 