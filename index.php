<?php
// index.php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student News Portal</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div>

<!-- HEADER -->
<header class="header">
    <div class="logo">
    <img src="images/logo.png" alt="Logo">
    <span class="tagline">Connecting Students with Opportunities
</span>
</div>


    <form class="search-box" method="get" action="search.php">
        <input type="text" name="q" placeholder="Search news...">
        <button type="submit">Search</button>
    </form>

    <div class="auth">
        <a href="login.php">Login</a>
        <a href="register.php" class="btn">Register</a>
    </div>
</header>

<!-- WELCOME SECTION -->
<section class="welcome">
    <h2>Welcome to Student News Portal</h2>
    <p>Stories that shape student life</p>
</section>

<!-- CONTENT SECTION -->
<section class="cards-section">
<h1 class="cards-title">CATEGORIES</h1>
<div class="cards">
    <div class="card"><br>
        <img src="images/govt_jobs.png" alt="Govt Job">
        <h3>Govt Job</h3>
        <a href="govt-job.php">View More</a>
    </div>

    <div class="card">
        <img src="images/scholarship.jpg" alt="Scholarship">
        <h3>Govt Scholarship</h3>
        <a href="scholarship.php">View More</a>
    </div>

    <div class="card">
        <img src="images/results.jpg" alt="Results">
        <h3>Results</h3>
        <a href="results.php">View More</a>
    </div>

    <div class="card">
        <img src="images/sports.jpg" alt="Sports">
        <h3>Sports</h3>
        <a href="sports.php">View More</a>
    </div>

    <div class="card">
        <img src="images/article.jpg" alt="Article">
        <h3>Articles</h3>
        <a href="articles.php">View More</a>
    </div>
    <div class="card">
        <img src="images/placements.jpeg" alt="Placements">
        <h3>Placements</h3>
        <a href="placements.php">View More</a>
    </div>
    </div>


</section>
<section class="latest-news">
  <h2>LATEST ANNOUNCEMENTS</h2>

  <div class="news-container">
    <div class="news-card">
      <h4>Semester Exam Timetable Released</h4>
      <p>Check your department-wise exam schedule.</p>
    </div>

    <div class="news-card">
      <h4>College Fest 2026</h4>
      <p>Register now for cultural and technical events.</p>
    </div>

    <div class="news-card">
      <h4>Scholarship Deadline</h4>
      <p>Last date to apply is Feb 10.</p>
    </div>
  </div>
</section>
<section class="about-portal">
  <h2>Why Student News Portal?</h2>

  <p>
    Student News Portal provides centralized academic updates, results,
    scholarships, placements and announcements to help students stay informed.
  </p>

  <div class="features">
    <div>✔ Real-time Updates</div>
    <div>✔ Easy Access</div>
    <div>✔ Centralized Information</div>
    <div>✔ Student Friendly</div>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer">
    <p>&copy; <?php echo date("Y"); ?> Student News Portal</p>
</footer>
</div>s

</body>
</htML>