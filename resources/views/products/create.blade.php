@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h1>Tambah Product</h1>

    <form action="{{ route('products.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label class="form-label">Kode</label>

            <input type="text"
                   name="kode"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Nama</label>

            <input type="text"
                   name="nama"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Satuan</label>

            <input type="text"
                   name="satuan"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Harga</label>

            <input type="number"
                   name="harga"
                   class="form-control">
        </div>

        <button type="submit" class="btn btn-success">
            Simpan
        </button>

        <a href="{{ route('products.index') }}"
           class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

@endsection