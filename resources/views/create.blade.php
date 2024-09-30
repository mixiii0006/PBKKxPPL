<!-- resources/views/example/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Create Example</title>
</head>
<body>
    <h1>Create New Data</h1>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <label>Name:</label><br>
        <input type="text" name="name"><br>

        <label>Age:</label><br>
        <input type="number" name="age"><br>

        <label>Gender:</label><br>
        <select name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br>

        <label>Birthdate:</label><br>
        <input type="date" name="birthdate"><br>

        <label>Is Active:</label><br>
        <input type="checkbox" name="is_active"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
