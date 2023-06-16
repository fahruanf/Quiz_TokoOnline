@extends('layouts.app')

@section('content')
    <h1 align="center">Unavailable Stock</h1>

    <div align="center">
        <a href="{{ route('products.create') }}" class="btn btn-success mb-3">Tambah Produk</a>
        <a href="{{ route('products.index') }}" class="btn btn-primary mb-3">Semua Data Produk</a>
        <a href="{{ route('products.available') }}" class="btn btn-primary mb-3">Available Stock</a>
        <a href="{{ route('products.unavailable') }}" class="btn btn-primary mb-3">Unavailable Stock</a>
    </div>

    <table class="table table-primary table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach($unavailableProducts as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ "Rp. ".$product->price }}</td>
                    <td>{{ $product->stock }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
