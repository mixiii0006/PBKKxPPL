<!-- resources/views/example/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Data Dosen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        td {
            color: #555;
        }
                /* Green background for the column above the buttons */
        table th.action-header {
            background-color: #4CAF50;
            color: white;
        }

        /* Button container */
        .action-btn-container {
            display: flex;
            justify-content: center;
        }

        /* Buttons */
        .action-btn {
            padding: 8px 16px;
            margin-right: 10px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            color: white;
            border-radius: 4px;
            font-size: 14px;
        }

        .edit-btn {
            background-color: #3498db;
        }

        .edit-btn:hover {
            background-color: #2980b9;
        }

        .delete-btn {
            background-color: #e74c3c;
        }

        .delete-btn:hover {
            background-color: #c0392b;
        }

    </style>

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
            <th>Mata Kuliah</th> <!-- Tambahkan kolom Mata Kuliah -->
            <th class="action-header">Actions</th>
        </tr>
        @foreach($data as $row)
        
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->age }}</td>
            <td>{{ $row->gender }}</td>
            <td>{{ $row->birthdate }}</td>
            <td>{{ $row->is_active ? 'Yes' : 'No' }}</td>
            <td>
                <ul>
                    @foreach($row->mataKuliahs as $mk)
                        <li>{{ $mk->nama_mk }} ({{ $mk->sks }} SKS)</li>
                    @endforeach
                </ul>
            </td>


            <td>
                <div class="action-btn-container">
                    <a href="{{ route('update', $row->id) }}" class="action-btn edit-btn">Edit</a>
                    <form action="{{ route('destroy', $row->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="action-btn delete-btn">Hapus</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>

