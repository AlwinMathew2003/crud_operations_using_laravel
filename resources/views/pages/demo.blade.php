@extends('layout.frontend')

@section('content')

@if(session('status'))
<div class="alert alert-success">{{ session('status') }}</div>
@endif

<div class="container mt-5">
    <h2>User Table</h2>

    <!-- Button to Add User -->
    <a href="{{ url('create')}}" class="btn btn-primary mb-3">Add User</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th> <!-- Added Actions column -->
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <!-- Button to Edit User -->
                        <a href="{{ url('update/'.$user->id)}}" class="btn btn-warning btn-sm">Edit</a>
                        
                        <!-- Button to Delete User -->
                        <form action="{{ url('delete/'.$user->id)}}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?');">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
