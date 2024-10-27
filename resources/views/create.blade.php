<!-- resources/views/example/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Create</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-size: 14px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="checkbox"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        span {
            color: red;
            font-size: 12px;
        }

        .error {
            color: red;
            font-size: 12px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input,
        .form-group select {
            display: block;
            width: 100%;
        }

    </style>
</head>
<body>
    <h1>Create New Data</h1>
    <form action="{{ route('store') }}" method="POST">
        @csrf

        <!-- Name Input -->
        <label>Name:</label><br>
        <input type="text" name="name" value="{{ old('name') }}"><br>
        {{-- @error('name')
            <span style="color:red;">{{ $message }}</span><br>
        @enderror --}}

        <!-- Age Input -->
        <label>Age:</label><br>
        <input type="number" name="age" value="{{ old('age') }}"><br>
        {{-- @error('age')
            <span style="color:red;">{{ $message }}</span><br>
        @enderror --}}

        <!-- Gender Input -->
        <label>Gender:</label><br>
        <select name="gender">
            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
        </select><br>
        {{-- @error('gender')
            <span style="color:red;">{{ $message }}</span><br>
        @enderror --}}

        <!-- Birthdate Input -->
        <label>Birthdate:</label><br>
        <input type="date" name="birthdate" value="{{ old('birthdate') }}"><br>
        {{-- @error('birthdate')
            <span style="color:red;">{{ $message }}</span><br>
        @enderror --}}

        <!-- Is Active Checkbox -->
        <label>Is Active:</label><br>
        <!-- Hidden field to send 0 if checkbox is not checked -->
        <input type="hidden" name="is_active" value="0">
        <input type="checkbox" name="is_active" value="1" {{ old('is_active') ? 'checked' : '' }}><br>
        {{-- @error('is_active')
            <span style="color:red;">{{ $message }}</span><br>
        @enderror --}}

        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
