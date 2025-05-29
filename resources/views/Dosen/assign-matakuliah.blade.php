@extends('template')

@section('content')
<div class="container">
    <h3>Atur Mata Kuliah untuk Dosen: <strong>{{ $dosen->nama }}</strong></h3>

    <form action="{{ route('dosen.assign', $dosen->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            @foreach($mataKuliahs as $mk)
                <div class="form-check">
                    <input type="checkbox" name="mata_kuliah_ids[]" value="{{ $mk->id }}"
                           class="form-check-input"
                           {{ in_array($mk->id, $assigned) ? 'checked' : '' }}>
                    <label class="form-check-label">
                        {{ $mk->kode_mk }} - {{ $mk->nama_mk }}
                    </label>
                </div>
            @endforeach
        </div>

        <button class="btn btn-primary">Simpan</button>
        <a href="{{ route('pengajar.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
