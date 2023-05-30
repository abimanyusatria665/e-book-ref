<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif
        @if (Session::has('success'))
                <div class="container alert alert-success">
                  <h2 class="text-center text-success">{{ Session::get('success') }}</h2>
                </div>
        @endif
        @if (Session::has('successBook'))
                <div class="container alert alert-success">
                  <h2 class="text-center text-success">{{ Session::get('successBook') }}</h2>
                </div>
        @endif
        <nav class="navbar navbar-expand-lg bg-success">
        <div class="container">
              <a class="navbar-brand text-white" href="#"><h2>Booku Dashboard</h2></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="/"><h6>home</h6></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="/user/data"><h6>User</h6></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="/book/data"><h6>Books</h6></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="/category"><h6>Category</h6></a>
                  </li>
              </ul>
            </div>
        </div>
        </nav>   
        @yield('dashboard') 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>