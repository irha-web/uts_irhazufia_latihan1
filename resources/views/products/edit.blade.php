@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Kode</label>

            <input type="text"
                   name="kode"
                   class="form-control"
                   value="{{ $product->kode }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Nama</label>

            <input type="text"
                   name="nama"
                   class="form-control"
                   value="{{ $product->nama }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Satuan</label>

            <input type="text"
                   name="satuan"
                   class="form-control"
                   value="{{ $product->satuan }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Harga</label>

            <input type="number"
                   name="harga"
                   class="form-control"
                   value="{{ $product->harga }}">
        </div>

        <button type="submit" class="btn btn-primary">
            Update
        </button>

        <a href="{{ route('products.index') }}"
           class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

@endsection