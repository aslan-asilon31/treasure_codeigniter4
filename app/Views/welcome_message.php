<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="<?= base_url('assets/frontend/img/apple-icon.png')?>"
    />
    <link rel="icon" type="image/png" href="<?= base_url('assets/frontend/img/favicon.png')?>" />
    <title>Aradan Codeigniter</title>

    <!-- Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400&display=swap"
      rel="stylesheet"
    />
    <!-- Font Awesome Icons -->
    <script
      src="https://kit.fontawesome.com/42d5adcbca.js"
      crossorigin="anonymous"
    ></script>

    <!-- Perfect Scrollbar -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/perfect-scrollbar@1.5.5/css/perfect-scrollbar.min.css"
    />

    <!-- Swiper -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />

    <!-- AOS Animate -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url('assets/frontend/css/app.css?v=1.0.0')?>" rel="stylesheet" />
    <!-- <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    /> -->
  </head>

  <body>
    <div class="wrapper d-flex flex-column">
      <!-- Start Header -->
      <header class="header position-sticky">
        <!-- Start Header Top Part -->
        <div class="header-top-part py-2 d-none d-lg-block">
          <div class="container-xxl">
            <div
              class="row align-items-center justify-content-center justify-content-lg-between"
            >
              <div class="col-auto">
                <ul class="sub-navigation">
                  <li><a href="#" title="Guides">Guides</a></li>
                  <li><a href="#" title="Terms of Sale">Terms of Sale</a></li>
                  <li><a href="#" title="Terms of Use">Terms of Use</a></li>
                  <li>
                    <a href="#" title="Privacy & Policy">Privacy & Policy</a>
                  </li>
                </ul>
              </div>
              <div class="col-auto">
                <h6>Complimentary Standard Shipping Indonesia Wide</h6>
              </div>
              <div class="col-auto">
                <ul class="sub-navigation">
                  <li>
                    <a href="#" title="Login / Register">Login / Register</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- End Header Top Part -->
        <!-- Start Navbar Part -->
        <nav class="navbar navbar-expand-lg p-0">
          <div class="container-xxl ">
            <a class="navbar-brand" href="/" title="Aradan Template by AppSeed"
              ><img class="animate__animated animate__heartBeat animate__infinite	infinite animate__slow" src="<?= base_url('assets/frontend/img/logo.svg')?>" alt="Aradan Template by AppSeed"
            /></a>

            <div
              class="offcanvas offcanvas-start"
              tabindex="-1"
              id="offcanvasExample"
              aria-labelledby="offcanvasExampleLabel"
            >
              <div class="offcanvas-header primary-gradient py-2">
                <a
                  class="navbar-brand"
                  href="#"
                  title="Aradan Template by AppSeed"
                  ><img
                    src="<?= base_url('assets/frontend/img/logo.svg')?>"
                    alt="Aradan Template by AppSeed"
                /></a>
                <button
                  type="button"
                  class="btn-close btn-close-white"
                  data-bs-dismiss="offcanvas"
                  aria-label="Close"
                ></button>
              </div>
              <div class="offcanvas-body p-0 ms-lg-auto">
                <ul class="navbar-nav mb-2 mb-lg-0">
                  <li class="nav-item">
                    <span class="badge rounded-pill bg-danger"> 20% </span>
                    <a
                      class="nav-link active"
                      aria-current="page"
                      href="src/collection.html"
                      title="Men"
                      >Men</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="src/product.html" title="Women"
                      >Women</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="src/collection.html" title="Kids"
                      >Kids</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" title="Customise">Customise</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" title="Sale">Sale</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" title="Shipping">Shipping</a>
                  </li>
                  <li class="nav-item d-lg-none">
                    <a class="nav-link" href="#" title="Guides">Guides</a>
                  </li>
                  <li class="nav-item d-lg-none">
                    <a class="nav-link" href="#" title="Terms of Sale"
                      >Terms of Sale</a
                    >
                  </li>
                  <li class="nav-item d-lg-none">
                    <a class="nav-link" href="#" title="Terms of Use"
                      >Terms of Use</a
                    >
                  </li>
                  <li class="nav-item d-lg-none">
                    <a class="nav-link" href="#" title="Privacy & Policy"
                      >Privacy & Policy</a
                    >
                  </li>
                  <li class="nav-item d-lg-none">
                    <a class="nav-link" href="#" title="Login / Register"
                      >Login / Register</a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div class="d-flex">
              <button class="btn btn-transparent">
                <svg
                  width="20"
                  height="20"
                  viewBox="0 0 20 20"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.58342 1.66675C13.9584 1.66675 17.5001 5.20842 17.5001 9.58342C17.5001 13.9584 13.9584 17.5001 9.58342 17.5001C5.20842 17.5001 1.66675 13.9584 1.66675 9.58342C1.66675 6.50008 3.42508 3.83341 6.00008 2.52508"
                    stroke="white"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M18.3334 18.3334L16.6667 16.6667"
                    stroke="white"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </button>
              <button class="btn btn-transparent">
                <svg
                  width="24"
                  height="20"
                  viewBox="0 0 24 20"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M7.5 6.39167V5.58334C7.5 3.70834 9.31 1.86667 11.56 1.69167C14.24 1.47501 16.5 3.23334 16.5 5.42501V6.57501"
                    stroke="white"
                    stroke-width="1.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M3.81007 13.8001L4.04007 15.3584C4.26007 16.9917 4.98007 18.3334 9.00007 18.3334H15.0001C19.0201 18.3334 19.7401 16.9917 19.9501 15.3584L20.7001 10.3584C20.9701 8.32508 20.2701 6.66675 16.0001 6.66675H8.00007C3.73007 6.66675 3.03007 8.32508 3.30007 10.3584"
                    stroke="white"
                    stroke-width="1.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M15.4955 9.99992H15.5045"
                    stroke="white"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M8.49451 9.99992H8.50349"
                    stroke="white"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </button>
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasExample"
              >
                <span></span>
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </nav>
        <!-- End Navbar Part -->
      </header>
      <!-- End Header -->

      <!-- Main Content -->
      <main class="main-content flex-grow-1">
        <div class="container-xxl">
          <!-- Start main Banner -->
          <section class="main-banner position-relative">
            <h2 class="banner-border-text" data-aos="zoom-in-up">
              THE NEW 2023
            </h2>
            <h1 class="banner-title animate__animated animate__flash animate__infinite infinite animate__slow" data-aos="flip-up" data-aos-delay="500">
              AIR JORDAN
            </h1>
            <figure
              class="figure d-block main-banner-figure mb-0"
              data-aos="fade-up"
            >
              <img
                class="figure-img img-fluid d-block mx-auto mb-0 animate__animated animate__bounce animate__infinite infinite animate__slow"
                src="<?= base_url('assets/frontend/img/banner-img-lg-ci.png')?>"
                alt=""
              />
            </figure>
            <p class="banner-text" data-aos="fade-up" data-aos-delay="200">
              We know how large objects will act,
            </p>
            <a
              href="src/product.html"
              class="btn btn-primary rounded-0 text-uppercase"
              data-aos="flip-left"
            >
              <span class="text-white">Shop now</span>
            </a>
            <!-- Button trigger modal -->
            <button
              type="button"
              class="btn btn-primary rounded-0 text-uppercase modal-btn"
              data-bs-toggle="modal"
              data-bs-target="#video-modal"
            >
              <img  src="<?= base_url('assets/frontend/img/ic-play.svg')?>" alt="">
            </button>
          </section>
          <!-- End main Banner -->

          <!-- Start New Product -->
          <section class="new-product-outer">
            <div
              class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4 gx-4"
            >
              <div class="col-lg">
                <div
                  class="media new-product d-flex"
                  data-aos="flip-left"
                  data-aos-easing="ease-out-cubic"
                  data-aos-duration="500"
                >
                  <div class="new-product-img-outer bg-pink position-relative">
                    <img
                      class="new-product-img position-absolute"
                      src="<?= base_url('assets/frontend/img/product-sm-01.png')?>"
                      alt=""
                    />
                  </div>
                  <div class="media-body">
                    <h5 class="new-product-name text-uppercase mb-1">
                      Air Max pegasus 37
                    </h5>
                    <div class="product-rating d-flex">
                      <img src="<?= base_url('assets/frontend/img/star-a.svg')?>" alt="" />
                      <img src="<?= base_url('assets/frontend/img/star-a.svg')?>" alt="" />
                      <img src="<?= base_url('assets/frontend/img/star-a.svg')?>" alt="" />
                      <img src="<?= base_url('assets/frontend/img/star.svg')?>" alt="" />
                    </div>
                    <p class="new-product-price">$189</p>
                    <p class="new-product-text">Women’s Running shoe</p>
                    <a class="btn-link mb-0" href="#" title="Add to Cart"
                      >Add to Cart</a
                    >
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div
                  class="media new-product d-flex"
                  data-aos="flip-left"
                  data-aos-easing="ease-out-cubic"
                  data-aos-duration="500"
                  data-aos-delay="200"
                >
                  <div
                    class="new-product-img-outer bg-indigo position-relative"
                  >
                    <img
                      class="new-product-img position-absolute"
                      src="<?= base_url('assets/frontend/img/product-sm-02.png')?>"
                      alt=""
                    />
                  </div>
                  <div class="media-body">
                    <h5 class="new-product-name text-uppercase mb-1">
                      Air Max pegasus 37
                    </h5>
                    <div class="product-rating d-flex">
                      <img src="<?= base_url('assets/frontend/img/star-a.svg')?>" alt="" />
                      <img src="<?= base_url('assets/frontend/img/star-a.svg')?>" alt="" />
                      <img src="<?= base_url('assets/frontend/img/star-a.svg')?>" alt="" />
                      <img src="<?= base_url('assets/frontend/img/star.svg')?>" alt="" />
                    </div>
                    <p class="new-product-price">$189</p>
                    <p class="new-product-text">Women’s Running shoe</p>
                    <a class="btn-link mb-0" href="#" title="Add to Cart"
                      >Add to Cart</a
                    >
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div
                  class="media new-product d-flex"
                  data-aos="flip-left"
                  data-aos-easing="ease-out-cubic"
                  data-aos-duration="500"
                  data-aos-delay="400"
                >
                  <div class="new-product-img-outer bg-green position-relative">
                    <img
                      class="new-product-img position-absolute"
                      src="<?= base_url('assets/frontend/img/product-sm-03.png')?>"
                      alt=""
                    />
                  </div>
                  <div class="media-body">
                    <h5 class="new-product-name text-uppercase mb-1">
                      Air Max pegasus 37
                    </h5>
                    <div class="product-rating d-flex">
                      <img src="<?= base_url('assets/frontend/img/star-a.svg')?>" alt="" />
                      <img src="<?= base_url('assets/frontend/img/star-a.svg')?>" alt="" />
                      <img src="<?= base_url('assets/frontend/img/star-a.svg')?>" alt="" />
                      <img src="<?= base_url('assets/frontend/img/star.svg')?>" alt="" />
                    </div>
                    <p class="new-product-price">$189</p>
                    <p class="new-product-text">Women’s Running shoe</p>
                    <a class="btn-link mb-0" href="#" title="Add to Cart"
                      >Add to Cart</a
                    >
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div
                  class="media new-product d-flex"
                  data-aos="flip-left"
                  data-aos-easing="ease-out-cubic"
                  data-aos-duration="500"
                  data-aos-delay="600"
                >
                  <div
                    class="new-product-img-outer bg-dark-blue position-relative"
                  >
                    <img
                      class="new-product-img position-absolute"
                      src="<?= base_url('assets/frontend/img/product-sm-04.png')?>"
                      alt=""
                    />
                  </div>
                  <div class="media-body">
                    <h5 class="new-product-name text-uppercase mb-1">
                      Air Max pegasus 37
                    </h5>
                    <div class="product-rating d-flex">
                      <img src="<?= base_url('assets/frontend/img/star-a.svg')?>" alt="" />
                      <img src="<?= base_url('assets/frontend/img/star-a.svg')?>" alt="" />
                      <img src="<?= base_url('assets/frontend/img/star-a.svg')?>" alt="" />
                      <img src="<?= base_url('assets/frontend/img/star.svg')?>" alt="" />
                    </div>
                    <p class="new-product-price">$189</p>
                    <p class="new-product-text">Women’s Running shoe</p>
                    <a class="btn-link mb-0" href="#" title="Add to Cart"
                      >Add to Cart</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- End New Product -->

          <!-- Start Popular Picks -->
          <section class="popular-picks">
            <div class="d-flex align-items-end justify-content-between">
              <div class="popular-picks-heading text-left">
                <h2
                  class="popular-picks-heading-title text-generator"
                  data-aos="fade-up"
                >
                  Popular Picks
                </h2>
                <p
                  class="popular-picks-heading-text mb-0"
                  data-aos="fade-up"
                  data-aos-delay="200"
                >
                  Our popular picks for most favorited Nike Men’s & Women’s
                  shoes.
                </p>
              </div>
              <!-- If we need navigation buttons -->

              <div class="d-inline-flex align-content-center">
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

            <div class="swiper three-item-carousel">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->

                <div
                  class="swiper-slide"
                  data-aos="zoom-in-down"
                  data-aos-duration="1000"
                  data-aos-delay="200"
                >
                  <figure class="figure d-block popular-picks-figure mb-0">
                    <img
                      class="figure-img img-fluid d-block mx-auto mb-0"
                      src="<?= base_url('assets/frontend/img/popular-picks-01.jpg')?>"
                      alt=""
                    />
                  </figure>
                </div>
                <div
                  class="swiper-slide"
                  data-aos="zoom-in-down"
                  data-aos-duration="1000"
                  data-aos-delay="400"
                >
                  <figure class="figure d-block popular-picks-figure mb-0">
                    <img
                      class="figure-img img-fluid d-block mx-auto mb-0"
                      src="<?= base_url('assets/frontend/img/popular-picks-02.jpg')?>"
                      alt=""
                    />
                  </figure>
                </div>
                <div
                  class="swiper-slide"
                  data-aos="zoom-in-down"
                  data-aos-duration="1000"
                  data-aos-delay="600"
                >
                  <figure class="figure d-block popular-picks-figure mb-0">
                    <img
                      class="figure-img img-fluid d-block mx-auto mb-0"
                      src="<?= base_url('assets/frontend/img/popular-picks-03.jpg')?>"
                      alt=""
                    />
                  </figure>
                </div>
                <div
                  class="swiper-slide"
                  data-aos="zoom-in-down"
                  data-aos-duration="1000"
                  data-aos-delay="800"
                >
                  <figure class="figure d-block popular-picks-figure mb-0">
                    <img
                      class="figure-img img-fluid d-block mx-auto mb-0"
                      src="<?= base_url('assets/frontend/img/popular-picks-01.jpg')?>"
                      alt=""
                    />
                  </figure>
                </div>
                <div
                  class="swiper-slide"
                  data-aos="zoom-in-down"
                  data-aos-duration="1000"
                  data-aos-delay="1000"
                >
                  <figure class="figure d-block popular-picks-figure mb-0">
                    <img
                      class="figure-img img-fluid d-block mx-auto mb-0"
                      src="<?= base_url('assets/frontend/img/popular-picks-02.jpg')?>"
                      alt=""
                    />
                  </figure>
                </div>
                <div
                  class="swiper-slide"
                  data-aos="zoom-in-down"
                  data-aos-duration="1000"
                  data-aos-delay="1200"
                >
                  <figure class="figure d-block popular-picks-figure mb-0">
                    <img
                      class="figure-img img-fluid d-block mx-auto mb-0"
                      src="<?= base_url('assets/frontend/img/popular-picks-03.jpg')?>"
                      alt=""
                    />
                  </figure>
                </div>
              </div>
            </div>
          </section>
          <!--  End Popular Picks -->

          <!-- Start About the Brand-->
          <section class="about-brand">
            <div class="row">
              <div class="col-lg-7">
                <div class="about-brand-heading text-left">
                  <h2
                    class="about-brand-heading-title text-generator position-relative"
                    data-aos="fade-up"
                  >
                    About the Brand
                  </h2>
                  <p
                    class="about-brand-heading-text"
                    data-aos="fade-up"
                    data-aos-delay="200"
                  >
                    [Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                    vel lectus lacinia, scelerisque ]
                  </p>
                  <button
                    type="button"
                    class="btn btn-primary rounded-0 text-uppercase"
                    data-aos="flip-left"
                  >
                    <span class="text-white">Shop now</span>
                  </button>
                </div>
                <figure
                  class="figure d-block about-brand-figure d-flex justify-content-lg-end mb-0"
                  data-aos="flip-left"
                >
                  <img
                    class="figure-img img-fluid d-block"
                    src="<?= base_url('assets/frontend/img/about-img-01.jpg')?>"
                    alt=""
                  />
                </figure>
              </div>
              <div class="col-lg-5">
                <figure
                  class="figure d-block about-brand-figure mb-0"
                  data-aos="flip-right"
                >
                  <img
                    class="figure-img img-fluid d-block"
                    src="<?= base_url('assets/frontend/img/about-img-02.jpg')?>"
                    alt=""
                  />
                </figure>
                <figure
                  class="figure d-block about-brand-figure mb-0"
                  data-aos="flip-up"
                >
                  <img
                    class="figure-img img-fluid d-block"
                    src="<?= base_url('assets/frontend/img/about-img-03.jpg')?>"
                    alt=""
                  />
                </figure>
              </div>
            </div>
          </section>
          <!--  End About the Brand-->
        </div>

        <!-- Start Payday sale now-->
        <section class="payday-sale position-relative">
          <div class="container-xxl p-0">
            <div class="row g-0">
              <div class="col-lg-6">
                <figure class="figure d-block payday-sale-figure mb-0">
                  <img
                    class="figure-img img-fluid d-block mx-auto mb-0"
                    src="<?= base_url('assets/frontend/img/payday-sale-img.jpg')?>"
                    alt=""
                  />
                </figure>
              </div>
              <div class="col-lg-6 po">
                <div class="payday-sale-card position-relative">
                  <h2
                    class="payday-sale-card-title payday-sale-card-title-bg position-relative d-inline-block mb-0"
                    data-aos="fade-up"
                  >
                    <span
                      class="text-generator text-uppercase position-relative"
                      >Payday</span
                    >
                  </h2>
                  <h2
                    class="payday-sale-card-title text-generator text-uppercase mb-2 mb-xl-4"
                    data-aos="fade-up"
                    data-aos-delay="200"
                  >
                    sale now
                  </h2>
                  <p
                    class="payday-sale-card-text"
                    data-aos="fade-up"
                    data-aos-delay="400"
                  >
                    Spend minimal $100 get 30% off voucher code for your next
                    purchase
                  </p>
                  <h5
                    class="payday-sale-card-date text-generator"
                    data-aos="fade-up"
                    data-aos-delay="600"
                  >
                    1 June - 10 June 2021
                  </h5>
                  <p
                    class="payday-sale-card-conditions"
                    data-aos="fade-up"
                    data-aos-delay="800"
                  >
                    *Terms & Conditions apply
                  </p>
                  <button
                    type="button"
                    class="btn btn-primary rounded-0 text-uppercase"
                    data-aos="flip-left"
                    data-aos-delay="1000"
                  >
                    <span class="text-white">Shop now</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Payday sale now -->

        <!-- Start Explore more categories-->
        <section class="explore-categories">
          <div class="container-xxl">
            <h2
              class="explore-categories-title text-center text-generator"
              data-aos="fade-up"
            >
              Explore more categories
            </h2>
          </div>
          <div class="swiper auto-width-slider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div
                class="swiper-slide"
                data-aos="zoom-in-down"
                data-aos-duration="1000"
                data-aos-delay="200"
              >
                <div class="explore-categories-card">
                  <img
                    class="explore-categories-card-img"
                    src="<?= base_url('assets/frontend/img/categories-img-01.jpg')?>"
                    alt=""
                  />
                  <a
                    class="categories-card-body position-relative d-block"
                    href="#"
                    title="Hoodies & Sweetshirt"
                  >
                    <span class="categories-card-body-title d-block"
                      >Hoodies & Sweetshirt</span
                    >
                    <span class="categories-card-body-text d-block"
                      >Explore Now!</span
                    >
                    <img
                      class="arrow-icon"
                      src="<?= base_url('assets/frontend/img/arrow-right.svg')?>"
                      alt=""
                    />
                  </a>
                </div>
              </div>
              <div
                class="swiper-slide"
                data-aos="zoom-in-down"
                data-aos-duration="1000"
                data-aos-delay="400"
              >
                <div class="explore-categories-card">
                  <img
                    class="explore-categories-card-img"
                    src="<?= base_url('assets/frontend/img/categories-img-02.jpg')?>"
                    alt=""
                  />
                  <a
                    class="categories-card-body position-relative d-block"
                    href="#"
                    title="Shoes & Sneakers"
                  >
                    <span class="categories-card-body-title d-block"
                      >Shoes & Sneakers</span
                    >
                    <span class="categories-card-body-text d-block"
                      >Explore Now!</span
                    >
                    <img
                      class="arrow-icon"
                      src="<?= base_url('assets/frontend/img/arrow-right.svg')?>"
                      alt=""
                    />
                  </a>
                </div>
              </div>
              <div
                class="swiper-slide"
                data-aos="zoom-in-down"
                data-aos-duration="1000"
                data-aos-delay="600"
              >
                <div class="explore-categories-card">
                  <img
                    class="explore-categories-card-img"
                    src="<?= base_url('assets/frontend/img/categories-img-03.jpg')?>"
                    alt=""
                  />
                  <a
                    class="categories-card-body position-relative d-block"
                    href="#"
                    title="Tees & T-Shirt"
                  >
                    <span class="categories-card-body-title d-block"
                      >Tees & T-Shirt</span
                    >
                    <span class="categories-card-body-text d-block"
                      >Explore Now!</span
                    >
                    <img
                      class="arrow-icon"
                      src="<?= base_url('assets/frontend/img/arrow-right.svg')?>"
                      alt=""
                    />
                  </a>
                </div>
              </div>
              <div
                class="swiper-slide"
                data-aos="zoom-in-down"
                data-aos-duration="1000"
                data-aos-delay="800"
              >
                <div class="explore-categories-card">
                  <img
                    class="explore-categories-card-img"
                    src="<?= base_url('assets/frontend/img/categories-img-01.jpg')?>"
                    alt=""
                  />
                  <a
                    class="categories-card-body position-relative d-block"
                    href="#"
                    title="Hoodies & Sweetshirt"
                  >
                    <span class="categories-card-body-title d-block"
                      >Hoodies & Sweetshirt</span
                    >
                    <span class="categories-card-body-text d-block"
                      >Explore Now!</span
                    >
                    <img
                      class="arrow-icon"
                      src="<?= base_url('assets/frontend/img/arrow-right.svg')?>"
                      alt=""
                    />
                  </a>
                </div>
              </div>
              <div
                class="swiper-slide"
                data-aos="zoom-in-down"
                data-aos-duration="1000"
                data-aos-delay="1000"
              >
                <div class="explore-categories-card">
                  <img
                    class="explore-categories-card-img"
                    src="<?= base_url('assets/frontend/img/categories-img-02.jpg')?>"
                    alt=""
                  />
                  <a
                    class="categories-card-body position-relative d-block"
                    href="#"
                    title="Shoes & Sneakers"
                  >
                    <span class="categories-card-body-title d-block"
                      >Shoes & Sneakers</span
                    >
                    <span class="categories-card-body-text d-block"
                      >Explore Now!</span
                    >
                    <img
                      class="arrow-icon"
                      src="<?= base_url('assets/frontend/img/arrow-right.svg')?>"
                      alt=""
                    />
                  </a>
                </div>
              </div>
              <div
                class="swiper-slide"
                data-aos="zoom-in-down"
                data-aos-duration="1000"
              >
                <div class="explore-categories-card">
                  <img
                    class="explore-categories-card-img"
                    src="<?= base_url('assets/frontend/img/categories-img-03.jpg')?>"
                    alt=""
                  />
                  <a
                    class="categories-card-body position-relative d-block"
                    href="#"
                    title="Tees & T-Shirt"
                  >
                    <span class="categories-card-body-title d-block"
                      >Tees & T-Shirt</span
                    >
                    <span class="categories-card-body-text d-block"
                      >Explore Now!</span
                    >
                    <img
                      class="arrow-icon"
                      src="<?= base_url('assets/frontend/img/arrow-right.svg')?>"
                      alt=""
                    />
                  </a>
                </div>
              </div>
              <div
                class="swiper-slide"
                data-aos="zoom-in-down"
                data-aos-duration="1000"
              >
                <div class="explore-categories-card">
                  <img
                    class="explore-categories-card-img"
                    src="<?= base_url('assets/frontend/img/categories-img-01.jpg')?>"
                    alt=""
                  />
                  <a
                    class="categories-card-body position-relative d-block"
                    href="#"
                    title="Hoodies & Sweetshirt"
                  >
                    <span class="categories-card-body-title d-block"
                      >Hoodies & Sweetshirt</span
                    >
                    <span class="categories-card-body-text d-block"
                      >Explore Now!</span
                    >
                    <img
                      class="arrow-icon"
                      src="<?= base_url('assets/frontend/img/arrow-right.svg')?>"
                      alt=""
                    />
                  </a>
                </div>
              </div>
              <div
                class="swiper-slide"
                data-aos="zoom-in-down"
                data-aos-duration="1000"
              >
                <div class="explore-categories-card">
                  <img
                    class="explore-categories-card-img"
                    src="<?= base_url('assets/frontend/img/categories-img-02.jpg')?>"
                    alt=""
                  />
                  <a
                    class="categories-card-body position-relative d-block"
                    href="#"
                    title="Shoes & Sneakers"
                  >
                    <span class="categories-card-body-title d-block"
                      >Shoes & Sneakers</span
                    >
                    <span class="categories-card-body-text d-block"
                      >Explore Now!</span
                    >
                    <img
                      class="arrow-icon"
                      src="<?= base_url('assets/frontend/img/arrow-right.svg')?>"
                      alt=""
                    />
                  </a>
                </div>
              </div>
              <div
                class="swiper-slide"
                data-aos="zoom-in-down"
                data-aos-duration="1000"
              >
                <div class="explore-categories-card">
                  <img
                    class="explore-categories-card-img"
                    src="<?= base_url('assets/frontend/img/categories-img-03.jpg')?>"
                    alt=""
                  />
                  <a
                    class="categories-card-body position-relative d-block"
                    href="#"
                    title="Tees & T-Shirt"
                  >
                    <span class="categories-card-body-title d-block"
                      >Tees & T-Shirt</span
                    >
                    <span class="categories-card-body-text d-block"
                      >Explore Now!</span
                    >
                    <img
                      class="arrow-icon"
                      src="<?= base_url('assets/frontend/img/arrow-right.svg')?>"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--  End Explore more categories-->

        <!-- Start Review-->
        <section class="review-section">
          <div class="container-xxl px-lg-5 position-relative">
            <div class="review-section-title-outer">
              <h2
                class="review-section-title position-relative d-flex justify-content-end"
                data-aos="fade-up"
                data-aos-delay="200"
              >
                <span
                  class="text-generator text-uppercase position-relative text-right"
                  >Style is a way to say who you are without having to
                  speak</span
                >
              </h2>
            </div>
            <div class="row gx-lg-5">
              <div class="col-lg">
                <div class="slider-outer">
                  <div class="swiper vertical-slider mt-4 mt-lg-0">
                    <div
                      class="swiper-wrapper"
                      data-aos="zoom-up"
                      data-aos-delay="200"
                    >
                      <div class="swiper-slide">
                        <div
                          class="title text-uppercase"
                          data-swiper-parallax="-100"
                        >
                          client name
                        </div>

                        <div
                          class="product-rating d-flex"
                          data-swiper-parallax="-200"
                        >
                          <img src="<?= base_url('assets/frontend/img/star-a.svg')?>" alt="" />
                          <img src="<?= base_url('assets/frontend/img/star-a.svg')?>" alt="" />
                          <img src="<?= base_url('assets/frontend/img/star-a.svg')?>" alt="" />
                          <img src="<?= base_url('assets/frontend/img/star-a.svg')?>" alt="" />
                        </div>

                        <div class="comment" data-swiper-parallax="-300">
                          <img
                            class="invertedcomma d-block"
                            src="<?= base_url('assets/frontend/img/ic-invertedcomma.svg')?>"
                            alt=""
                          />
                          <p>
                            Lorem ipsum dolor sit amet consectetur. A hendrerit
                            nunc ut eget interdum felis dis mattis vestibulum.
                            Maecenas mattis ornare nunc non. Sed aliquam auctor
                            accumsan cras felis mauris velit turpis. Tellus nunc
                            dui ullamcorper lacinia amet.
                          </p>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div
                          class="title text-uppercase"
                          data-swiper-parallax="-100"
                        >
                          client name
                        </div>

                        <div
                          class="product-rating d-flex"
                          data-swiper-parallax="-200"
                        >
                          <img src="<?= base_url('assets/frontend/img/star-a.svg')?>" alt="" />
                          <img src="<?= base_url('assets/frontend/img/star-a.svg')?>" alt="" />
                          <img src="<?= base_url('assets/frontend/img/star-a.svg')?>" alt="" />
                          <img src="<?= base_url('assets/frontend/img/star-a.svg')?>" alt="" />
                        </div>

                        <div class="comment" data-swiper-parallax="-300">
                          <img
                            class="invertedcomma d-block"
                            src="<?= base_url('assets/frontend/img/ic-invertedcomma.svg')?>"
                            alt=""
                          />
                          <p>
                            Lorem ipsum dolor sit amet consectetur. A hendrerit
                            nunc ut eget interdum felis dis mattis vestibulum.
                            Maecenas mattis ornare nunc non. Sed aliquam auctor
                            accumsan cras felis mauris velit turpis. Tellus nunc
                            dui ullamcorper lacinia amet.
                          </p>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div
                          class="title text-uppercase"
                          data-swiper-parallax="-100"
                        >
                          client name
                        </div>

                        <div
                          class="product-rating d-flex"
                          data-swiper-parallax="-200"
                        >
                          <img src="<?= base_url('assets/frontend/img/star-a.svg')?>" alt="" />
                          <img src="<?= base_url('assets/frontend/img/star-a.svg')?>" alt="" />
                          <img src="<?= base_url('assets/frontend/img/star-a.svg')?>" alt="" />
                          <img src="<?= base_url('assets/frontend/img/star-a.svg')?>" alt="" />
                        </div>

                        <div class="comment" data-swiper-parallax="-300">
                          <img
                            class="invertedcomma d-block"
                            src="<?= base_url('assets/frontend/img/ic-invertedcomma.svg')?>"
                            alt=""
                          />
                          <p>
                            Lorem ipsum dolor sit amet consectetur. A hendrerit
                            nunc ut eget interdum felis dis mattis vestibulum.
                            Maecenas mattis ornare nunc non. Sed aliquam auctor
                            accumsan cras felis mauris velit turpis. Tellus nunc
                            dui ullamcorper lacinia amet.
                          </p>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div
                          class="title text-uppercase"
                          data-swiper-parallax="-100"
                        >
                          client name
                        </div>

                        <div
                          class="product-rating d-flex"
                          data-swiper-parallax="-200"
                        >
                          <img src="<?= base_url('assets/frontend/img/star-a.svg')?>" alt="" />
                          <img src="<?= base_url('assets/frontend/img/star-a.svg')?>" alt="" />
                          <img src="<?= base_url('assets/frontend/img/star-a.svg')?>" alt="" />
                          <img src="<?= base_url('assets/frontend/img/star-a.svg')?>" alt="" />
                        </div>

                        <div class="comment" data-swiper-parallax="-300">
                          <img
                            class="invertedcomma d-block"
                            src="<?= base_url('assets/frontend/img/ic-invertedcomma.svg')?>"
                            alt=""
                          />
                          <p>
                            Lorem ipsum dolor sit amet consectetur. A hendrerit
                            nunc ut eget interdum felis dis mattis vestibulum.
                            Maecenas mattis ornare nunc non. Sed aliquam auctor
                            accumsan cras felis mauris velit turpis. Tellus nunc
                            dui ullamcorper lacinia amet.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <figure
                  class="figure d-block review-figure position-relative mb-0 mt-4 mt-lg-0"
                  data-aos="zoom-in-down"
                  data-aos-duration="1000"
                  data-aos-delay="200"
                >
                  <img
                    class="figure-img img-fluid d-block mx-auto mb-0"
                    src="<?= base_url('assets/frontend/img/reivew-img.jpg')?>"
                    alt=""
                  />
                </figure>
              </div>
            </div>
          </div>
        </section>
        <!--  End Review-->

        <!-- Start Quick Questions to ask-->
        <section class="quick-questions">
          <div class="container-xxl">
            <div class="quick-questions-heading text-center mx-auto">
              <h2
                class="quick-questions-heading-title text-generator"
                data-aos="fade-up"
              >
                Quick Questions to ask
              </h2>
              <p
                class="quick-questions-heading-text mb-0"
                data-aos="fade-up"
                data-aos-delay="200"
              >
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the
              </p>
            </div>
            <div class="row">
              <div class="col-lg">
                <div class="accordion accordion-flush">
                  <div
                    class="accordion-item border-0 rounded-3 mb-3"
                    data-aos="flip-up"
                  >
                    <h2 class="accordion-header" id="flush-headingOne">
                      <button
                        class="accordion-button rounded-3 bg-transparent"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne"
                        aria-expanded="true"
                        aria-controls="flush-collapseOne"
                      >
                        What services does TanahAir Offer?
                        <img class="icon" src="<?= base_url('assets/frontend/img/ic-plus.svg')?>" alt="" />
                      </button>
                    </h2>
                    <div
                      id="flush-collapseOne"
                      class="accordion-collapse collapse show"
                      aria-labelledby="flush-headingOne"
                      data-bs-parent="#accordionFlushExample"
                    >
                      <div class="accordion-body">
                        TanahAir offers a service for creating a website design,
                        illustration, icon set, website development, animation
                        and digital marketing.
                      </div>
                    </div>
                  </div>
                  <div
                    class="accordion-item border-0 rounded-3 mb-3"
                    data-aos="flip-up"
                    data-aos-delay="200"
                  >
                    <h2 class="accordion-header" id="flush-headingTwo">
                      <button
                        class="accordion-button rounded-3 bg-transparent"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo"
                        aria-expanded="true"
                        aria-controls="flush-collapseTwo"
                      >
                        How does TanahAir create website content without knowing
                        our Business plan?
                        <img class="icon" src="<?= base_url('assets/frontend/img/ic-plus.svg')?>" alt="" />
                      </button>
                    </h2>
                    <div
                      id="flush-collapseTwo"
                      class="accordion-collapse collapse show"
                      aria-labelledby="flush-headingTwo"
                      data-bs-parent="#accordionFlushExample"
                    >
                      <div class="accordion-body">
                        TanahAir will schedule interviews with customers who
                        have used our services and discuss business about the
                        product and help solve the problem so that it becomes
                        the best solution.
                      </div>
                    </div>
                  </div>
                  <div
                    class="accordion-item border-0 rounded-3 mb-3"
                    data-aos="flip-up"
                    data-aos-delay="400"
                  >
                    <h2 class="accordion-header" id="flush-headingThree">
                      <button
                        class="accordion-button rounded-3 bg-transparent"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree"
                        aria-expanded="true"
                        aria-controls="flush-collapseThree"
                      >
                        What often will results be reported?
                        <img class="icon" src="<?= base_url('assets/frontend/img/ic-plus.svg')?>" alt="" />
                      </button>
                    </h2>
                    <div
                      id="flush-collapseThree"
                      class="accordion-collapse collapse show"
                      aria-labelledby="flush-headingThree"
                      data-bs-parent="#accordionFlushExample"
                    >
                      <div class="accordion-body">
                        We will report each section that has been done, such as
                        Flow, wireframe for each category, then full wireframe
                        until it becomes a complete design and we will report
                        the development of the website approximately every 1
                        week.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div class="accordion accordion-flush">
                  <div
                    class="accordion-item border-0 rounded-3 mb-3"
                    data-aos="flip-up"
                    data-aos-delay="200"
                  >
                    <h2 class="accordion-header" id="flush-heading01">
                      <button
                        class="accordion-button rounded-3 bg-transparent"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse01"
                        aria-expanded="true"
                        aria-controls="flush-collapse01"
                      >
                        Why should i choose a Design studio like TanahAir over
                        full-service agency?
                        <img class="icon" src="<?= base_url('assets/frontend/img/ic-plus.svg')?>" alt="" />
                      </button>
                    </h2>
                    <div
                      id="flush-collapse01"
                      class="accordion-collapse collapse show"
                      aria-labelledby="flush-heading01"
                      data-bs-parent="#accordionFlushExample"
                    >
                      <div class="accordion-body">
                        Because TanahAir provides the best service to customers
                        and provides flexibility to solve problems with our
                        experts so that customers get satisfaction. And we
                        provide service very quickly according to the price we
                        offer
                      </div>
                    </div>
                  </div>
                  <div
                    class="accordion-item border-0 rounded-3 mb-3"
                    data-aos="flip-up"
                    data-aos-delay="400"
                  >
                    <h2 class="accordion-header" id="flush-heading02">
                      <button
                        class="accordion-button rounded-3 bg-transparent"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse02"
                        aria-expanded="true"
                        aria-controls="flush-collapse02"
                      >
                        What will be delivered? And When?
                        <img class="icon" src="<?= base_url('assets/frontend/img/ic-plus.svg')?>" alt="" />
                      </button>
                    </h2>
                    <div
                      id="flush-collapse02"
                      class="accordion-collapse collapse show"
                      aria-labelledby="flush-heading02"
                      data-bs-parent="#accordionFlushExample"
                    >
                      <div class="accordion-body">
                        What will be given is a design and development to become
                        a website for that time depending on the difficulties
                        the client gives us. However, the track record we have
                        done to create a website design and development will
                        take about 1 month
                      </div>
                    </div>
                  </div>
                  <div
                    class="accordion-item border-0 rounded-3 mb-3"
                    data-aos="flip-up"
                    data-aos-delay="200"
                  >
                    <h2 class="accordion-header" id="flush-heading03">
                      <button
                        class="accordion-button rounded-3 bg-transparent"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse03"
                        aria-expanded="true"
                        aria-controls="flush-collapse03"
                      >
                        How Quickly will i start seeing result after working
                        with TanahAir?
                        <img class="icon" src="<?= base_url('assets/frontend/img/ic-plus.svg')?>" alt="" />
                      </button>
                    </h2>
                    <div
                      id="flush-collapse03"
                      class="accordion-collapse collapse show"
                      aria-labelledby="flush-heading03"
                      data-bs-parent="#accordionFlushExample"
                    >
                      <div class="accordion-body">
                        About 1 week there will be results that we give to
                        clients. Because after the client makes payments we will
                        begin to share a task with our workers and do the work
                        as quickly as possible
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--  End Quick Questions to ask-->

        <!-- Start Follow products on Instagram-->
        <section class="follow-instagram">
          <div class="container-xxl">
            <h2
              class="follow-instagram-title text-center text-generator"
              data-aos="fade-up"
            >
              Follow products on Instagram
            </h2>
            <div
              class="row row-cols-3 row-cols-md-6 row-cols-lg-6 row-cols-xl-6 row-cols-xxl-6 g-2"
            >
              <div class="col">
                <a
                  href="#"
                  title="Instagram Post"
                  class="figure d-block follow-instagram-figure position-relative mb-0"
                  data-aos="zoom-in-down"
                  data-aos-duration="1000"
                  data-aos-delay="200"
                >
                  <img
                    class="figure-img img-fluid d-block mx-auto mb-0"
                    src="<?= base_url('assets/frontend/img/follow-instagram-products-01.jpg')?>"
                    alt=""
                  />
                  <span
                    class="follow-instagram-hover position-absolute d-flex align-content-center justify-content-center"
                    ><img src="<?= base_url('assets/frontend/img/ic-instagram-w.svg')?>" alt=""
                  /></span>
                </a>
              </div>
              <div class="col">
                <a
                  href="#"
                  title="Instagram Post"
                  class="figure d-block follow-instagram-figure position-relative mb-0"
                  data-aos="zoom-in-down"
                  data-aos-duration="1000"
                  data-aos-delay="400"
                >
                  <img
                    class="figure-img img-fluid d-block mx-auto mb-0"
                    src="<?= base_url('assets/frontend/img/follow-instagram-products-04.jpg')?>"
                    alt=""
                  />
                  <span
                    class="follow-instagram-hover position-absolute d-flex align-content-center justify-content-center"
                    ><img src="<?= base_url('assets/frontend/img/ic-instagram-w.svg')?>" alt=""
                  /></span>
                </a>
              </div>
              <div class="col">
                <a
                  href="#"
                  title="Instagram Post"
                  class="figure d-block follow-instagram-figure position-relative mb-0"
                  data-aos="zoom-in-down"
                  data-aos-duration="1000"
                  data-aos-delay="600"
                >
                  <img
                    class="figure-img img-fluid d-block mx-auto mb-0"
                    src="<?= base_url('assets/frontend/img/follow-instagram-products-03.jpg')?>"
                    alt=""
                  />
                  <span
                    class="follow-instagram-hover position-absolute d-flex align-content-center justify-content-center"
                    ><img src="<?= base_url('assets/frontend/img/ic-instagram-w.svg')?>" alt=""
                  /></span>
                </a>
              </div>
              <div class="col">
                <a
                  href="#"
                  title="Instagram Post"
                  class="figure d-block follow-instagram-figure position-relative mb-0"
                  data-aos="zoom-in-down"
                  data-aos-duration="1000"
                  data-aos-delay="800"
                >
                  <img
                    class="figure-img img-fluid d-block mx-auto mb-0"
                    src="<?= base_url('assets/frontend/img/follow-instagram-products-02.jpg')?>"
                    alt=""
                  />
                  <span
                    class="follow-instagram-hover position-absolute d-flex align-content-center justify-content-center"
                    ><img src="<?= base_url('assets/frontend/img/ic-instagram-w.svg')?>" alt=""
                  /></span>
                </a>
              </div>
              <div class="col">
                <a
                  href="#"
                  title="Instagram Post"
                  class="figure d-block follow-instagram-figure position-relative mb-0"
                  data-aos="zoom-in-down"
                  data-aos-duration="1000"
                  data-aos-delay="1000"
                >
                  <img
                    class="figure-img img-fluid d-block mx-auto mb-0"
                    src="<?= base_url('assets/frontend/img/follow-instagram-products-05.jpg')?>"
                    alt=""
                  />
                  <span
                    class="follow-instagram-hover position-absolute d-flex align-content-center justify-content-center"
                    ><img src="<?= base_url('assets/frontend/img/ic-instagram-w.svg')?>" alt=""
                  /></span>
                </a>
              </div>
              <div class="col">
                <a
                  href="#"
                  title="Instagram Post"
                  class="figure d-block follow-instagram-figure position-relative mb-0"
                  data-aos="zoom-in-down"
                  data-aos-duration="1000"
                  data-aos-delay="1200"
                >
                  <img
                    class="figure-img img-fluid d-block mx-auto mb-0"
                    src="<?= base_url('assets/frontend/img/follow-instagram-products-06.jpg')?>"
                    alt=""
                  />
                  <span
                    class="follow-instagram-hover position-absolute d-flex align-content-center justify-content-center"
                    ><img src="<?= base_url('assets/frontend/img/ic-instagram-w.svg')?>" alt=""
                  /></span>
                </a>
              </div>
            </div>

            <div class="newsletter text-center">
              <h4
                class="newsletter-title text-capitalize text-generator"
                data-aos="fade-up"
              >
                Or subscribe to the newsletter
              </h4>
              <form
                class="row g-3 justify-content-center"
                data-aos="fade-up"
                data-aos-delay="400"
              >
                <div class="col-auto">
                  <input
                    type="text"
                    class="form-control rounded-0"
                    placeholder="Email address..."
                  />
                </div>
                <div class="col-auto">
                  <button
                    type="submit"
                    class="btn submit-btn border-bottom rounded-0 mb-3"
                  >
                    SUBMIT
                  </button>
                </div>
              </form>
            </div>
          </div>
        </section>
        <!--  End Follow products on Instagram-->
      </main>
      <!-- End Main Content -->

      <!-- Start Footer -->
      <footer class="footer">
        <!-- Start Footer Top Part -->
        <div class="footer-top-part py-3">
          <div class="container-xxl">
            <ul class="footer-top-part-listing">
              <li
                data-aos="fade-right"
                data-aos-anchor-placement="center-bottom"
              >
                <img src="<?= base_url('assets/frontend/img/ic-check.svg')?>" alt="" />Duties and Taxes
                Guaranteed
              </li>
              <li
                data-aos="fade-right"
                data-aos-anchor-placement="center-bottom"
                data-aos-delay="200"
              >
                <img src="<?= base_url('assets/frontend/img/ic-check.svg')?>" alt="" />Free Express
                Shipping
              </li>
              <li
                data-aos="fade-right"
                data-aos-anchor-placement="center-bottom"
                data-aos-delay="400"
              >
                <img src="<?= base_url('assets/frontend/img/ic-check.svg')?>" alt="" />Customer Love
              </li>
              <li
                data-aos="fade-right"
                data-aos-anchor-placement="center-bottom"
                data-aos-delay="400"
              >
                <img src="<?= base_url('assets/frontend/img/ic-check.svg')?>" alt="" />Easy Returns
              </li>
            </ul>
          </div>
        </div>
        <!-- End Footer Top Part -->

        <!-- Start Footer Bottom Part -->
        <div class="footer-bottom-part primary-gradient">
          <div class="container-xxl">
            <div class="row justify-content-between">
              <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="footer-logo-outer mb-3 mb-lg-5">
                  <a
                    href="#"
                    class="footer-logo"
                    title="Aradan Template by AppSeed"
                    data-aos="zoom-in-left"
                  >
                    <img
                      src="<?= base_url('assets/frontend/img/logo-footer.svg')?>"
                      alt="Aradan Template by AppSeed"
                    />
                  </a>
                </div>
                <h5 class="mb-3 mb-lg-5" data-aos="fade-up">
                  Complete your style with awesome clothes from us.
                </h5>
                <ul class="social-icons">
                  <li
                    data-aos="zoom-in-up"
                    data-aos-anchor-placement="center-bottom"
                  >
                    <a href="#" title="Facebook"
                      ><img src="<?= base_url('assets/frontend/img/ic-facebook.svg')?>" alt="Facebook"
                    /></a>
                  </li>
                  <li
                    data-aos="zoom-in-up"
                    data-aos-anchor-placement="center-bottom"
                    data-aos-delay="100"
                  >
                    <a href="#" title="Instagram"
                      ><img src="<?= base_url('assets/frontend/img/ic-instagram.svg')?>" alt="Instagram"
                    /></a>
                  </li>
                  <li
                    data-aos="zoom-in-up"
                    data-aos-anchor-placement="center-bottom"
                    data-aos-delay="200"
                  >
                    <a href="#" title="Twitter"
                      ><img src="<?= base_url('assets/frontend/img/ic-twitter.svg')?>" alt="Twitter"
                    /></a>
                  </li>
                  <li
                    data-aos="zoom-in-up"
                    data-aos-anchor-placement="center-bottom"
                    data-aos-delay="300"
                  >
                    <a href="#" title="LinkedIn"
                      ><img src="<?= base_url('assets/frontend/img/ic-linkedin.svg')?>" alt="LinkedIn"
                    /></a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-8 col-xl-6">
                <div class="row justify-content-between">
                  <div
                    class="col-6 col-sm-auto mb-5 mb-md-0"
                    data-aos="fade-left"
                  >
                    <h5 class="mb-3 mb-md-4">Company</h5>
                    <ul class="footer-links">
                      <li>
                        <a href="#" title="About">About</a>
                      </li>
                      <li>
                        <a href="#" title="Contact us">Contact us</a>
                      </li>
                      <li>
                        <a href="#" title="Support">Support</a>
                      </li>
                      <li>
                        <a href="#" title="Careers">Careers</a>
                      </li>
                    </ul>
                  </div>
                  <div
                    class="col-6 col-sm-auto mb-5 mb-md-0"
                    data-aos="fade-left"
                    data-aos-delay="200"
                  >
                    <h5 class="mb-3 mb-md-4">Quick Link</h5>
                    <ul class="footer-links">
                      <li>
                        <a href="#" title="Share Location">Share Location</a>
                      </li>
                      <li>
                        <a href="#" title="Orders Tracking">Orders Tracking</a>
                      </li>
                      <li>
                        <a href="#" title="Size Guide">Size Guide</a>
                      </li>
                      <li>
                        <a href="#" title="FAQs">FAQs</a>
                      </li>
                    </ul>
                  </div>
                  <div
                    class="col-6 col-sm-auto mb-5 mb-md-0"
                    data-aos="fade-left"
                    data-aos-delay="400"
                  >
                    <h5 class="mb-3 mb-md-4">Legal</h5>
                    <ul class="footer-links">
                      <li>
                        <a href="#" title="Terms & conditions"
                          >Terms & conditions</a
                        >
                      </li>
                      <li>
                        <a href="#" title="Privacy Policy">Privacy Policy</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Footer Bottom Part -->
      </footer>
      <!-- End Footer -->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="video-modal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
            <div class="modal-video-outer">
              <iframe
                id="video"
                src="https://www.youtube.com/embed/wWY_clozJlU"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- CODE HERE -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/perfect-scrollbar@1.5.5/dist/perfect-scrollbar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Theme JS -->
    <script src="<?= base_url('assets/frontend/js/app.js')?>"></script>
  </body>
</html>
