<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Government Scholarships</title>
    <link rel="stylesheet" href="../css/scholarship.css">
</head>
<body>

<h2 class="page-title">Government Scholarships</h2>

<div class="table-container">
    <table class="govt-table">
        <thead>
            <tr>
                <th>Name of Scholarship</th>
                <th>Start Date</th>
                <th>Documents Required</th>
                <th>Application Form</th>
                <th>Last Date</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>National Scholarship Portal (NSP)</td>
                <td>01 June 2026</td>
                <td>
                    Aadhaar Card,<br>
                    Income Certificate,<br>
                    Caste Certificate,<br>
                    Bank Passbook
                </td>
                <td>
                    <a href="../applications/scholarship-apply.php?name=National Scholarship Portal (NSP)" class="apply-btn">Apply</a>
                </td>
                <td>31 August 2026</td>
            </tr>

            <tr>
                <td>Post Matric Scholarship (SC/ST)</td>
                <td>15 July 2026</td>
                <td>
                    Aadhaar Card,<br>
                    Bonafide Certificate,<br>
                    Income Certificate,<br>
                    Caste Certificate
                </td>
                <td>
                    <a href="../applications/scholarship-apply.php?name=Post Matric Scholarship (SC/ST)" class="apply-btn">Apply</a>
                </td>
                <td>30 September 2026</td>
            </tr>

            <tr>
                <td>Merit-cum-Means Scholarship</td>
                <td>01 August 2026</td>
                <td>
                    Income Certificate,<br>
                    Marks Memo,<br>
                    Bank Account Details
                </td>
                <td>
                    <a href="../applications/scholarship-apply.php?name=Merit-cum-Means Scholarship" class="apply-btn">Apply</a>
                </td>
                <td>15 October 2026</td>
            </tr>
        </tbody>
    </table>

    <p class="last-updated">
        Last Updated: 11 February 2026
    </p>
</div>

</body>
</html>