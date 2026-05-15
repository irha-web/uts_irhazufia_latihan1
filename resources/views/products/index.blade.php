<x-app-layout>

    <div class="container mt-5">

        <div class="d-flex justify-content-between align-items-start mb-3">

            <div>
                <h1>Products</h1>
            </div>

            <form action="{{ route('logout') }}" method="POST">

                @csrf

                <button type="submit" class="btn btn-danger">
                    Logout
                </button>

            </form>

        </div>

        <a href="{{ route('products.create') }}"
           class="btn btn-primary mb-3">

            Add Product

        </a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Satuan</th>
                    <th width="180">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->kode_barang }}</td>
                        <td>{{ $item->nama_barang }}</td>
                        <td>{{ $item->harga }}</td>
                        <td>{{ $item->satuan }}</td>
                        <td>
                            <a href="{{ route('products.edit', $item->id) }}"
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('products.destroy', $item->id) }}"
                                  method="POST"
                                  style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>