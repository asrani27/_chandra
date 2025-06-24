<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Manajemen Aset</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link rel="stylesheet" href="/notif/dist/css/iziToast.min.css">
    <script src="/manajemen//notif/dist/js/iziToast.min.js" type="text/javascript"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/manajemen/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/manajemen/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/manajemen/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/manajemen/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/manajemen/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="/manajemen/assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: QuickStart
  * Template URL: https://bootstrapmade.com/quickstart-bootstrap-startup-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">


    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="/" class="logo d-flex align-items-center me-auto">
                <img src="/logo/logo2.png" alt="">
                <h1 class="sitename">Balangan</h1>
            </a>

            <nav id="navmenu" class="navmenu">


                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="/">Chandra</a>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <div class="hero-bg">
                <img src="/manajemen/assets/img/hero-bg-light.webp" alt="">
            </div>
            <div class="container text-center">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h1 data-aos="fade-up">Sistem Aplikasi Manajemen Aset Pada Dinas Komunikasi Informatika Statistik
                        Dan Persandian Kabupaten Balangan<span></span></h1><br />

                    <form action="/login" method="post">
                        @csrf
                        <div class="row gy-4">

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="username" id="name" placeholder="Username"
                                    autocomplete="new-password" value="{{old('username')}}" required>

                                @error('username')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="col-md-12 ">
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Password" autocomplete="new-password" required
                                    value="{{old('password')}}">

                                @error('password')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn-get-started">Login</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </section><!-- /Hero Section -->





    </main>

    <footer id="footer" class="footer position-relative light-background">




    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="/manajemen/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/manajemen/assets/vendor/php-email-form/validate.js"></script>
    <script src="/manajemen/assets/vendor/aos/aos.js"></script>
    <script src="/manajemen/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/manajemen/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="/manajemen/assets/js/main.js"></script>

    <script type="text/javascript">
        @include('layouts.notif')
    </script>
</body>

</html>