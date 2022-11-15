@extends('layouts.admin')

@section('content')
<a href="{{ route('admin.category.index') }}" class="btn btn-warning btn-sm text-white mb-4">Kembali</a>
{{-- @include('components.alert') --}}
<div class="card">
    <div class="card-body">
        <h3 class="mb-4">Edit Kategori</h3>
        <form action="" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}">
            </div>
            <div class="form-group mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea name="description" id="description" cols="30" rows="5" class="form-control">{{ $category->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary float-end text-white">Edit Kategori</button>
        </form>
    </div>
</div>
@endsection
