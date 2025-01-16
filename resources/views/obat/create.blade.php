<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Obat</title>
</head>
<body>
    <h1>Tambah Obat</h1>
    <form action="{{ route('obat.store') }}" method="POST">
        @csrf
        <label>Kode Obat:</label>
        <input type="text" name="code" required>
        <label>Nama Obat:</label>
        <input type="text" name="name" required>
        <label>Deskripsi:</label>
        <textarea name="description"></textarea>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
