<?php
session_start();
if(!isset($_SESSION['student_name'])){
    header("Location: ../studentlogin.php");
    exit();
}

include("../db.php");

// Fetch all jobs ordered by last date
$sql = "SELECT * FROM govt_jobs ORDER BY last_date ASC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Government Jobs</title>
    <link rel="stylesheet" href="../css/govt-job.css">
    <style>
        table {
            width: 95%;
            margin: 20px auto;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }

        th {
            background-color: #002147;
            color: white;
            padding: 12px;
            text-align: center;
        }

        td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e6f0ff;
        }

        .btn-notification {
            background-color: #007bff;
            color: white;
            padding: 6px 12px;
            border: none;
            cursor: pointer;
        }

        .btn-apply {
            background-color: #28a745;
            color: white;
            padding: 6px 12px;
            border: none;
            cursor: pointer;
        }

        .page-title {
            text-align: center;
            margin-top: 20px;
        }

        .last-updated {
            text-align: center;
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2 class="page-title">Government Job Notifications</h2>

<?php
if(mysqli_num_rows($result) > 0)
{
?>

<table>

<tr>
    <th>Job Title</th>
    <th>Organization</th>
    <th>Location</th>
    <th>Job Type</th>
    <th>Qualification</th>
    <th>Age Limit</th>
    <th>Start Date</th>
    <th>Last Date</th>
    <th>Description</th>
    <th>Notification</th>
    <th>Apply</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo htmlspecialchars($row['job_title']); ?></td>
<td><?php echo htmlspecialchars($row['organization']); ?></td>
<td><?php echo htmlspecialchars($row['location']); ?></td>
<td><?php echo htmlspecialchars($row['job_type']); ?></td>
<td><?php echo htmlspecialchars($row['qualification']); ?></td>
<td><?php echo htmlspecialchars($row['age_limit']); ?></td>
<td><?php echo htmlspecialchars($row['start_date']); ?></td>
<td><?php echo htmlspecialchars($row['last_date']); ?></td>
<td><?php echo htmlspecialchars($row['description']); ?></td>

<td>
<a href="<?php echo htmlspecialchars($row['notification_link']); ?>" target="_blank">
<button class="btn-notification">View</button>
</a>
</td>

<td>
<a href="<?php echo htmlspecialchars($row['website_link']); ?>" target="_blank">
<button class="btn-apply">Apply</button>
</a>
</td>

</tr>

<?php
}
?>

</table>

<?php
}
else
{
    echo "<p style='text-align:center;'>No Government Jobs Available</p>";
}
?>

<p class="last-updated">
Last Updated: <?php echo date("d F Y"); ?>
</p>

</body>
</html>