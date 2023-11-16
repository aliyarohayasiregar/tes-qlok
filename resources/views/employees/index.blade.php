<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <h2>Employee List</h2>

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Status</th>
            <th>Join Date</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->dob }}</td>
                <td>{{ $employee->status }}</td>
                <td>{{ $employee->join_date }}</td>
                <td>
                    <a href="{{ route('employee.editForm', $employee->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{ route('employee.showDetails', $employee->id) }}" class="btn btn-info btn-sm">Show</a>
                    <a href="{{ route('employee.createDetailsForm', $employee->id) }}" class="btn btn-success btn-sm">Add Details</a>
                    <a href="{{ route('employee.showEmployeeDetails', $employee->id) }}" class="btn btn-info btn-sm">Show Details</a>
                    <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="{{ route('employee.createForm') }}" class="btn btn-success">Add Employee</a>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>


