@extends('layout.layout')
@section('content')
    @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
    @endif
     <!-- Open Content -->
    <section class="bg-light">
      <div class="container pb-5">
        <div class="row">
          <div class="col-lg-4 mt-5">
            <div class="card mb-3">
              <img
                class="card-img img-fluid"
                src="/images/{{ $detail->cover }}"

              />
            </div>
          </div>
          <!-- col end -->
          <div class="col-lg-8 mt-5">
            <div class="card">
              <div class="card-body">
                <h1 class="h2">{{ $detail->title }}</h1>
                <h6>Writer :  {{ $detail->writer }}</h6>
                <h6>Publisher : {{ $detail->publisher }}</h6>
                <h6>ISBN : {{ $detail->isbn }}</h6>
                <h6>Synopsis :</h6>
                <p>
                  {{ $detail->synopsis }}
                </p>
                  <div class="row">
                    <div class="col-auto">
                      <ul class="list-inline pb-3">
                        <li class="list-inline-item">
                          Category
                          <input
                            type="hidden"
                            name="product-size"
                            id="product-size"
                            value="S"
                          />
                        </li>

                        <li class="list-inline-item">
                          <span class="btn btn-success btn-size">{{ $detail->category }}</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="row pb-3">
                    <div class="col d-grid">
                    <form action="{{ route('download', $detail->id )}}" method="post">
                      @csrf
                      <button
                        type="submit"
                        class="btn btn-success btn-lg"
                        name="submit"
                        value="addtocard"
                      >
                        Download
                      </button>
                    </form>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Close Content -->

    <!-- Start Article -->
    <section class="py-5">
      <div class="container">
        <div class="row text-left p-2 pb-3">
          <h4>More Books</h4>
        </div>

        <!--Start Carousel Wrapper-->
        <div id="carousel-related-product">
          <div class="p-2 pb-3">
            <div class="product-wap card rounded-0">
              <div class="card rounded-0">
                <img
                  class="card-img rounded-0 img-fluid"
                  src="{{ asset('assets/img/banner_img_02.jpg') }}"
                />
                <div
                  class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center"
                >
                  <ul class="list-unstyled">
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"
                        ><i class="far fa-eye"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <a href="shop-single.html" class="h3 text-decoration-none"
                  ><h5>Filosofi Teras</h5></a
                >
                <p class="mb-0">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Illum, distinctio!
                </p>
              </div>
            </div>
          </div>
                    <div class="p-2 pb-3">
            <div class="product-wap card rounded-0">
              <div class="card rounded-0">
                <img
                  class="card-img rounded-0 img-fluid"
                  src="{{ asset('assets/img/banner_img_02.jpg') }}"
                />
                <div
                  class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center"
                >
                  <ul class="list-unstyled">
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"
                        ><i class="far fa-eye"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <a href="shop-single.html" class="h3 text-decoration-none"
                  ><h5>Filosofi Teras</h5></a
                >
                <p class="mb-0">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Illum, distinctio!
                </p>
              </div>
            </div>
          </div>
                    <div class="p-2 pb-3">
            <div class="product-wap card rounded-0">
              <div class="card rounded-0">
                <img
                  class="card-img rounded-0 img-fluid"
                  src="{{ asset('assets/img/banner_img_02.jpg') }}"
                />
                <div
                  class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center"
                >
                  <ul class="list-unstyled">
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"
                        ><i class="far fa-eye"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <a href="shop-single.html" class="h3 text-decoration-none"
                  ><h5>Filosofi Teras</h5></a
                >
                <p class="mb-0">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Illum, distinctio!
                </p>
              </div>
            </div>
          </div>
                    <div class="p-2 pb-3">
            <div class="product-wap card rounded-0">
              <div class="card rounded-0">
                <img
                  class="card-img rounded-0 img-fluid"
                  src="{{ asset('assets/img/banner_img_02.jpg') }}"
                />
                <div
                  class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center"
                >
                  <ul class="list-unstyled">
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"
                        ><i class="far fa-eye"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <a href="shop-single.html" class="h3 text-decoration-none"
                  ><h5>Filosofi Teras</h5></a
                >
                <p class="mb-0">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Illum, distinctio!
                </p>
              </div>
            </div>
          </div>
                    <div class="p-2 pb-3">
            <div class="product-wap card rounded-0">
              <div class="card rounded-0">
                <img
                  class="card-img rounded-0 img-fluid"
                  src="{{ asset('assets/img/banner_img_02.jpg') }}"
                />
                <div
                  class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center"
                >
                  <ul class="list-unstyled">
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"
                        ><i class="far fa-eye"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <a href="shop-single.html" class="h3 text-decoration-none"
                  ><h5>Filosofi Teras</h5></a
                >
                <p class="mb-0">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Illum, distinctio!
                </p>
              </div>
            </div>
          </div>
                    <div class="p-2 pb-3">
            <div class="product-wap card rounded-0">
              <div class="card rounded-0">
                <img
                  class="card-img rounded-0 img-fluid"
                  src="{{ asset('assets/img/banner_img_02.jpg') }}"
                />
                <div
                  class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center"
                >
                  <ul class="list-unstyled">
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"
                        ><i class="far fa-eye"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <a href="shop-single.html" class="h3 text-decoration-none"
                  ><h5>Filosofi Teras</h5></a
                >
                <p class="mb-0">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Illum, distinctio!
                </p>
              </div>
            </div>
          </div>
                    <div class="p-2 pb-3">
            <div class="product-wap card rounded-0">
              <div class="card rounded-0">
                <img
                  class="card-img rounded-0 img-fluid"
                  src="{{ asset('assets/img/banner_img_02.jpg') }}"
                />
                <div
                  class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center"
                >
                  <ul class="list-unstyled">
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"
                        ><i class="far fa-eye"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <a href="shop-single.html" class="h3 text-decoration-none"
                  ><h5>Filosofi Teras</h5></a
                >
                <p class="mb-0">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Illum, distinctio!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
