<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Clinic</title>
</head>
<body>
    <h1>Edit Clinic</h1>
    <form action="{{ route('clinics.update', $clinic->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $clinic->name }}" required>
        <label>Address:</label>
        <input type="text" name="address" value="{{ $clinic->address }}" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
