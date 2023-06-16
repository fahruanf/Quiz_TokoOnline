@extends('layouts.app')

@section('content')
    <h1 align="center">Produk Detail</h1>

    <div class="card">
        <div class="card-body">
            <p class="card-text"><strong>Nama Produk:</strong> {{ $product->name }}</p>
            <p class="card-text"><strong>Harga:</strong> {{ "Rp. ".$product->price }}</p>
            <p class="card-text"><strong>Stok:</strong> {{ $product->stock }}</p>
        </div>
    </div>

    <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Kembali</a>
@endsection
