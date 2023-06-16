@extends('layouts.app')

@section('content')
    <h1>Unavailable Stock</h1>

    <table class="table">
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

    <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Kembali</a>
@endsection
