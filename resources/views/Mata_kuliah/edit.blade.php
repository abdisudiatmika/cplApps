@extends('template')
@section('content')
<div class="container-fluid">
    <h3 class="mb-4">Edit Mata Kuliah</h3>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('mata-kuliah.update', $mataKuliah->id) }}" method="POST">
                @csrf @method('PUT')
                <div class="mb-3">
                    <label>Kode MK mk1</label>
                    <input type="text" name="kode_mk" class="form-control" value="{{ $mataKuliah->kode_mk }}" required>
                </div>
                <div class="mb-3">
                    <label>Nama Mata Kuliah</label>
                    <input type="text" name="nama_mk" class="form-control" value="{{ $mataKuliah->nama_mk }}" required>
                </div>
                <div class="mb-3">
                    <label>SKS</label>
                    <input type="number" name="sks" class="form-control" value="{{ $mataKuliah->sks }}" required min="1">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('mata-kuliah.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
