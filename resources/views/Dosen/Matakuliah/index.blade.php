@extends('template')
@section('content')
<div class="container-fluid">
    <h4 class="mb-4">Mata Kuliah yang Diampu</h4>

    <div class="list-group">
        @forelse ($mataKuliahs as $mk)
            <a href="#" class="list-group-item list-group-item-action">
                <strong>{{ $mk->kode_mk }}</strong> - {{ $mk->nama_mk }}
            </a>
        @empty
            <div class="alert alert-warning">Belum ada mata kuliah yang diampu.</div>
        @endforelse
    </div>
</div>
@endsection
