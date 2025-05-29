@extends('template')

@section('content')
<div class="container-fluid">
    <h3 class="mb-4">Daftar Dosen</h3>
    <a href="{{ route('pengajar.create') }}" class="btn btn-primary mb-3">+ Tambah Dosen</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table-primary">
            <tr>
                <th>NIDN</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Mata Kuliah Diampu</th>
                <th width="220">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($dosens as $dosen)
                <tr>
                    <td>{{ $dosen->nidn }}</td>
                    <td>{{ $dosen->nama }}</td>
                    <td>{{ $dosen->email }}</td>
                    <td>
                        @foreach($dosen->mataKuliahs as $mk)
                            <span class="badge bg-primary">{{ $mk->nama_mk }}</span><br>
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ route('dosen.assign.form', $dosen->id) }}" class="btn btn-info btn-sm">
                            Atur Mata Kuliah
                        </a>

                        <a href="{{ route('pengajar.edit', $dosen->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('pengajar.destroy', $dosen->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada data dosen</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
