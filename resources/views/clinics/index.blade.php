<!DOCTYPE html>
<html lang="en">
<head>
    <title>Clinics</title>
</head>
<body>
    <h1>Clinics</h1>
    <a href="{{ route('clinics.create') }}">Create New Clinic</a>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clinics as $clinic)
                <tr>
                    <td>{{ $clinic->name }}</td>
                    <td>{{ $clinic->address }}</td>
                    <td>
                        <a href="{{ route('clinics.show', $clinic->id) }}">View</a>
                        <a href="{{ route('clinics.edit', $clinic->id) }}">Edit</a>
                        <form action="{{ route('clinics.destroy', $clinic->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
