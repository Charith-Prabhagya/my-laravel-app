<!DOCTYPE html>
<html>

<head>
    <title>Employee List</title>
</head>

<body>
    <h1>Employee List</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Department</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->department }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>