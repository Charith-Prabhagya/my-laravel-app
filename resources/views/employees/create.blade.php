<!DOCTYPE html>
<html>

<head>
    <title>Add Employee</title>
</head>

<body>
    <h1>Add New Employee</h1>

    @if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="/employees" method="POST">
        @csrf

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ old('name') }}"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}"><br><br>

        <label>Department:</label><br>
        <input type="text" name="department" value="{{ old('department') }}"><br><br>

        <button type="submit">Add Employee</button>
    </form>

    <br>
    <a href="/employees">← Back to Employee List</a>
</body>

</html>