@extends('layout.layout')
@section('content')
    <!-- Start Banner Hero -->
    <div
      id="template-mo-zay-hero-carousel"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <ol class="carousel-indicators">
        <li
          data-bs-target="#template-mo-zay-hero-carousel"
          data-bs-slide-to="0"
          class="active"
        ></li>
        <li
          data-bs-target="#template-mo-zay-hero-carousel"
          data-bs-slide-to="1"
        ></li>
        <li
          data-bs-target="#template-mo-zay-hero-carousel"
          data-bs-slide-to="2"
        ></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="row p-5">
              <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                <img
                  class="img-fluid"
                  src="./assets/img/banner_img_01.png"
                  alt=""
                />
              </div>
              <div class="col-lg-6 mb-0 d-flex align-items-center">
                <div class="text-align-left align-self-center">
                  <h1 class="h1 text-success"><b>Booku</b> eLibrary</h1>
                  <h3 class="h2">Read a book to grow your mind</h3>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Omnis vitae autem sequi minima recusandae voluptatem
                    voluptatibus eveniet exercitationem atque at.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row p-5">
              <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                <img
                  class="img-fluid"
                  src="./assets/img/banner_img_02.jpg"
                  alt=""
                  style="margin-left: 200px"
                />
              </div>
              <div class="col-lg-6 mb-0 d-flex align-items-center">
                <div class="text-align-left">
                  <h1 class="h1">Proident occaecat</h1>
                  <h3 class="h2">Aliquip ex ea commodo consequat</h3>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Dicta incidunt, fugit officiis similique eveniet cupiditate
                    consectetur aliquid ducimus quisquam. Ipsa?
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row p-5">
              <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                <img
                  class="img-fluid"
                  src="./assets/img/banner_img_03.jpg"
                  alt=""
                  style="height: 465px; margin-left: 200px"
                />
              </div>
              <div class="col-lg-6 mb-0 d-flex align-items-center">
                <div class="text-align-left">
                  <h1 class="h1">Repr in voluptate</h1>
                  <h3 class="h2">Ullamco laboris nisi ut</h3>
                  <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Soluta laborum ducimus voluptas quod reiciendis amet vero
                    quam nostrum. Quasi eius, dolor qui repudiandae aut saepe
                    nemo assumenda placeat. Dolorem, quidem.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a
        class="carousel-control-prev text-decoration-none w-auto ps-3"
        href="#template-mo-zay-hero-carousel"
        role="button"
        data-bs-slide="prev"
      >
        <i class="fas fa-chevron-left"></i>
      </a>
      <a
        class="carousel-control-next text-decoration-none w-auto pe-3"
        href="#template-mo-zay-hero-carousel"
        role="button"
        data-bs-slide="next"
      >
        <i class="fas fa-chevron-right"></i>
      </a>
    </div>
    <!-- End Banner Hero -->

    <!-- Start Categories of The Month -->
    <section class="container py-5">
      <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
          <h1 class="h1">Book of The Week</h1>
          <p>
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
            officia deserunt mollit anim id est laborum.
          </p>
        </div>
      </div>
      <div class="row">
        @foreach($topBooks as $topBook)
        <div class="col-12 col-md-4 p-5 mt-3 justify-content-center">
          <a href="#"
            ><img src="/images/{{ $topBook->cover }}" class="img-fluid border"
          /></a>
          <h5 class="text-center mt-3 mb-3">{{ $topBook->title }}</h5>
          <p class="text-center"><a class="btn btn-success"  href="/detail/{{ $topBook->id }}">Read</a></p>
        </div>
        @endforeach
      </div>

    </section>
@endsection