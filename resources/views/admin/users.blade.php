<x-app-layout>

    <div class="container mt-5">

        <h1>Users</h1>
        <p>List all registered users</p>

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

                            <button class="btn btn-danger btn-sm">
                                Delete
                            </button>

                        </td>
                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</x-app-layout>