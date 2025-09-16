<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="DxA Ghazali" />
    <meta name="description" content="DESTANA - Desa Tangguh Bencana Sindanglaya" />
    <title>DESTANA SINDANGLAYA</title>
    @livewireStyles
    @vite(['resources/js/app.js'])
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.svg') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

</head>

<body>
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
                <span data-text-preloader="D" class="letters-loading">
                    D
                </span>
                <span data-text-preloader="E" class="letters-loading">
                    E
                </span>
                <span data-text-preloader="S" class="letters-loading">
                    S
                </span>
                <span data-text-preloader="T" class="letters-loading">
                    T
                </span>
                <span data-text-preloader="A" class="letters-loading">
                    A
                </span>
                <span data-text-preloader="N" class="letters-loading">
                    N
                </span>
                <span data-text-preloader="A" class="letters-loading">
                    A
                </span>
            </div>
            <p class="text-center">PEMERINTAH DESA SINDANGLAYA</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="index.html">
                                <img src="{{ asset('assets/img/logo/destana.png') }}" alt="logo-img"
                                    style="width:120px" />
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <p class="text d-none d-xl-block">
                        Destana Sindanglaya, komunitas tangguh yang membangun kesadaran, kesiapsiagaan, dan kemandirian
                        warga dalam menghadapi bencana.
                    </p>
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="https://maps.app.goo.gl/ujawLogqdYHjaivm9">Jln. Raya
                                        Cipanas No 144 Kantor Desa Sindangaya,
                                        Kecamatan Cipanas, Kabupaten Cianjur</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:admin@sindanglaya-desa.id"><span
                                            class="mailto:admin@sindanglaya-desa.id">admin@sindanglaya-desa.id</span></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="https://wa.me/62881011286373"> 0881-0112-86373</a>
                                </div>
                            </li>

                        </ul>
                        <div class="social-icon d-flex align-items-center">
                            <a href="https://www.tiktok.com/@pemdessindanglaya"><i class="fab fa-tiktok"></i></a>
                            <a href="https://www.youtube.com/c/WartaSindanglaya"><i class="fab fa-youtube"></i></a>
                            <a href="https://www.instagram.com/ds_sindanglaya/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <button id="gt-back-top" class="gt-back-to-top show">
        <i class="fa-regular fa-arrow-up"></i>
    </button>

    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"></div>

    @include('components.layouts.page.header')

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" name="search" placeholder="Search Here...">
                <button type="submit" aria-label="search submit" class="search-btn">
                    <span><i class="fa-regular fa-magnifying-glass"></i></span>
                </button>
            </form>
        </div>
    </div>

    <div id="smooth-wrapper">
        <div id="smooth-content">
            {{ $slot }}

            <footer class="gt-footer-section section-bg">
                <div class="container">
                    <div class="gt-footer-widget-wrapper">
                        <div class="row justify-content-between">
                            <div class="col-xl-4 col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".2s">
                                <div class="gt-footer-widget-items">
                                    <div class="gt-widget-head">
                                        <a href="index.html" class="gt-footer-logo">
                                            <img src="{{ asset('assets/img/logo/destana.png') }}" alt="img"
                                                style="width: 25%;height:25%" />
                                        </a>
                                    </div>
                                    <div class="gt-footer-content">
                                        <p>
                                            Destana Sindanglaya, lembaga tangguh yang fokus pada kesiapsiagaan,
                                            pencegahan, dan penanggulangan bencana. Siaga, cepat, dan terkoordinasi.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                                <div class="gt-footer-widget-items">
                                    <div class="gt-widget-head">
                                        <h5>Tentang Kami</h5>
                                    </div>
                                    <ul class="gt-list-area">
                                        <li>
                                            <a href="about.html"> Sejarah </a>
                                        </li>
                                        <li>
                                            <a href="team.html"> Tim Kami </a>
                                        </li>
                                        <li>
                                            <a href="service-details.html"> Legalitas </a>
                                        </li>
                                        <li>
                                            <a href="service-details.html"> KOlaborasi </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-2 ps-lg-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp"
                                data-wow-delay=".6s">
                                <div class="gt-footer-widget-items">
                                    <div class="gt-widget-head">
                                        <h5>Media Sosial</h5>
                                    </div>
                                    <ul class="gt-list-area">
                                        <li>
                                            <a href="https://www.instagram.com/ds_sindanglaya/"> Instagram </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/c/WartaSindanglaya"> Youtube </a>
                                        </li>
                                        <li>
                                            <a href="https://www.tiktok.com/@pemdessindanglaya"> Tiktok </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
                                <div class="gt-footer-widget-items">
                                    <div class="gt-widget-head">
                                        <h5>BERSATU DALAM MENJAGA DESA</h5>
                                    </div>
                                    <div class="gt-footer-app">
                                        <div class="app-image">
                                            <img src="{{ asset('assets/img/logo/sugih_mukti.png') }}" alt="img"
                                                style="width: 100px;height:100px" />
                                        </div>
                                        <div class="app-image">
                                            <img src="{{ asset('assets/img/logo/kemendes.png') }}" alt="img"
                                                style="width: 100px;height:100px" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom wow fadeInUp" data-wow-delay=".3s">
                        <div class="footer-wrapper">
                            <p>© 2025 DxA & Pemerintah Desa Sindanglaya.</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/viewport.jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.js') }}"></script>
    <script src="{{ asset('assets/js/gsap-scroll-to-plugin.js') }}"></script>
    <script src="{{ asset('assets/js/gsap-scroll-smoother.js') }}"></script>
    <script src="{{ asset('assets/js/gsap-scroll-trigger.js') }}"></script>
    <script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
    <script src="{{ asset('assets/js/splitType.js') }}"></script>
    <script src="{{ asset('assets/js/script-gsap.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @livewireScriptConfig
</body>

</html>
