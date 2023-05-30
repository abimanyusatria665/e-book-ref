@extends('layout.dashboard_layout')
@section('dashboard')
    <div class="container" style="margin-top: 100px">
      <div class="card bg-success">
        <form action="{{ route('store') }}" method="post" class="d-flex" enctype="multipart/form-data">
          @csrf
          @method('POST')
          <div class="col-8 my-4 offset-2">
            <h1 class="text-white">Create Book</h1>
            <label for="title" class="text-white">Title</label>
            <input type="text" id="title" name="title" class="form-control" />
            <label for="writer" class="text-white">Writer</label>
            <input type="text" id="writer" name="writer" class="form-control" />
            <label for="publisher" class="text-white">Publisher</label>
            <input
              type="text"
              id="publisher"
              name="publisher"
              class="form-control"
            />
            <label for="" class="text-white">Category</label>
            <select name="category" id="" class="form-control">
                @foreach( $category as $item)
                  <option value="{{ $item->category_name }}">{{ $item->category_name }}</option>
                @endforeach
            </select>
            <label for="isbn" class="text-white">No ISBN</label>
            <input type="text" class="form-control" name="isbn" />
            <label for="synopsis" class="text-white">Synopsis</label>
            <textarea
              name="synopsis"
              id=""
              cols="30"
              rows="5"
              class="form-control"
            ></textarea>
            <label for="cover" class="text-white">Cover</label>
            <input type="file" class="form-control" name="image" />
            <label for="pdf" class="text-white">Book Content</label>
            <input type="file" class="form-control" name="contentBook" />
            <button class="btn btn-primary col-2 mt-4" type='submit'>Create</button>
          </div>
        </form>
      </div>
    </div>
@endsection
