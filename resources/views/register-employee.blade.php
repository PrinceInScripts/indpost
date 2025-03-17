<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration</title>
</head>

<body>
    <h2>Employee Registration Form</h2>
    <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Father's Name:</label>
        <input type="text" name="father_name" required><br><br>

        <label>Mother's Name:</label>
        <input type="text" name="mother_name" required><br><br>

        <label>Employee ID:</label>
        <input type="text" name="employee_id" required><br><br>

        <label>Post:</label>
        <input type="text" name="post" required><br><br>

        <label>Salary:</label>
        <input type="number" name="salary" step="0.01" required><br><br>

        <label>Joining Date:</label>
        <input type="date" name="joining_date" required><br><br>

        <label>Posting:</label>
        <input type="text" name="posting" required><br><br>

        <label>S/O:</label>
        <input type="text" name="s_o" required><br><br>

        <label>Job Status:</label>
        <input type="text" name="job_status" required><br><br>

        <label>Photo:</label>
        <input type="file" name="photo"><br><br>

        <label>Signature:</label>
        <input type="file" name="signature"><br><br>

        <label>Eligible:</label>
        <input type="checkbox" name="eligible" value="1" checked><br><br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>
