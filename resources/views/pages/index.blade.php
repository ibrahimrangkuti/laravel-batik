@extends('layouts.main')

@section('content')
<div class="row mt-5">
    <div class="col-md-3">
        <div class="row">
            <form action="{{ route('home') }}" method="GET">
                <div class="input-group mb-3">
                    <input type="search" name="search" id="search" class="form-control" placeholder="Cari produk...">
                    <button type="submit" class="btn btn-outline-secondary">Search</button>
                </div>
            </form>
            <div class="mt-3">
                <h6>Kategori</h6>
                <ul class="navbar-nav mb-3">
                    @foreach ($categories as $category)
                    <li class="nav-item mb-1">
                        <a href="{{ route('category', $category->slug) }}">{{ $category->name }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <a href="">
                        <img src="{{ asset($product->img_url) }}" alt="" class="card-img-top" width="300" height="300">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <a href="" class="btn btn-primary float-end">Pesan</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
