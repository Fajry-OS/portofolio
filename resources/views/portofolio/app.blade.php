<!DOCTYPE html>
<html lang="en">

<head>
    <title>MyPortofolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('porto/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('porto/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('porto/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('porto/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('porto/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('porto/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('porto/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('porto/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('porto/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('porto/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('porto/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('adm/plugins/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('portofolio.about') }}"><span>M</span>yPortofolio</a>
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
                data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav nav ml-auto">
                    <li class="nav-item"><a href="{{ route('portofolio.about') }}"
                            class="nav-link"><span>Home</span></a></li>
                    <li class="nav-item"><a href="{{ route('portofolio.resume') }}"
                            class="nav-link"><span>Resume</span></a></li>
                    <li class="nav-item"><a href="{{ route('portofolio.skill') }}"
                            class="nav-link"><span>Skill</span></a></li>
                    <li class="nav-item"><a href="{{ route('portofolio.project') }}"
                            class="nav-link"><span>Projects</span></a></li>
                    <li class="nav-item"><a href="{{ route('portofolio.contact') }}"
                            class="nav-link"><span>Contact</span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Content Pages --}}
    @yield('content')

    {{-- Footer --}}
    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">About</h2>
                        <p>Dengan keahlian dalam pengembangan web, saya menciptakan solusi yang inovatif dan efektif
                            untuk klien saya. Portfolio ini
                            adalah cerminan dari dedikasi saya terhadap kualitas dan kreativitas dalam setiap proyek
                            yang saya tangani.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">

                            <li class="ftco-animate"><a href="https://wa.me/6285947255220"><span
                                        class="icon-whatsapp"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.facebook.com/fajry.o.s?locale=id_ID"><span
                                        class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.instagram.com/fajryo21/"><span
                                        class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('portofolio.about') }}"><span
                                        class="icon-long-arrow-right mr-2"></span>Home</a></li>
                            <li><a href="{{ route('portofolio.resume') }}"><span
                                        class="icon-long-arrow-right mr-2"></span>About</a></li>
                            <li><a href="{{ route('portofolio.skill') }}"><span
                                        class="icon-long-arrow-right mr-2"></span>Skill</a></li>
                            <li><a href="{{ route('portofolio.project') }}"><span
                                        class="icon-long-arrow-right mr-2"></span>Projects</a></li>
                            <li><a href="{{ route('portofolio.contact') }}"><span
                                        class="icon-long-arrow-right mr-2"></span>Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Jatiwarna, Kota
                                        Bekasi</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span
                                            class="text">085947255220</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">fajriseptiano@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i
                            class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com"
                            target="_blank">Fajry-OS</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="{{ asset('porto/js/jquery.min.js') }}"></script>
    <script src="{{ asset('porto/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('porto/js/popper.min.js') }}"></script>
    <script src="{{ asset('porto/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('porto/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('porto/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('porto/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('porto/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('porto/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('porto/js/aos.js') }}"></script>
    <script src="{{ asset('porto/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('porto/js/scrollax.min.js') }}"></script>

    <script src="{{ asset('porto/js/main.js') }}"></script>

</body>

</html>
