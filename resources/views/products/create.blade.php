<x-app-layout>
    <div class="container mt-5">
        <h1>Add Product</h1>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Kode Barang</label>
                <input type="text"
                       name="kode_barang"
                       class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Barang</label>
                <input type="text"
                       name="nama_barang"
                       class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number"
                       name="harga"
                       class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Satuan</label>
                <input type="text"
                       name="satuan"
                       class="form-control">
            </div>

           <div class="mb-3">
    <label class="form-label">Stock</label>
    <input type="number" name="stock" class="form-control" required>
</div>

            

            <button type="submit" class="btn btn-primary">
                Save Product
            </button>
        </form>
    </div>
</x-app-layout>