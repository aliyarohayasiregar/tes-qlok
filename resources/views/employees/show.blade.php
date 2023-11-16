<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<div class="container mt-5">
    <h2>Employee Details</h2>

    <div>
        <strong>ID:</strong> {{ $employee->id }} <br>
        <strong>Name:</strong> {{ $employee->name }} <br>
        <strong>Date of Birth:</strong> {{ $employee->dob }} <br>
        <strong>Status:</strong> {{ $employee->status }} <br>
        <strong>Join Date:</strong> {{ $employee->join_date }} <br>
    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
