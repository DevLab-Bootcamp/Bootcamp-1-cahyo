<!DOCTYPE html>
<html lang="en">
<head>
    <title>Detail Obat</title>
</head>
<body>
    <h1>Detail Obat</h1>
    <p>Kode Obat: {{ $drugs->code }}</p>
    <p>Nama Obat: {{ $drugs->name}}</p>
    <p>Deskripsi: {{ $drugs->description }}</p>
    <a href="{{ route('obat.index') }}">Kembali</a>
</body>
</html>
