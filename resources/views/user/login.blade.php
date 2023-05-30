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
    <!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
  </head>
  <body style="background-color: rgb(108, 147, 108)">
    <div class="container" style="margin-top: 220px">
      <div class="col-8 offset-2 mt-5 card">
        <div class="row">
          <div class="col-6 mt-5 mb-5">
            <div class="col-10 offset-1">
              <form action="/login/auth" method="post">
                @csrf
                <label for="email">Email</label>
                <input
                  type="email"
                  name="email"
                  id="email"
                  class="form-control"
                />
                <label for="password">Password</label>
                <input
                  type="password"
                  name="password"
                  id="password"
                  class="form-control"
                />
                <button type="submit" class="btn btn-success mt-3">
                  Login
                </button>
              </form>
            </div>
          </div>
          <div class="col-6">
            <img src="assets/img/Reading glasses-pana.svg" alt="" />
          </div>
        </div>
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
