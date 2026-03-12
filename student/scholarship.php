<?php
session_start();
if(!isset($_SESSION['student_name'])){
    header("Location: ../studentlogin.php");
    exit();
}

include("../db.php");

// Fetch all jobs ordered by last date
$sql = "SELECT * FROM scholarships ORDER BY last_date ASC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Scholarships</title>
    <link rel="stylesheet" href="../css/scholarship.css">
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

<h2 class="page-title">Scholarship Notifications</h2>

<?php
if(mysqli_num_rows($result) > 0)
{
?>

<table>

<tr>
    <th>Scholarship Name</th>
    <th>Provider</th>
    <th>Eligibility</th>
    <th>Amount</th>
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

<td><?php echo htmlspecialchars($row['scholarship_name']); ?></td>
<td><?php echo htmlspecialchars($row['provider']); ?></td>
<td><?php echo htmlspecialchars($row['eligibility']); ?></td>
<td><?php echo htmlspecialchars($row['amount']); ?></td>
<td><?php echo htmlspecialchars($row['start_date']); ?></td>
<td><?php echo htmlspecialchars($row['last_date']); ?></td>
<td><?php echo htmlspecialchars($row['description']); ?></td>

<td>
<?php if(!empty($row['notification'])) { ?>
    <a href="<?php echo htmlspecialchars($row['notification']); ?>" target="_blank">
        View
    </a>
<?php } else { echo "No Link"; } ?>
</td>

<td>
<?php if(!empty($row['application_link'])) { ?>
    <a href="<?php echo htmlspecialchars($row['application_link']); ?>" target="_blank">
        Apply
    </a>
<?php } else { echo "No Link"; } ?>
</td></tr>

<?php
}
?>

</table>

<?php
}
else
{
    echo "<p style='text-align:center;'>No Scholarships Available</p>";
}
?>

<p class="last-updated">
Last Updated: <?php echo date("d F Y"); ?>
</p>

</body>
</html>