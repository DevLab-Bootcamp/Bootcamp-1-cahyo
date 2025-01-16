<!DOCTYPE html>
<html lang="en">
<head>
    <title>Clinic Details</title>
</head>
<body>
    <h1>Clinic Details</h1>
    <p>Name: {{ $clinic->name }}</p>
    <p>Address: {{ $clinic->address }}</p>
    <a href="{{ route('clinics.index') }}">Back to List</a>
</body>
</html>
