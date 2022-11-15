@extends('layouts.auth', ['title' => 'Login'])

@section('content')
<form action="{{ route('processLogin') }}" method="POST">
    @csrf
    <div class="form-group mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>
    <div class="d-flex align-items-center justify-content-between mt-3">
        <span>Belum punya akun? <a href="{{ route('register') }}">Register</a></span>
        <button type="submit" class="btn btn-primary float-end">Login</button>
    </div>
</form>
@endsection
