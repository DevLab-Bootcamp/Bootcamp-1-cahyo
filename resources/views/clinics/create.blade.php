<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Clinic</title>
</head>
<body>
    <h1>Create Clinic</h1>
    <form action="{{ route('clinics.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Address:</label>
        <input type="text" name="address" required>
        <button type="submit">Save</button>
    </form>
</body>
</html>
