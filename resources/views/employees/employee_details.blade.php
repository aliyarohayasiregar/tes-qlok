<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Employee Details</h2>

    <dl class="row">
        <dt class="col-sm-3">ID</dt>
        <dd class="col-sm-9">{{ $employee->id }}</dd>

        <dt class="col-sm-3">Name</dt>
        <dd class="col-sm-9">{{ $employee->name }}</dd>

        <dt class="col-sm-3">Date of Birth</dt>
        <dd class="col-sm-9">{{ $employee->dob }}</dd>

        <dt class="col-sm-3">Status</dt>
        <dd class="col-sm-9">{{ $employee->status }}</dd>

        <dt class="col-sm-3">Join Date</dt>
        <dd class="col-sm-9">{{ $employee->join_date }}</dd>

        <dt class="col-sm-3">Experience</dt>
        <dd class="col-sm-9">{{ $employeeDetail->experience }}</dd>

        <dt class="col-sm-3">Job Title</dt>
        <dd class="col-sm-9">{{ $employeeDetail->job_title }}</dd>

        <dt class="col-sm-3">Job Description</dt>
        <dd class="col-sm-9">{{ $employeeDetail->job_desc }}</dd>
    </dl>

    <a href="{{ route('employee.index') }}" class="btn btn-primary">Back to Employee List</a>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
