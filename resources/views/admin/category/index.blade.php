@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-body">
        <h3 class="mb-4">Data Category</h3>
        <a href="{{ route('admin.category.create') }}" class="btn btn-primary text-white mb-4">Tambah Kategori</a>
        {{-- @include('components.alert') --}}
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!$categories->count())
                    <tr>
                        <td colspan="4" class="text-center">Data tidak ditemukan!</td>
                    </tr>
                    @endif
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <form action="{{ route('admin.category.delete', $category->slug) }}" method="POST">
                                @csrf
                                <a href="" class="btn btn-warning btn-sm text-white">Edit</a>
                                <button type="submit" class="btn btn-danger btn-sm text-white">Hapus</button>
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
