@extends('template')

@section('content')
<div class="container">
    <h3>Edit CPL</h3>

    <form action="{{ route('cpl.update', $cpl->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Kode CPL</label>
            <input type="text" name="kode_cpl" class="form-control" value="{{ $cpl->kode_cpl }}" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required>{{ $cpl->deskripsi }}</textarea>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
