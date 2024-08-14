<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Homepage 1 - Payment Solution</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
      rel="preconnect"
      href="https://fonts.gstatic.com"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap"
      rel="stylesheet"
    />
    <link rel="shortcut icon" type="image/png" href="assets/images/fav.png" />
    <!--build:css assets/css/styles.min.css-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/slick.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-drawer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/icons/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/animate-4.1.1.min.css')}}" />
    <!--endbuild-->
  </head>
  <body>
    <div id="header">
        <div class="header-menu style-one bg-white">
          <div class="container flex-between h-80">
            <a class="menu-left-block" href=""
              ><img
                class="menu-logo display-block"
                src="assets/images/Logo.svg"
                alt="logo"
            /></a>
            <div class="menu-center-block h-100">
              <ul class="menu-nav flex-item-center h-100">
                <li class="nav-item h-100 flex-center home">
                  <a class="nav-link" href="{{route('home')}}">Home </a>
                </li>
                <li class="nav-item h-100 flex-center home">
                  <a class="nav-link" href="{{route('blog')}}">Blog </a>
                </li>
              </ul>
            </div>
            <div class="menu-right-block flex-item-center">
              <div class="icon-call"><i class="icon-phone-call fs-36"></i></div>
              <div class="text ml-12">
                <div class="text caption1">Free Consultancy</div>
                <div class="number text-button">+123 456 7890</div>
              </div>
              <div class="menu-humburger display-none pointer">
                <i class="ph-bold ph-list display-block"></i>
              </div>
            </div>
          </div>
          <div id="menu-mobile-block">
            <div class="menu-mobile-main">
              <div class="container">
                <ul class="menu-nav-mobile h-100 pt-4 pb-4">
                  <li
                    class="nav-item-mobile h-100 flex-column gap-8 pt-8 pb-8 pl-12 pr-12 pointer home"
                  >
                    <a class="fs-14 nav-link-mobile" href="#!"
                      >Home <i class="ph-fill ph-caret-down fs-12"></i
                    ></a>
                    <ul class="sub-nav-mobile">
                      <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8 active">
                        <a class="sub-nav-link fs-14" href="index.html"
                          >Payment Solution</a
                        >
                      </li>
                      <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8">
                        <a class="sub-nav-link fs-14" href="home2.html"
                          >Financial Planning</a
                        >
                      </li>
                      <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8">
                        <a class="sub-nav-link fs-14" href="home3.html"
                          >Online Banking</a
                        >
                      </li>
                      <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8">
                        <a class="sub-nav-link fs-14" href="home4.html"
                          >Personal Finance</a
                        >
                      </li>
                      <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8">
                        <a class="sub-nav-link fs-14" href="home5.html"
                          >Cryptocurrency Financial</a
                        >
                      </li>
                      <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8">
                        <a class="sub-nav-link fs-14" href="home6.html"
                          >Blockchain</a
                        >
                      </li>
                    </ul>
                  </li>
                  <li
                    class="nav-item-mobile h-100 flex-column gap-8 pt-4 pb-8 pl-12 pr-12 pointer about"
                  >
                    <a class="fs-14 nav-link-mobile" href="#!"
                      >About <i class="ph-fill ph-caret-down fs-12"></i
                    ></a>
                    <ul class="sub-nav-mobile">
                      <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8">
                        <a class="sub-nav-link fs-14" href="about-one.html"
                          >About Style 1</a
                        >
                      </li>
                      <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8">
                        <a class="sub-nav-link fs-14" href="about-two.html"
                          >About Style 2</a
                        >
                      </li>
                    </ul>
                  </li>
                  <li
                    class="nav-item-mobile h-100 flex-column gap-8 pt-4 pb-8 pl-12 pr-12 pointer services"
                  >
                    <a class="fs-14 nav-link-mobile" href="#!"
                      >Services <i class="ph-fill ph-caret-down fs-12"></i
                    ></a>
                    <ul class="sub-nav-mobile">
                      <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8">
                        <a class="sub-nav-link fs-14" href="service-one.html"
                          >Service Style 1</a
                        >
                      </li>
                      <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8">
                        <a class="sub-nav-link fs-14" href="service-two.html"
                          >Service Style 2</a
                        >
                      </li>
                      <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8">
                        <a class="sub-nav-link fs-14" href="service-detail.html"
                          >Services Detail</a
                        >
                      </li>
                    </ul>
                  </li>
                  <li
                    class="nav-item-mobile h-100 flex-column gap-8 pt-4 pb-8 pl-12 pr-12 pointer case"
                  >
                    <a class="fs-14 nav-link-mobile" href="#!"
                      >Case Studies <i class="ph-fill ph-caret-down fs-12"></i
                    ></a>
                    <ul class="sub-nav-mobile">
                      <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8">
                        <a class="sub-nav-link fs-14" href="case-studies-one.html"
                          >Case Studies 1</a
                        >
                      </li>
                      <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8">
                        <a class="sub-nav-link fs-14" href="case-studies-two.html"
                          >Case Studies 2</a
                        >
                      </li>
                      <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8">
                        <a
                          class="sub-nav-link fs-14"
                          href="case-studies-detail.html"
                          >Case Studies Detail</a
                        >
                      </li>
                    </ul>
                  </li>
                  <li
                    class="nav-item-mobile h-100 flex-column gap-8 pt-4 pb-8 pl-12 pr-12 pointer pages"
                  >
                    <a class="fs-14 nav-link-mobile" href="#!"
                      >Pages <i class="ph-fill ph-caret-down fs-12"></i
                    ></a>
                    <ul class="sub-nav-mobile">
                      <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8">
                        <a class="sub-nav-link fs-14" href="faqs.html">FAQs</a>
                      </li>
                      <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8">
                        <a class="sub-nav-link fs-14" href="pricing.html"
                          >Pricing</a
                        >
                      </li>
                      <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8">
                        <a class="sub-nav-link fs-14" href="partners.html"
                          >Partners</a
                        >
                      </li>
                    </ul>
                  </li>
                  <li
                    class="nav-item-mobile h-100 flex-column gap-8 pt-4 pb-8 pl-12 pr-12 pointer blog"
                  >
                    <a class="fs-14 nav-link-mobile" href="#!"
                      >Blog <i class="ph-fill ph-caret-down fs-12"></i
                    ></a>
                    <ul class="sub-nav-mobile">
                      <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8">
                        <a class="sub-nav-link fs-14" href="blog-list-one.html"
                          >Blog List 1</a
                        >
                      </li>
                      <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8">
                        <a class="sub-nav-link fs-14" href="blog-list-two.html"
                          >Blog List 2</a
                        >
                      </li>
                      <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8">
                        <a class="sub-nav-link fs-14" href="blog-grid.html"
                          >Blog Grid</a
                        >
                      </li>
                      <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8">
                        <a class="sub-nav-link fs-14" href="blog-masonry.html"
                          >Blog Masonry</a
                        >
                      </li>
                      <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8">
                        <a class="sub-nav-link fs-14" href="blog-detail-one.html"
                          >Blog Detail 1</a
                        >
                      </li>
                      <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8">
                        <a class="sub-nav-link fs-14" href="blog-detail-two.html"
                          >Blog Detail 2</a
                        >
                      </li>
                    </ul>
                  </li>
                  <li
                    class="nav-item-mobile h-100 flex-column gap-8 pt-4 pb-8 pl-12 pr-12 pointer contact"
                  >
                    <a class="fs-14 nav-link-mobile" href="#!"
                      >Contact <i class="ph-fill ph-caret-down fs-12"></i
                    ></a>
                    <ul class="sub-nav-mobile">
                      <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8">
                        <a class="sub-nav-link fs-14" href="contact-one.html"
                          >Contact Style 1</a
                        >
                      </li>
                      <li class="sub-nav-item pl-12 pr-12 pt-8 pb-8">
                        <a class="sub-nav-link fs-14" href="contact-two.html"
                          >Contact Style 2</a
                        >
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
@yield('content')
    <!--build:js assets/js/main.min.js-->
    <script src="{{asset('assets/js/jquery-3.7.0.js')}}"></script>
    <script src="{{asset('assets/js/jquery-migrate-3.4.1.js')}}"></script>
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/countUp.min.js')}}"></script>
    <script src="{{asset('assets/js/phosphor-icon.js')}}"></script>
    <script src="{{asset('assets/js/scrollreveal-4.0.0.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap-drawer.min.js')}}"></script>
    <script src="{{asset('assets/js/drawer.min.js')}}"></script>
    <script src="{{asset('assets/js/main.min.js')}}"></script>
    <!--endbuild-->
  </body>
</html>