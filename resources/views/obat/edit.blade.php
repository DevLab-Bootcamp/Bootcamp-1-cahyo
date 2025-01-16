<form action="{{ route('obat.update', $drugs->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <label for="name">Nama Obat:</label>
    <input type="text" name="name" id="name" value="{{ $drugs->name }}" required>
    
    <label for="code">Kode Obat:</label>
    <input type="text" name="code" id="code" value="{{ $drugs->code }}" required>
    
    <label for="description">Deskripsi:</label>
    <textarea name="description" id="description">{{ $drugs->description }}</textarea>
    
    <button type="submit">Update</button>
</form>
