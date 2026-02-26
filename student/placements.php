<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Government Jobs</title>
    <link rel="stylesheet" href="/student-news-portal/css/placement.css">
</head>
<body>

<h2 class="page-title">Government Job Notifications</h2>

<table class="govt-table">
    <thead>
        <tr>
            <th>Company Name</th>
            <th> Job Role</th>
            <th>Eligibility</th>
            <th>Package</th>
            <th>Apply</th>
            <th>Last Date</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>TCS</td>
            <td>Software Engineer</td>
            <td>B.Tech/MCA</td>
            <td>3.5 LPA</td>
            <td>
    <a href="../applications/placement-apply.php?company=TCS">
        <button>Apply</button>
    </a>
</td>
            <td>20 Mar 2026</td>
        </tr>

        <tr>
            <td>Infosys</td>
            <td>System Engineer</td>
            <td>B.Tech/B.Sc</td>
            <td>4.5 LPA</td>
            <td>
    <a href="../applications/placement-apply.php?company=Infosys">
        <button>Apply</button>
    </a>
</td>
            <td>25 Mar 2026</td>
        </tr>

        <tr>
            <td>Wipro</td>
            <td>Project Engineer</td>
            <td>Any Graduate</td>
            <td>3.0 LPA</td>
            <td>
    <a href="../applications/placement-apply.php?company=Wipro">
        <button>Apply</button>
    </a>
</td>
            <td>28 Mar 2026</td>
        </tr>

        <tr>
            <td>Accenture</td>
            <td>Trainee Engineer</td>
            <td>Any Graduate</td>
            <td>3.5 LPA</td>
            <td>
    <a href="../applications/placement-apply.php?company=Accenture">
        <button>Apply</button>
</a></td>
            <td>15 Apr 2026</td>
        </tr>
    </tbody>
</table>

<p class="last-updated">Last Updated: 11 February 2026</p>

</body>
</html>