<x-app-layout>
    <div class="container mt-5">
        <h1>Edit Customer</h1>
        <form action="{{ route('customers.update', $customer->kode) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Kode</label>
                <input type="text"
                       name="kode"
                       class="form-control"
                       value="{{ $customer->kode }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text"
                       name="nama"
                       class="form-control"
                       value="{{ $customer->nama }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text"
                       name="alamat"
                       class="form-control"
                       value="{{ $customer->alamat }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Telepon</label>
                <input type="text"
                       name="telepon"
                       class="form-control"
                       value="{{ $customer->telepon }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email"
                       name="email"
                       class="form-control"
                       value="{{ $customer->email }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Customer</button>
            <a href="{{ route('customers.index') }}"
               class="btn btn-secondary">
                Kembali
            </a>
        </form>
    </div>
</x-app-layout>