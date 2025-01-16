<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDC List</title>
</head>
<body>
    <h1>IDC List</h1>
    <a href="{{ route('idc.create') }}">Create New IDC</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Name (EN)</th>
                <th>Name (ID)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($idcs as $idc)
                <tr>
                    <td>{{ $idc->id }}</td>
                    <td>{{ $idc->code }}</td>
                    <td>{{ $idc->name_en }}</td>
                    <td>{{ $idc->name_id }}</td>
                    <td>
                        <a href="{{ route('idc.edit', $idc) }}">Edit</a> |
                        <form action="{{ route('idc.destroy', $idc) }}" method="POST" style="display:inline;">
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
