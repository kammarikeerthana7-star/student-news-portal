<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: studentlogin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Government Jobs</title>
    <link rel="stylesheet" href="/student-news-portal/css/govt-job.css">
</head>
<body>

<h2 class="page-title">Government Job Notifications</h2>

<table class="govt-table">
    <thead>
        <tr>
            <th>Job Name</th>
            <th>Role</th>
            <th>Last Date</th>
            <th>Registration / Application Fee</th>
            <th>Application Form</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>SSC CGL 2026</td>
            <td>Group B & C Posts</td>
            <td>15 March 2026</td>
            <td>₹100 (SC/ST/Female: Nil)</td>
            <td><a href="../applications/govt-jobs-apply.php?job=SSC CGL 2026">
    <button>Apply</button>
</a></td>
        </tr>

        <tr>
            <td>IBPS PO</td>
            <td>Probationary Officer</td>
            <td>10 April 2026</td>
            <td>₹850 / ₹175</td>
            <td><a href="../applications/govt-jobs-apply.php?job=IBPS PO">
    <button>Apply</button>
</a></td>
        </tr>

        <tr>
            <td>RRB NTPC</td>
            <td>Clerk, Typist</td>
            <td>28 March 2026</td>
            <td>₹500 / ₹250</td>
            <td><a href="../applications/govt-jobs-apply.php?job=RRB NTPC">
    <button>Apply</button>
</a></td>
        </tr>

        <tr>
            <td>UPSC CDS</td>
            <td>Defence Services</td>
            <td>05 May 2026</td>
            <td>₹200 (SC/ST/Female: Nil)</td>
            <td><a href="../applications/govt-jobs-apply.php?job=UPSC CDS">
    <button>Apply</button>
</a></td>
        </tr>
    </tbody>
</table>

<p class="last-updated">Last Updated: 11 February 2026</p>

</body>
</html>