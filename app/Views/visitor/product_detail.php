<?= $this->extend('layouts/frontend') ?>

<?= $this->section('content') ?>

      <!-- Main Content -->
      <main class="main-content flex-grow-1">
        <!-- Start Inner Page Banner -->
        <section class="inner-page-banner overflow-hidden">
          <div class="container-xxl">
            <div class="row">
              <!-- Start Inner Page Banner Content -->
              <div class="col-md-6 order-md-2">
                <div
                  class="d-flex align-items-end h-100 position-relative justify-content-end"
                >
                  <div class="inner-page-banner-content text-white">
                    <h1 data-aos="zoom-out" data-aos-delay="600">
                      <span class="badge badge-new">new</span>
                      <span class="text-black">Air</span> Jordan
                    </h1>
                    <h5
                      class="text-end mb-md-4"
                      data-aos="zoom-out"
                      data-aos-delay="800"
                    >
                      2023 Edition
                    </h5>
                    <a
                      href="product.html"
                      class="btn btn-primary rounded-0 text-uppercase"
                      data-aos="flip-left"
                      data-aos-delay="1000"
                    >
                      <span class="text-white">Shop now</span>
                    </a>
                  </div>
                  <img
                    src="assets/frontend/img/inner-page-banner-background.svg"
                    alt=""
                    class="inner-page-banner-background"
                    data-aos="zoom-in-left"
                  />
                </div>
              </div>
              <!-- End Inner Page Banner Content -->
              <!-- Start Inner Page Banner Thumb Slider -->
              <div class="col-md-6">
                <div class="slider-with-thumbnail">
                  <div class="thumb-slider-outer d-none d-md-block">
                    <div thumbsSlider="" class="swiper thumb-slider">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img
                            src="assets/frontend/img/inner-page-slider-img.png"
                            alt=""
                          />
                        </div>
                        <div class="swiper-slide">
                          <img
                            src="assets/frontend/img/inner-page-slider-img.png"
                            alt=""
                          />
                        </div>
                        <div class="swiper-slide">
                          <img
                            src="assets/frontend/img/inner-page-slider-img.png"
                            alt=""
                          />
                        </div>
                        <div class="swiper-slide">
                          <img
                            src="assets/frontend/img/inner-page-slider-img.png"
                            alt=""
                          />
                        </div>
                        <div class="swiper-slide">
                          <img
                            src="assets/frontend/img/inner-page-slider-img.png"
                            alt=""
                          />
                        </div>
                        <div class="swiper-slide">
                          <img
                            src="assets/frontend/img/inner-page-slider-img.png"
                            alt=""
                          />
                        </div>
                        <div class="swiper-slide">
                          <img
                            src="assets/frontend/img/inner-page-slider-img.png"
                            alt=""
                          />
                        </div>
                        <div class="swiper-slide">
                          <img
                            src="assets/frontend/img/inner-page-slider-img.png"
                            alt=""
                          />
                        </div>
                        <div class="swiper-slide">
                          <img
                            src="assets/frontend/img/inner-page-slider-img.png"
                            alt=""
                          />
                        </div>
                        <div class="swiper-slide">
                          <img
                            src="assets/frontend/img/inner-page-slider-img.png"
                            alt=""
                          />
                        </div>
                      </div>
                      <div
                        class="d-inline-flex align-content-center swiper-button-outer"
                      >
                        <div class="swiper-button-prev me-2">
                          <svg
                            width="26"
                            height="22"
                            viewBox="0 0 26 22"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M25.96 10.6587C25.96 11.2561 25.516 11.7498 24.9401 11.8279L24.78 11.8387L4.03713 11.8378L11.5309 19.3009C11.9927 19.7607 11.9943 20.5079 11.5345 20.9697C11.1165 21.3895 10.461 21.429 9.99831 21.0873L9.86572 20.9733L0.347049 11.4955C0.286175 11.4349 0.233302 11.3693 0.188428 11.3C0.175753 11.2792 0.162851 11.2579 0.150619 11.2361C0.139369 11.2174 0.129202 11.1981 0.119611 11.1785C0.10629 11.15 0.0932743 11.1206 0.0814576 11.0905C0.0718559 11.0674 0.0638389 11.0448 0.0565262 11.0221C0.0478324 10.994 0.0393856 10.964 0.0321199 10.9335C0.0267183 10.9123 0.0224404 10.8918 0.0187089 10.8712C0.0134615 10.8407 0.00899498 10.809 0.00580804 10.777C0.00305628 10.7526 0.00139997 10.7284 0.000484449 10.7042C0.00024782 10.6895 -4.97103e-05 10.6741 -4.97103e-05 10.6587L0.000541466 10.613C0.00144598 10.5898 0.00302769 10.5667 0.00528888 10.5436L-4.97103e-05 10.6587C-4.97103e-05 10.5842 0.00684762 10.5114 0.0200383 10.4408C0.0230973 10.4239 0.0267424 10.4066 0.0307785 10.3893C0.0391608 10.3538 0.0488475 10.3196 0.0600012 10.2861C0.0654758 10.2694 0.0718533 10.2516 0.0786698 10.2339C0.0924591 10.1984 0.107447 10.1646 0.123935 10.1316C0.131595 10.1161 0.140174 10.0999 0.149158 10.0838C0.163904 10.0576 0.179095 10.0327 0.195159 10.0084C0.206492 9.99123 0.219042 9.97334 0.232148 9.95574L0.24236 9.94214C0.274151 9.90061 0.308639 9.86125 0.345564 9.82432L0.34698 9.82323L9.86565 0.343888C10.3274 -0.115975 11.0746 -0.114428 11.5344 0.347343C11.9525 0.767136 11.9892 1.42276 11.6455 1.884L11.531 2.01611L4.04027 9.47776L24.78 9.47871C25.4317 9.47871 25.96 10.007 25.96 10.6587Z"
                              fill="#113869"
                            />
                          </svg>
                        </div>
                        <div class="swiper-button-next">
                          <svg
                            width="26"
                            height="22"
                            viewBox="0 0 26 22"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M0 10.6587C0 11.2561 0.443922 11.7498 1.01988 11.8279L1.18 11.8387L21.9228 11.8378L14.4291 19.3009C13.9673 19.7607 13.9656 20.5079 14.4255 20.9697C14.8435 21.3895 15.499 21.429 15.9616 21.0873L16.0942 20.9733L25.6129 11.4955C25.6738 11.4349 25.7267 11.3693 25.7715 11.3C25.7842 11.2792 25.7971 11.2579 25.8093 11.2361C25.8206 11.2174 25.8308 11.1981 25.8403 11.1785C25.8537 11.15 25.8667 11.1206 25.8785 11.0905C25.8881 11.0674 25.8961 11.0448 25.9034 11.0221C25.9121 10.994 25.9206 10.964 25.9278 10.9335C25.9332 10.9123 25.9375 10.8918 25.9413 10.8712C25.9465 10.8407 25.951 10.809 25.9542 10.777C25.9569 10.7526 25.9586 10.7284 25.9595 10.7042C25.9597 10.6895 25.96 10.6741 25.96 10.6587L25.9594 10.613C25.9585 10.5898 25.9569 10.5667 25.9547 10.5436L25.96 10.6587C25.96 10.5842 25.9531 10.5114 25.9399 10.4408C25.9369 10.4239 25.9332 10.4066 25.9292 10.3893C25.9208 10.3538 25.9111 10.3196 25.9 10.2861C25.8945 10.2694 25.8881 10.2516 25.8813 10.2339C25.8675 10.1984 25.8525 10.1646 25.836 10.1316C25.8284 10.1161 25.8198 10.0999 25.8108 10.0838C25.7961 10.0576 25.7809 10.0327 25.7648 10.0084C25.7535 9.99123 25.7409 9.97334 25.7278 9.95574L25.7176 9.94214C25.6858 9.90061 25.6513 9.86125 25.6144 9.82432L25.613 9.82323L16.0943 0.343888C15.6325 -0.115975 14.8854 -0.114428 14.4255 0.347343C14.0075 0.767136 13.9708 1.42276 14.3145 1.884L14.429 2.01611L21.9197 9.47776L1.18 9.47871C0.528304 9.47871 0 10.007 0 10.6587Z"
                              fill="#113869"
                            />
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="swiper main-slider"
                    data-aos="flip-left"
                    data-aos-delay="400"
                  >
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img
                          src="assets/frontend/img/inner-page-slider-img.png"
                          alt=""
                        />
                      </div>
                      <div class="swiper-slide">
                        <img
                          src="assets/frontend/img/inner-page-slider-img.png"
                          alt=""
                        />
                      </div>
                      <div class="swiper-slide">
                        <img
                          src="assets/frontend/img/inner-page-slider-img.png"
                          alt=""
                        />
                      </div>
                      <div class="swiper-slide">
                        <img
                          src="assets/frontend/img/inner-page-slider-img.png"
                          alt=""
                        />
                      </div>
                      <div class="swiper-slide">
                        <img
                          src="assets/frontend/img/inner-page-slider-img.png"
                          alt=""
                        />
                      </div>
                      <div class="swiper-slide">
                        <img
                          src="assets/frontend/img/inner-page-slider-img.png"
                          alt=""
                        />
                      </div>
                      <div class="swiper-slide">
                        <img
                          src="assets/frontend/img/inner-page-slider-img.png"
                          alt=""
                        />
                      </div>
                      <div class="swiper-slide">
                        <img
                          src="assets/frontend/img/inner-page-slider-img.png"
                          alt=""
                        />
                      </div>
                      <div class="swiper-slide">
                        <img
                          src="assets/frontend/img/inner-page-slider-img.png"
                          alt=""
                        />
                      </div>
                      <div class="swiper-slide">
                        <img
                          src="assets/frontend/img/inner-page-slider-img.png"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Inner Page Banner Thumb Slider -->
            </div>
          </div>
        </section>
        <!-- End Inner Page Banner -->

        <!-- Start Filter Block -->
        <section class="filter-block">
          <div class="container-xxl">
            <div class="row justify-content-md-between align-items-center">
              <div class="col-md-auto">
                <ul class="filter-menu">
                  <li>
                    <a href="#" title="Filter"
                      ><img src="assets/frontend/img/ic-filter.svg" alt="Filter" />
                      &nbsp; Filter</a
                    >
                  </li>
                  <li>
                    <a href="#" title="Grid View"
                      ><img src="assets/frontend/img/ic-grid-view.svg" alt="Filter"
                    /></a>
                  </li>
                  <li>
                    <a href="#" title="List View"
                      ><img src="assets/frontend/img/ic-list-view.svg" alt="Filter"
                    /></a>
                  </li>
                  <li class="d-none d-sm-block">|</li>
                  <li class="showing-result-block">
                    Showing 1–16 of 32 results
                  </li>
                </ul>
              </div>
              <div class="col-md-auto mt-3 mt-lg-0">
                <div class="filter-block-right-part">
                  <h6>Show</h6>
                  <input type="text" value="1" class="form-control" />
                  <h6>Sort by</h6>
                  <button
                    type="button"
                    class="btn btn-light rounded-0 text-uppercase"
                  >
                    <span>SHOP NOW</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Filter Block -->

        <div class="container-xxl">
          <!-- Start Product lsit -->
          <section class="product-list">
            <div class="row">
              <div class="col-sm-6 col-lg-4">
                <div class="card" data-aos="flip-right">
                  <div
                    class="card-img-outer d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="assets/frontend/img/product-md-01.png"
                      class="card-img"
                      alt="..."
                    />
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Shorts</h5>
                    <p class="card-text mb-4">
                      Lorem ipsum dolor sit amet, consectetur
                    </p>
                    <div
                      class="d-flex justify-content-between align-items-end flex-wrap"
                    >
                      <span class="price">1.48 USD</span>
                      <button
                        type="button"
                        class="btn btn-primary rounded-0"
                        data-aos="flip-left"
                      >
                        <span class="text-white text-uppercase">Shop now</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card" data-aos="flip-right">
                  <div
                    class="card-img-outer d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="assets/frontend/img/product-md-01.png"
                      class="card-img"
                      alt="..."
                    />
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Shorts</h5>
                    <p class="card-text mb-4">
                      Lorem ipsum dolor sit amet, consectetur
                    </p>
                    <div
                      class="d-flex justify-content-between align-items-end flex-wrap"
                    >
                      <span class="price">1.48 USD</span>
                      <button
                        type="button"
                        class="btn btn-primary rounded-0"
                        data-aos="flip-left"
                      >
                        <span class="text-white text-uppercase">Shop now</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card" data-aos="flip-right">
                  <div
                    class="card-img-outer d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="assets/frontend/img/product-md-01.png"
                      class="card-img"
                      alt="..."
                    />
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Shorts</h5>
                    <p class="card-text mb-4">
                      Lorem ipsum dolor sit amet, consectetur
                    </p>
                    <div
                      class="d-flex justify-content-between align-items-end flex-wrap"
                    >
                      <span class="price">1.48 USD</span>
                      <button
                        type="button"
                        class="btn btn-primary rounded-0"
                        data-aos="flip-left"
                      >
                        <span class="text-white text-uppercase">Shop now</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card" data-aos="flip-right">
                  <div
                    class="card-img-outer d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="assets/frontend/img/product-md-01.png"
                      class="card-img"
                      alt="..."
                    />
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Shorts</h5>
                    <p class="card-text mb-4">
                      Lorem ipsum dolor sit amet, consectetur
                    </p>
                    <div
                      class="d-flex justify-content-between align-items-end flex-wrap"
                    >
                      <span class="price">1.48 USD</span>
                      <button
                        type="button"
                        class="btn btn-primary rounded-0"
                        data-aos="flip-left"
                      >
                        <span class="text-white text-uppercase">Shop now</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card" data-aos="flip-right">
                  <div
                    class="card-img-outer d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="assets/frontend/img/product-md-01.png"
                      class="card-img"
                      alt="..."
                    />
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Shorts</h5>
                    <p class="card-text mb-4">
                      Lorem ipsum dolor sit amet, consectetur
                    </p>
                    <div
                      class="d-flex justify-content-between align-items-end flex-wrap"
                    >
                      <span class="price">1.48 USD</span>
                      <button
                        type="button"
                        class="btn btn-primary rounded-0"
                        data-aos="flip-left"
                      >
                        <span class="text-white text-uppercase">Shop now</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card" data-aos="flip-right">
                  <div
                    class="card-img-outer d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="assets/frontend/img/product-md-01.png"
                      class="card-img"
                      alt="..."
                    />
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Shorts</h5>
                    <p class="card-text mb-4">
                      Lorem ipsum dolor sit amet, consectetur
                    </p>
                    <div
                      class="d-flex justify-content-between align-items-end flex-wrap"
                    >
                      <span class="price">1.48 USD</span>
                      <button
                        type="button"
                        class="btn btn-primary rounded-0"
                        data-aos="flip-left"
                      >
                        <span class="text-white text-uppercase">Shop now</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- End Product list -->
        </div>

        <!-- Start Air Max -->
        <section class="ari-mex-banner position-relative">
          <div class="container-xxl position-relative h-100">
            <div class="row">
              <div class="col-lg-8">
                <div
                  class="trending-card d-flex align-items-center position-absolute"
                >
                  <div class="trending-body">
                    <span class="trending-text d-block text-uppercase"
                      >Trending</span
                    >
                    <span class="trending-text d-block text-uppercase ps-5"
                      >Sneaker</span
                    >
                  </div>
                  <span class="trending-border me-2"></span>
                  <span class="trending-rounded"></span>
                </div>

                <h3 class="ari-mex-banner-title" data-aos="fade-up">
                  Get Discount on our new item
                </h3>

                <div class="ari-mex-card d-flex justify-content-end">
                  <div>
                    <h2 class="ari-mex-card-title mb-0" data-aos="zoom-in-down">
                      Air Max
                    </h2>
                    <p
                      class="ari-mex-card-text"
                      data-aos="fade-up"
                      data-aos-delay="200"
                    >
                      Apocalypse, 2018 Edition
                    </p>
                    <button
                      type="button"
                      class="btn btn-light rounded-0"
                      data-aos="flip-left"
                    >
                      <span class="text-primary text-uppercase">Shop now</span>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div
                  class="media ar-max-product d-flex flex-column position-relative"
                  data-aos="zoom-out-left"
                >
                  <div class="ar-max-product-img-outer bg-green">
                    <img
                      class="ar-max-product-img"
                      src="assets/frontend/img/product-sm-05.png"
                      alt=""
                    />
                  </div>
                  <div class="media-body">
                    <div class="d-flex justify-content-between">
                      <h5 class="ar-max-product-name text-uppercase mb-1">
                        Nike cosmic unity
                      </h5>
                      <a href="#" class="like-btn">
                        <img
                          src="assets/frontend/img/ic-like.svg"
                          alt=""
                          class="normal-img"
                        />
                        <img
                          src="assets/frontend/img/ic-like-a.svg"
                          alt=""
                          class="active-img"
                        />
                      </a>
                    </div>
                    <div class="product-rating d-flex">
                      <img src="assets/frontend/img/star-a.svg" alt="" />
                      <img src="assets/frontend/img/star-a.svg" alt="" />
                      <img src="assets/frontend/img/star-a.svg" alt="" />
                      <img src="assets/frontend/img/star.svg" alt="" />
                    </div>
                    <div class="d-flex justify-content-between">
                      <p
                        class="ar-max-product-price text-decoration-line-through"
                      >
                        $189
                      </p>
                      <p class="ar-max-product-price">$120</p>
                    </div>
                    <p class="ar-max-product-text">Discounted Price</p>
                    <a class="btn-link mb-0" href="#" title="Add to Cart"
                      >Add to Cart</a
                    >
                  </div>
                </div>
                <div
                  class="media ar-max-product d-flex flex-column position-relative"
                  data-aos="zoom-out-left"
                  data-aos-delay="400"
                >
                  <div class="ar-max-product-img-outer bg-pink">
                    <img
                      class="ar-max-product-img"
                      src="assets/frontend/img/product-sm-06.png"
                      alt=""
                    />
                  </div>
                  <div class="media-body">
                    <div class="d-flex justify-content-between">
                      <h5 class="ar-max-product-name text-uppercase mb-1">
                        Nike cosmic unity
                      </h5>
                      <a href="#" class="like-btn">
                        <img
                          src="assets/frontend/img/ic-like.svg"
                          alt=""
                          class="normal-img"
                        />
                        <img
                          src="assets/frontend/img/ic-like-a.svg"
                          alt=""
                          class="active-img"
                        />
                      </a>
                    </div>
                    <div class="product-rating d-flex">
                      <img src="assets/frontend/img/star-a.svg" alt="" />
                      <img src="assets/frontend/img/star-a.svg" alt="" />
                      <img src="assets/frontend/img/star-a.svg" alt="" />
                      <img src="assets/frontend/img/star.svg" alt="" />
                    </div>
                    <div class="d-flex justify-content-between">
                      <p
                        class="ar-max-product-price text-decoration-line-through"
                      >
                        $189
                      </p>
                      <p class="ar-max-product-price">$120</p>
                    </div>
                    <p class="ar-max-product-text">Discounted Price</p>
                    <a class="btn-link mb-0" href="#" title="Add to Cart"
                      >Add to Cart</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Air Max -->
      </main>
      <!-- End Main Content -->

<?= $this->endSection() ?>

