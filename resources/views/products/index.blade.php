@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Product List</h1>
        <ul>
            @foreach ($products as $product)
                <li>
                    <strong>{{ $product['name'] }}</strong> - {{ $product['description'] }} - ${{ $product['price'] }}
                </li>
            @endforeach
        </ul>
    </div>
@endsection
