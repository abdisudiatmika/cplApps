@extends('template')
@section('content')
<div class="container-fluid">
    <h3 class="mb-4">Tambah Mata Kuliah</h3>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('mata-kuliah.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Kode MK</label>
                    <input type="text" name="kode_mk" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Nama Mata Kuliah</label>
                    <input type="text" name="nama_mk" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>SKS</label>
                    <input type="number" name="sks" class="form-control" required min="1">
                </div>
                <button class="btn btn-success">Simpan</button>
                <a href="{{ route('mata-kuliah.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
