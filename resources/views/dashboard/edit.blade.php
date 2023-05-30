<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Booku</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png" />

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/templatemo.css" />
    <link rel="stylesheet" href="assets/css/custom.css" />

    <!-- Load fonts style after rendering the layout styles -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap"
    />
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
    
  </head>
    @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
    @endif
  <body style="background-color: rgb(74, 134, 74)">
    <div class="container" style="margin-top: 100px">
      <div class="card bg-success">
        <form action="{{ route('store') }}" method="post" class="d-flex" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="col-8 my-4 offset-2">
            <h1 class="text-white">Create Book</h1>
            <label for="title" class="text-white">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $books['title'] }}"/>
            <label for="writer" class="text-white">Writer</label>
            <input type="text" id="writer" name="writer" class="form-control" value="{{ $books['writer'] }}"/>
            <label for="publisher" class="text-white">Publisher</label>
            <input
              type="text"
              id="publisher"
              name="publisher"
              class="form-control"
              value="{{ $books['publisher'] }}"
            />
            <label for="" class="text-white">Category</label>
            <select name="category" id="" class="form-control">
                <option value="novel">novel</option>
            </select>
            <label for="isbn" class="text-white">No ISBN</label>
            <input type="text" class="form-control" name="isbn" value="{{ $books['isbn'] }}"/>
            <label for="synopsis" class="text-white">Synopsis</label>
            <textarea
              name="synopsis"
              id=""
              cols="30"
              rows="5"
              class="form-control"
            >{{ $books->['synopsis'] }}</textarea>
            <label for="cover" class="text-white">Cover</label>
            <input type="file" class="form-control" name="image" value="{{ $books['cover'] }}"/>
            <button class="btn btn-primary col-2 mt-4" type='submit'>Edit</button>
          </div>
        </form>
      </div>
    </div>

    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
  </body>
</html>
