@extends('layouts.app')

@section('content')
    <h1 align="center">Update Stock</h1>

    <form action="{{ route('products.updateStock', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="stock">Jumlah Stok Baru</label>
            <input type="number" name="stock" id="stock" class="form-control" value="{{ $product->stock }}">
        </div><br>
        <button type="submit" class="btn btn-primary">Update Stock</button>
    </form>
@endsection
