<x-app-layout>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-start mb-3">
            <div>
                <h1>Users</h1>
                <p>List all registered users</p>
            </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">
                Logout
            </button>
        </form>
        </div>
        <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">
            Add User
        </a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th width="180">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}"
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('users.destroy', $user->id) }}"
                                method="POST"
                                style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                            <button type="submit"
                                class="btn btn-danger btn-sm"> 
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