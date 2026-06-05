<x-app-admin>
<div class="container mt-5">
    <h1>Data Customer</h1>
    <p>List all customers</p>
    <a href="{{ route('customers.create') }}" class="btn btn-primary mb-3">Add Customer</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $item)
            <tr>
                <td>{{ $item->kode }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->telepon }}</td>
                <td>{{ $item->email }}</td>
            
            <td>
                <a href="{{ route('customers.edit', $item->kode) }}"
                   class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('customers.destroy', $item->kode) }}"
                      method="POST"
                      style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-app-admin>