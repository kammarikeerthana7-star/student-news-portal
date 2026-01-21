<?php
$news = [
    [
        "title" => "Annual Tech Fest 2026",
        "description" => "Students participate in various technical events and workshops.",
        "image" => "images/news1.jpg"
    ],
    [
        "title" => "Semester Exam Timetable",
        "description" => "University releases exam schedule for upcoming semester.",
        "image" => "images/news2.jpg"
    ]
];
?>

<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>Stay Updated with Campus News</h1>
        <p>All college announcements, events, exams & placements in one portal.</p>
        <a href="#" class="btn">Read Latest News</a>
    </div>
</section>

<!-- Categories -->
<section class="categories">
    <h2>News Categories</h2>
    <div class="category-box">
        <div>College News</div>
        <div>Events</div>
        <div>Exams</div>
        <div>Sports</div>
        <div>Placements</div>
    </div>
</section>

<!-- Latest News -->
<section class="news">
    <h2>Latest News</h2>
    <div class="news-cards">
        <?php foreach ($news as $item): ?>
            <div class="card">
                <img src="<?php echo $item['image']; ?>">
                <h3><?php echo $item['title']; ?></h3>
                <p><?php echo $item['description']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php include 'footer.php'; ?>