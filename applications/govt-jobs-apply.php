<!DOCTYPE html>
<html>
<head>
    <title>Job Application Form</title>
    <link rel="stylesheet" href="/student-news-portal/css/apply/govt-jobs-apply.css">
</head>
<body>

<div class="form-container">
    <h2>Government Job Application</h2>

    <form id="jobForm">
        <label>Full Name</label>
        <input type="text" name="fullname" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Phone</label>
        <input type="text" name="phone" required>

        <label>Qualification</label>
        <select name="qualification">
            <option>Degree</option>
            <option>B.Tech</option>
            <option>PG</option>
        </select>

        <button type="submit">Submit Application</button>
    </form>
</div>

<script>
document.getElementById("jobForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const formData = new FormData(this);
    const data = Object.fromEntries(formData.entries());

    console.log("Application Object:", data);

    alert("Application Submitted Successfully!");
});
</script>

</body>
</html>