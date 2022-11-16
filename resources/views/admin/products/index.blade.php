@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="mb-4">Data Produk</h3>
            <a href="" class="btn btn-primary text-white mb-3">Tambah Produk</a>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <a href="">
                                <img src="{{ asset($product->img_url) }}" alt="" class="card-img-top" width="300"
                                    height="300">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <div class="d-flex justify-content-center mt-4">
                                    <a href="" class="btn btn-success mx-1 text-white">Detail</a>
                                    <a href="" class="btn btn-warning mx-1 text-white">Edit</a>
                                    <a href="" class="btn btn-danger mx-1 text-white">Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
