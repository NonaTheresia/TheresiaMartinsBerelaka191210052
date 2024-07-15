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


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="about-mf sect-pt4 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box-shadow-full">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="title-box-2 pt-4 pt-md-0">
                                        <h5 class="title-left">
                                            Send Us a Message
                                        </h5>
                                    </div>
                                    <div>
                                        @if (session('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('success') }}
                                        </div>
                                        @endif

                                        <form method="POST" action="{{ route('home.contact.store') }}">
                                            @csrf

                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" id="name"
                                                            placeholder="Your Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" id="email"
                                                            placeholder="Your Email" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" name="message" rows="5"
                                                    placeholder="Message" required></textarea>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Send Message</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->

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