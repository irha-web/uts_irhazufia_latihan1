<x-app-layout>
    <div class="container mt-5">
        <h1>Edit Product</h1>
        <form action="{{ route('products.update', $products->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Kode Barang</label>
                <input type="text"
                       name="kode_barang"
                       class="form-control"
                       value="{{ $products->kode_barang }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Barang</label>
                <input type="text"
                       name="nama_barang"
                       class="form-control"
                       value="{{ $products->nama_barang }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number"
                       name="harga"
                       class="form-control"
                       value="{{ $products->harga }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Satuan</label>
                <input type="text"
                       name="satuan"
                       class="form-control"
                       value="{{ $products->satuan }}">
            </div>

            <button type="submit" class="btn btn-primary">
                Update Product
            </button>
        </form>
    </div>
</x-app-layout>