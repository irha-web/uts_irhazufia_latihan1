@extends('layouts.app')

@section('content')
<div class="container">

    <h2 class="mb-3 text-primary">Data Products</h2>

    {{-- tombol tambah --}}
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">
        + Tambah Product
    </a>

    {{-- alert sukses --}}
    @if(session('success'))
        <div class="alert alert-primary">
            {{ session('success') }}
        </div>
    @endif

    {{-- tabel --}}
    <table class="table table-bordered table-striped">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Satuan</th>
                <th>Harga</th>
                <th width="150px">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($products as $key => $p)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $p->kode }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->satuan }}</td>
                <td>Rp {{ number_format($p->harga) }}</td>
                <td>
                    <a href="{{ route('products.edit', $p->id) }}" class="btn btn-sm btn-primary">
                        Edit
                    </a>

                    <form action="{{ route('products.destroy', $p->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>
@endsection