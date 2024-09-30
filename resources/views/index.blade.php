<!-- resources/views/example/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Data Dosen</title>
</head>
<body>
    <h1>Data Dosen</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Birthdate</th>
            <th>Active</th>
        </tr>
        @foreach($data as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->age }}</td>
            <td>{{ $row->gender }}</td>
            <td>{{ $row->birthdate }}</td>
            <td>{{ $row->is_active ? 'Yes' : 'No' }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
