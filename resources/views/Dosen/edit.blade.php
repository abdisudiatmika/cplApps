@extends('template')
@section('content')
<div class="container-fluid">
    <h3 class="mb-4">Edit Dosen</h3>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
                @csrf @method('PUT')
                <div class="mb-3">
                    <label>NIDN</label>
                    <input type="text" name="nidn" class="form-control" value="{{ $dosen->nidn }}" required>
                </div>
                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $dosen->nama }}" required>
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $dosen->email }}">
                </div>
                <div class="mb-3">
                    <label>Password <small>(kosongkan jika tidak ingin mengganti)</small></label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button class="btn btn-primary">Update</button>
                <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
