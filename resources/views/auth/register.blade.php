@extends('layouts.auth', ['title' => 'Register'])

@section('content')
<form action="{{ route('processRegister') }}" method="POST">
    @csrf
    <div class="form-group mb-3">
        <label for="name" class="form-label">Nama Lengkap</label>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror">
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror">
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="confirmPassword" class="form-label">Konfirmasi Password</label>
        <input type="password" name="confirmPassword" id="confirmPassword" class="form-control">
    </div>
    <div class="d-flex align-items-center justify-content-between mt-3">
        <span>Sudah punya akun? <a href="{{ route('login') }}">Login</a></span>
        <button type="submit" class="btn btn-primary float-end">Register</button>
    </div>
</form>
@endsection
