@extends('template')
@section('content')
<div class="container-fluid">
    <h3>Data Mahasiswa</h3>
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-2">+ Tambah Mahasiswa</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIM</th><th>Nama</th><th>Program Studi</th><th>Semester</th><th>Kelas</th><th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswas as $m)
            <tr>
                <td>{{ $m->nim }}</td>
                <td>{{ $m->nama }}</td>
                <td>{{ $m->program_studi }}</td>
                <td>{{ $m->semester }}</td>
                <td>{{ $m->kelas }}</td>
                <td>
                    <a href="{{ route('mahasiswa.edit', $m->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('mahasiswa.destroy', $m->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
