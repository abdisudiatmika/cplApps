@extends('template')
@section('content')
<div class="container-fluid">
    <h3 class="mb-4">Daftar Mata Kuliah</h3>

    <a href="{{ route('mata-kuliah.create') }}" class="btn btn-primary mb-3">+ Tambah Mata Kuliah</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Kode MK</th>
                        <th>Nama</th>
                        <th>SKS</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mataKuliahs as $mk)
                        <tr>
                            <td>{{ $mk->kode_mk }}</td>
                            <td>{{ $mk->nama_mk }}</td>
                            <td>{{ $mk->sks }}</td>
                            <td>
                                <a href="{{ route('mata-kuliah.edit', $mk->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('mata-kuliah.destroy', $mk->id) }}" method="POST" style="display:inline;">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
