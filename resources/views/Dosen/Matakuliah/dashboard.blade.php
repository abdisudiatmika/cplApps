@extends('template')
@section('content')
<div class="container py-4">
    <h3 class="mb-4">Mata Kuliah Diampu oleh <strong>{{ $dosen->nama }}</strong></h3>

    <div class="row">
        @forelse ($mataKuliahs as $mk)
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $mk->kode_mk }}</h5>
                        <p class="card-text">{{ $mk->nama_mk }}</p>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-muted">Belum ada mata kuliah yang diampu.</p>
        @endforelse
    </div>
</div>
@endsection
