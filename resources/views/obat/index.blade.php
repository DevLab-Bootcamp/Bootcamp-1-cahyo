<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Obat</title>
</head>
<body>
    <h1>Data Obat</h1>
    <a href="{{ route('obat.create') }}">Tambah Obat</a>
    <table border="1">
        <thead>
            <tr>
                <th>Kode Obat</th>
                <th>Nama Obat</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($drugs as $obat)
                <tr>
                    <td>{{ $obat->code }}</td>
                    <td>{{ $obat->name }}</td>
                    <td>{{ $obat->description }}</td>
                    <td>
                        <a href="{{ route('obat.show', $obat->id) }}">Lihat</a>
                        <a href="{{ route('obat.edit', $obat->id) }}">Edit</a>
                        <form action="{{ route('obat.destroy', $obat->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
