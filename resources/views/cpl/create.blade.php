@extends('template')

@section('content')
<div class="container">
    <h3>Tambah CPL</h3>

    <form action="{{ route('cpl.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Kode CPL</label>
            <input type="text" name="kode_cpl" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required></textarea>
        </div>
        <div class="form-group">
    <label for="kategori">Kategori</label>
    <select name="kategori" class="form-control" required>
        <option value="">-- Pilih Kategori --</option>
        <option value="Pengetahuan">Pengetahuan</option>
        <option value="Keterampilan">Keterampilan</option>
        <option value="Sikap">Sikap</option>
    </select>
</div>

        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
