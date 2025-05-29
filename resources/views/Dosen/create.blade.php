@extends('template')

@section('content')
<div class="container-fluid">
    <h3 class="mb-4">Tambah Dosen</h3>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('pengajar.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>NIDN</label>
                    <input type="text" name="nidn" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button class="btn btn-success">Simpan</button>
                <a href="{{ route('pengajar.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
