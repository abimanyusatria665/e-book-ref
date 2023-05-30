@extends('layout.layout')
@section('content')
        <!-- Start Content -->
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-10 offset-1">
          <div class="row">
            <div class="col-md-6 pb-4">
              <div class="d-flex">
                <select class="form-control">
                  <option>Category</option>
                  @foreach($categories as $category)
                    <option>{{ $category->category_name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            @foreach($books as $book)
            <div class="col-md-4">
              <div class="card mb-4 product-wap rounded-0">
                <div class="card rounded-0">
                  <img
                    class="card-img rounded-0 img-fluid"
                    src="/images/{{ $book->cover }}"
                  />
                  <div
                    class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center"
                  >
                    <ul class="list-unstyled">
                      <li>
                        <a
                          class="btn btn-success text-white mt-2"
                          href="/detail/{{ $book->id }}"
                          ><i class="far fa-eye"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-body">
                  <a href="shop-single.html" class="h3 text-decoration-none"
                    ><h3 class="text-success">{{ $book->title }}</h3></a
                  >
                  <p class="mb-0">
                    {{ Str::words($book->synopsis, 10)  }}
                  </p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <!-- <div div="row">
            <ul class="pagination pagination-lg justify-content-end">
              <li class="page-item disabled">
                <a
                  class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0"
                  href="#"
                  tabindex="-1"
                  >1</a
                >
              </li>
              <li class="page-item">
                <a
                  class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark"
                  href="#"
                  >2</a
                >
              </li>
              <li class="page-item">
                <a
                  class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark"
                  href="#"
                  >3</a
                >
              </li>
            </ul>
          </div> -->
        </div>
      </div>
    </div>
    <!-- End Content -->

    <!-- Start Brands -->
    <section class="bg-light py-5">
      <div class="container my-4">
        <div class="row text-center py-3">
          <div class="col-lg-6 m-auto">
            <h1 class="h1">Our Brands</h1>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod Lorem ipsum dolor sit amet.
            </p>
          </div>
          <div class="col-lg-9 m-auto tempaltemo-carousel">
            <div class="row d-flex flex-row">
              <!--Controls-->
              <div class="col-1 align-self-center">
                <a
                  class="h1"
                  href="#multi-item-example"
                  role="button"
                  data-bs-slide="prev"
                >
                  <i class="text-light fas fa-chevron-left"></i>
                </a>
              </div>
              <!--End Controls-->

              <!--Carousel Wrapper-->
              <div class="col">
                <div
                  class="carousel slide carousel-multi-item pt-2 pt-md-0"
                  id="multi-item-example"
                  data-bs-ride="carousel"
                >
                  <!--Slides-->
                  <div class="carousel-inner product-links-wap" role="listbox">
                    <!--First slide-->
                    <div class="carousel-item active">
                      <div class="row">
                        <div class="col-3 p-md-5">
                          <a href="#"
                            ><img
                              class="img-fluid brand-img"
                              src="assets/img/brand_01.png"
                              alt="Brand Logo"
                          /></a>
                        </div>
                        <div class="col-3 p-md-5">
                          <a href="#"
                            ><img
                              class="img-fluid brand-img"
                              src="assets/img/brand_02.png"
                              alt="Brand Logo"
                          /></a>
                        </div>
                        <div class="col-3 p-md-5">
                          <a href="#"
                            ><img
                              class="img-fluid brand-img"
                              src="assets/img/brand_03.png"
                              alt="Brand Logo"
                          /></a>
                        </div>
                        <div class="col-3 p-md-5">
                          <a href="#"
                            ><img
                              class="img-fluid brand-img"
                              src="assets/img/brand_04.png"
                              alt="Brand Logo"
                          /></a>
                        </div>
                      </div>
                    </div>
                    <!--End First slide-->

                    <!--Second slide-->
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col-3 p-md-5">
                          <a href="#"
                            ><img
                              class="img-fluid brand-img"
                              src="assets/img/brand_01.png"
                              alt="Brand Logo"
                          /></a>
                        </div>
                        <div class="col-3 p-md-5">
                          <a href="#"
                            ><img
                              class="img-fluid brand-img"
                              src="assets/img/brand_02.png"
                              alt="Brand Logo"
                          /></a>
                        </div>
                        <div class="col-3 p-md-5">
                          <a href="#"
                            ><img
                              class="img-fluid brand-img"
                              src="assets/img/brand_03.png"
                              alt="Brand Logo"
                          /></a>
                        </div>
                        <div class="col-3 p-md-5">
                          <a href="#"
                            ><img
                              class="img-fluid brand-img"
                              src="assets/img/brand_04.png"
                              alt="Brand Logo"
                          /></a>
                        </div>
                      </div>
                    </div>
                    <!--End Second slide-->

                    <!--Third slide-->
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col-3 p-md-5">
                          <a href="#"
                            ><img
                              class="img-fluid brand-img"
                              src="assets/img/brand_01.png"
                              alt="Brand Logo"
                          /></a>
                        </div>
                        <div class="col-3 p-md-5">
                          <a href="#"
                            ><img
                              class="img-fluid brand-img"
                              src="assets/img/brand_02.png"
                              alt="Brand Logo"
                          /></a>
                        </div>
                        <div class="col-3 p-md-5">
                          <a href="#"
                            ><img
                              class="img-fluid brand-img"
                              src="assets/img/brand_03.png"
                              alt="Brand Logo"
                          /></a>
                        </div>
                        <div class="col-3 p-md-5">
                          <a href="#"
                            ><img
                              class="img-fluid brand-img"
                              src="assets/img/brand_04.png"
                              alt="Brand Logo"
                          /></a>
                        </div>
                      </div>
                    </div>
                    <!--End Third slide-->
                  </div>
                  <!--End Slides-->
                </div>
              </div>
              <!--End Carousel Wrapper-->

              <!--Controls-->
              <div class="col-1 align-self-center">
                <a
                  class="h1"
                  href="#multi-item-example"
                  role="button"
                  data-bs-slide="next"
                >
                  <i class="text-light fas fa-chevron-right"></i>
                </a>
              </div>
              <!--End Controls-->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Brands-->
@endsection