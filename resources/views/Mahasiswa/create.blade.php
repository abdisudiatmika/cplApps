@extends('template')
@section('content')
<div class="container-fluid">
    <h3 class="mb-4">Edit Mahasiswa</h3>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                @csrf @method('PUT')
                <div class="mb-3">
                    <label>NIM</label>
                    <input type="text" name="nim" class="form-control" value="{{ $mahasiswa->nim }}" required>
                </div>
                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}" required>
                </div>
                <div class="mb-3">
                    <label>Program Studi</label>
                    <select name="program_studi" class="form-control" required>
                        <option value="AKM" {{ $mahasiswa->program_studi == 'AKM' ? 'selected' : '' }}>AKM</option>
                        <option value="AKP" {{ $mahasiswa->program_studi == 'AKP' ? 'selected' : '' }}>AKP</option>
                        <option value="D3 Akuntansi" {{ $mahasiswa->program_studi == 'D3 Akuntansi' ? 'selected' : '' }}>D3 Akuntansi</option>
                        <option value="D2" {{ $mahasiswa->program_studi == 'D2' ? 'selected' : '' }}>D2</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Semester</label>
                    <input type="number" name="semester" class="form-control" value="{{ $mahasiswa->semester }}" required>
                </div>
                <div class="mb-3">
                    <label>Kelas</label>
                    <input type="text" name="kelas" class="form-control" value="{{ $mahasiswa->kelas }}" required>
                </div>
                <button class="btn btn-primary">Update</button>
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
