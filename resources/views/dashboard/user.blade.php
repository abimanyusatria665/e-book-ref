@extends('layout.dashboard_layout')
@section('dashboard')
    <div class="container mt-5">
        <h1>User's Data</h1>
        <table class="table table-success table-striped" >
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Download</th>
            </tr>
            @foreach($userData as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->download }}</td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection


