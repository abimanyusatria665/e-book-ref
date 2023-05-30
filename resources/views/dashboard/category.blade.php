@extends('layout.dashboard_layout')
@section('dashboard')
    <div class="container" style="margin-top: 100px">
      <div class="card bg-success">
        <form action="{{ route('category') }}" method="post" class="d-flex">
          @csrf
          @method('POST')
          <div class="col-8 my-4 offset-2">
            <h1 class="text-white">Create category</h1>
            <label for="" class="text-white">Category</label>
            <input type="text" class="form-control" name="category_name">
            <button type="submit" class="btn btn-primary mt-3">Create Category</button>
          </div>
        </form>
      </div>
      <table class="table table-success table-striped mt-3">
        <tr>
          <th>Id</th>
          <th>Category Name</th>
        </tr>
        @foreach($category as $item )
        <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->category_name }}</td>
        </tr>
        @endforeach
      </table>
    </div>

    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
  </body>
</html>
@endsection
