@extends('layouts.app')

@section('content')
    <h1 align="center">Data Produk</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div align="center">
        <a href="{{ route('products.create') }}" class="btn btn-success mb-3">Tambah Produk</a>
        <a href="{{ route('products.index') }}" class="btn btn-primary mb-3">Semua Data Produk</a>
        <a href="{{ route('products.available') }}" class="btn btn-primary mb-3">Available Stock</a>
        <a href="{{ route('products.unavailable') }}" class="btn btn-primary mb-3">Unavailable Stock</a>
    </div>

    <table class="table table-primary table-striped">
        <thead align="center">
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody  align="center">
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ "Rp. ".$product->price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary btn-sm">Detail</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success btn-sm">Edit</a>
                        <a href="{{ route('products.updateStockForm', ['id' => $product->id]) }}" class="btn btn-info btn-sm">Kelola Stok</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin Untuk Menghapusnya?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
