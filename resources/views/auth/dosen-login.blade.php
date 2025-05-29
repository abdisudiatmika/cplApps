@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h3>Login Dosen</h3>

    @if($errors->any())
        <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="{{ route('dosen.login') }}">
        @csrf
        <div class="mb-3">
            <label for="nidn" class="form-label">NIDN</label>
            <input type="text" class="form-control" name="nidn" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
@endsection
