@extends('layouts.app')

@section('title', 'Product List')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-4">Featured Products</h1>
        
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-0">
                        <img src="{{ $product['image'] }}" class="card-img-top" alt="{{ $product['name'] }}">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $product['name'] }}</h5>
                            <p class="text-muted">{{ $product['category'] }}</p>
                            <p class="card-text">{{ $product['description'] }}</p>
                            <h5 class="text-primary">${{ $product['price'] }}</h5>
                            <a href="#" class="btn btn-dark mt-2">Buy Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
