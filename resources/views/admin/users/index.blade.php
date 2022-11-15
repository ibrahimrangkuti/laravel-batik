@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-body">
        <h3 class="mb-4">Data User</h3>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Avatar</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if($users->count() < 1)
                    <tr>
                        <td colspan="7" class="text-center">Data tidak ditemukan!</td>
                    </tr>
                    @endif
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>haha.jpg</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->address }}</td>
                        <td>
                            <a type="button" class="btn btn-primary btn-sm text-white" data-bs-toggle="modal" data-bs-target="#detailModal{{ $user->id }}" data-userid="{{ $user->id }}">Detail</a>
                            <a href="" class="btn btn-danger btn-sm text-white">Hapus</a>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="detailModal{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Detail User</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <label for="" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" value="{{ $user->name }}" disabled>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="" class="form-label">Email</label>
                                    <input type="text" class="form-control" value="{{ $user->email }}" disabled>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="" class="form-label">No HP</label>
                                    <input type="text" class="form-control" value="{{ $user->phone }}" disabled>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="" class="form-label">Alamat</label>
                                    <textarea cols="30" rows="5" class="form-control" disabled>{{ $user->address }}</textarea>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
