@extends('layout.dashboard_layout')
@section('dashboard')
        <div class="container mt-5">
    <a href="/create" class="btn btn-success">Create Book</a>
        <a href="{{ route('export') }}" class="btn btn-success">Export To Excel</a>
    <h1>Book's Data</h1>
    <table class="table table-success table-striped" >
        <tr>
            <th>Cover</th>
            <th>Title</th>
            <th>Writer</th>
            <th>Publisher</th>
            <th>Category</th>
            <th style="width: 200px">ISBN</th>
            <th>Synopsis</th>
            <th>Action</th>
        </tr>
        @foreach($books as $book)
        <tr>
            <td><img src="/images/{{ $book->cover }}" alt="" style="width: 100px"></td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->writer }}</td>
            <td>{{ $book->publisher }}</td>
            <td>{{ $book->category }}</td>
            <td>{{ $book->isbn }}</td>
            <td>{{ $book->synopsis }}</td> 
            <td class="align-items-center">
                <form action="/book/delete/{{ $book->id }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger my-2">Delete</button>
                </form>

            </td>
        </tr>
        @endforeach
    </table>
    </div>
@endsection


