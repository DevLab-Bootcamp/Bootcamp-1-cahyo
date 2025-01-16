<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New IDC</title>
</head>
<body>
    <h1>Create New IDC</h1>
    <form action="{{ route('idc.store') }}" method="POST">
        @csrf
        <label for="code">Code:</label>
        <input type="text" id="code" name="code" required>
        <br><br>
        <label for="name_en">Name (EN):</label>
        <input type="text" id="name_en" name="name_en" required>
        <br><br>
        <label for="name_id">Name (ID):</label>
        <input type="text" id="name_id" name="name_id" required>
        <br><br>
        <button type="submit">Save</button>
    </form>
    <br>
    <a href="{{ route('idc.index') }}">Back to List</a>
</body>
</html>
