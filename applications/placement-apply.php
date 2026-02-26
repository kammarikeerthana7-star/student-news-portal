<?php
$company = $_GET['company'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Placement Application</title>
    <link rel="stylesheet" href="/student-news-portal/css/apply/placement-apply.css">
</head>
<body>

<div class="form-container">
    <h2>Placement Application Form</h2>

    <form id="placementForm">

        <label>Company Name</label>
        <input type="text" name="company" value="<?php echo $company; ?>" readonly>

        <label>Full Name</label>
        <input type="text" name="fullname" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Phone</label>
        <input type="text" name="phone" required>

        <label>Branch</label>
        <select name="branch">
            <option>CSE</option>
            <option>ECE</option>
            <option>EEE</option>
            <option>Mechanical</option>
        </select>

        <label>CGPA</label>
        <input type="text" name="cgpa" required>

        <button type="submit">Apply for Placement</button>
    </form>
</div>

<script>
document.getElementById("placementForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const formData = new FormData(this);
    const data = Object.fromEntries(formData.entries());

    console.log("Placement Application:", data);

    alert("Placement Application Submitted!");
});
</script>

</body>
</html>