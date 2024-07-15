<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $getHeader->title ?? 'MY-PFOLIO' }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="{{ asset('templates/frontend/devfolio/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('templates/frontend/devfolio/assets/vendor/bootstrap/css/bootstrap.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('templates/frontend/devfolio/assets/vendor/font-awesome/css/font-awesome.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('templates/frontend/devfolio/assets/vendor/ionicons/css/ionicons.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('templates/frontend/devfolio/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('templates/frontend/devfolio/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('templates/frontend/devfolio/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: DevFolio - v2.4.0
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body id="page-top">

    <!-- ======= Header/ Navbar ======= -->
    <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll" href="#page-top">{{ $getHeader->navbar_title ?? 'MY-PFOLIO' }}</a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link js-scroll active" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="{{ route('about') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="{{ route('contact_us') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="{{ route('admin') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="{{ route('footer') }}">Footer</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ======= Intro Section ======= -->
    <div id="home" class="intro route bg-image"
        style="background-image: url('{{ asset('storage/uploads/image/header/'.($getHeader->image ?? 'gambar')) }}')">
        <div class="overlay-itro"></div>
        <div class="intro-content display-table">
            <div class="table-cell">
                <div class="container">
                    <!--<p class="display-6 color-d">Hello, world!</p>-->
                    @if($getHeader)
                        <!-- Tampilkan konten jika $getHeader tidak null -->
                        <h1 class="intro-title mb-4">{{ $getHeader->up_text }}</h1>
                    <p class="intro-subtitle">
                        <span class="text-slider-items">{{ $getHeader->down_text }}</span>
                        <strong class="text-slider"></strong>
                    </p>
                    @endif
                    <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Intro Section -->


    <main id="main">



        <!-- ======= Portfolio Section ======= -->
        @if ($getPortfolio->count() > 0)
            <section id="work" class="portfolio-mf sect-pt4 route">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="title-box text-center">
                                <h3 class="title-a">
                                    Artikel
                                </h3>
                                <div class="line-mf"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($getPortfolio as $portfolio)
                            <div class="col-md-4">
                                <div class="work-box">
                                    <a href="{{ asset('storage/uploads/image/portfolio/' . $portfolio->image) }}"
                                        data-gall="portfolioGallery" class="venobox">
                                        <div class="work-img">
                                            <img src="{{ asset('storage/uploads/image/portfolio/' . $portfolio->image) }}"
                                                alt="" class="img-fluid">
                                        </div>
                                    </a>
                                    <div class="work-content">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h2 class="w-title">{{ $portfolio->title }}</h2>
                                                <div class="w-more">
                                                    <span class="w-ctegory"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section><!-- End Portfolio Section -->
        @endif

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright-box">
                        <p class="copyright">&copy; Copyright
                            <strong>{{ $getFooter->copyright ?? 'Footer Copyright' }}</strong>. All Rights Reserved</p>
                        <div class="credits">
                            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('templates/frontend/devfolio/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('templates/frontend/devfolio/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('templates/frontend/devfolio/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('templates/frontend/devfolio/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('templates/frontend/devfolio/assets/vendor/waypoints/jquery.waypoints.min.j') }}s"></script>
    <script src="{{ asset('templates/frontend/devfolio/assets/vendor/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('templates/frontend/devfolio/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('templates/frontend/devfolio/assets/vendor/typed.js/typed.min.js') }}"></script>
    <script src="{{ asset('templates/frontend/devfolio/assets/vendor/venobox/venobox.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('templates/frontend/devfolio/assets/js/main.js') }}"></script>

</body>

</html>
