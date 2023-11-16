<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
    </dl>

    <a href="{{ route('employee.index') }}" class="btn btn-primary">Back to Employee List</a>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
