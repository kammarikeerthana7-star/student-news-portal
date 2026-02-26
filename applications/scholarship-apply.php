<!DOCTYPE html>
<html>
<head>
<title>Scholarship Application</title>
<link rel="stylesheet" href="/student-news-portal/css/apply/scholarship-apply.css">
</head>

<body>

<div class="form-container">

<h2>SCHOLARSHIP APPLICATION FORM</h2>

<form method="post">

<!-- Basic Details -->
<div class="form-row">
    <div class="form-group">
        <label>Academic Year</label>
        <input type="text" name="academic_year">
    </div>

    <div class="form-group">
        <label>Application Date</label>
        <input type="date" name="application_date">
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <label>College Name</label>
        <input type="text" name="college_name">
    </div>

    <div class="form-group">
        <label>Course Name</label>
        <input type="text" name="course_name">
    </div>
</div>

<!-- SSC Details -->
<div class="section-title">Student SSC Details</div>

<div class="form-row">
    <div class="form-group">
        <label>SSC Board</label>
        <input type="text" name="ssc_board">
    </div>

    <div class="form-group">
        <label>Passing Year</label>
        <input type="text" name="passing_year">
    </div>

    <div class="form-group">
        <label>Marks Obtained</label>
        <input type="text" name="marks">
    </div>
</div>

<!-- Applicant Details -->
<div class="section-title">Applicant Details</div>

<div class="form-row">
    <div class="form-group">
        <label>Applicant Name</label>
        <input type="text" name="applicant_name">
    </div>

    <div class="form-group">
        <label>Mother's Name</label>
        <input type="text" name="mother_name">
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <label>Date of Birth</label>
        <input type="date" name="dob">
    </div>

    <div class="form-group">
        <label>Gender</label>
        <select name="gender">
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
        </select>
    </div>

    <div class="form-group">
        <label>Caste Category</label>
        <input type="text" name="caste_category">
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <label>Annual Income</label>
        <input type="text" name="annual_income">
    </div>

    <div class="form-group">
        <label>Marital Status</label>
        <input type="text" name="marital_status">
    </div>
</div>

<!-- Prequalifying Details -->
<div class="section-title">Student Prequalifying Details</div>

<div class="form-row">
    <div class="form-group">
        <label>Last Attended School/College</label>
        <input type="text" name="last_school">
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <label>Last Exam Passed</label>
        <input type="text" name="last_exam">
    </div>

    <div class="form-group">
        <label>Last Exam Marks</label>
        <input type="text" name="last_exam_marks">
    </div>
</div>

<center>
<button type="submit">Submit Application</button>
</center>

</form>
</div>

</body>
</html>