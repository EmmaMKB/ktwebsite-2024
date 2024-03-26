<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- title -->
    <title>Kreative Touch</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="author" content="ThemeZaa">
    <!-- description -->
    <meta name="description"
        content="Kreative Touch est une agence branding et vidéo basée à Lubumbashi.
                            Nous combinons passion et créativité pour emmener votre marque au niveau supérieur.">
    <!-- keywords -->
    <meta name="keywords"
        content="branding, filmmaking, motion, design, graphic design, motion design, kreative, kreative touch, impression, animation">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/apple-touch-icon-114x114.png') }}">
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootsnav.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-icons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme-vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" />
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3FGHFBZ44E"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-3FGHFBZ44E');
</script>

<body class="bg-background-fade">
    <!-- start header -->
    <header>
        <!-- start navigation -->
        <nav
            class="navbar navbar-default bootsnav navbar-top-scroll background-transparent white-link padding-four-lr menu-logo-center navbar-expand-lg">
            <div class="container-lg nav-header-container">
                <!-- start logo -->
                <div class="center-logo">
                    <a href="{{ route('home') }}" title="Kreative Touch" class="logo"><img
                            src="{{ asset('assets/images/logo.png') }}"
                            data-at2x="{{ asset('assets/images/logo@2x.png') }}" class="logo-dark"
                            alt="Kreative Touch"><img src="{{ asset('assets/images/logo-full-white.png') }}"
                            data-at2x="{{ asset('assets/images/logo-full-white@2x.png') }}" alt="Kreative Touch"
                            class="logo-light default"></a>
                </div>
                <!-- end logo -->
                <div class="col col-lg-12 px-0 accordion-menu">
                    <button type="button" class="navbar-toggler collapsed" data-bs-toggle="collapse"
                        data-bs-target="#navbar-collapse-toggle-1">
                        <span class="sr-only">toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-collapse collapse justify-content-between" id="navbar-collapse-toggle-1">
                        <ul class="nav navbar-nav alt-font text-normal w-40 md-w-100 text-sm-start justify-content-end"
                            data-in="animate__fadeIn" data-out="animate__fadeOut">
                            <!-- start menu item -->
                            <li>
                                <a href="{{ route('home') }}">Accueil</a>
                            </li>
                            <li>
                                <a href="#">A Propos</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right no-margin alt-font text-normal w-40 md-w-100 justify-content-start"
                            data-in="animate__fadeIn" data-out="animate__fadeOut">
                            <li>
                                <a href="#">Services</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->
    </header>
    <!-- end header -->
    <!-- start hero section -->
    <section class="wow animate__fadeIn p-0 cover-background color-code" data-color="1"
        style="background-image: url('{{ asset('assets/images/bg1.png') }}');">
        <div class="container position-relative full-screen">
            <div class="row h-100 align-items-center">
                <div class="col-xl-7 col-md-10 mx-auto text-center">
                    <span
                        class="after-before-separator text-extra-small alt-font text-white-2 letter-spacing-3 sm-letter-spacing-0 text-uppercase margin-20px-bottom sm-margin-5px-bottom d-inline-block">Your
                        Dose of Creativity</span>
                    <h2 class="font-weight-600 text-white-2 alt-font margin-40px-bottom sm-margin-25px-bottom">Nous
                        apportons de la créativité à votre communication</h2>
                    <a href="portfolio-full-width-grid-transform.html"
                        class="btn btn-transparent-white btn-rounded btn-medium text-link-white-2">Nos Réalisations</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end hero section -->
    <!-- start section -->
    <section class="wow animate__fadeIn color-code lg-no-background-img xs-padding-100px-bottom" data-color="2"
        style="background: url('{{ asset('assets/images/back-image1.png') }}') left bottom no-repeat,url('{{ asset('assets/images/back-image2.png') }}') right top no-repeat">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-md-10 text-center">
                    <div
                        class="text-extra-small letter-spacing-3 alt-font text-white-2 text-uppercase margin-70px-bottom md-margin-50px-bottom sm-margin-30px-bottom d-inline-block">
                        à propos de Kreative Touch</div>
                    <h3 class="text-white-2 alt-font w-100 margin-70px-bottom md-no-margin-bottom">Kreative Touch est
                        une agence branding et vidéo basée à Lubumbashi.
                        Nous combinons passion et créativité pour emmener votre marque au niveau supérieur.
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start footer -->
    <footer class="footer-center-logo padding-five-tb sm-padding-30px-tb">
        <div class="container">
            <div class="row align-items-center">
                <!-- start copyright -->
                <div class="col-lg-4 col-md-5 text-small text-center alt-font sm-margin-15px-bottom text-white-2">
                    &copy; 2024 Kreative Touch.
                </div>
                <!-- end copyright -->
                <!-- start logo -->
                <div class="col-lg-4 col-md-2 text-center sm-margin-10px-bottom">
                    <a href="{{ route('home') }}"><img class="footer-logo"
                            src="{{ asset('assets/images/logo-white.png') }}"
                            data-at2x="{{ asset('assets/images/logo-white@2x.png') }}" alt="Kreative Touch"></a>
                </div>
                <!-- end logo -->
                <!-- start social media -->
                <div class="col-lg-4 col-md-5 text-center text-white-2">
                    <span class="alt-font text-small margin-20px-right md-margin-15px-right">Réseaux sociaux</span>
                    <div class="social-icon-style-8 d-inline-block align-middle">
                        <ul class="small-icon mb-0">
                            <li><a class="facebook text-white-2"
                                    href="https://web.facebook.com/profile.php?id=100095293395086" target="_blank"><i
                                        class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li><a class="instagram text-white-2"
                                    href="https://www.instagram.com/kreativetouch_branding/" target="_blank"><i
                                        class="fa-brands fa-instagram me-0" aria-hidden="true"></i></a></li>
                            <li><a class="linkedin text-white-2"
                                    href="https://www.linkedin.com/company/kreative-touch-comms/" target="_blank"><i
                                        class="fa-brands fa-linkedin me-0" aria-hidden="true"></i></a></li>
                            <li><a class="youtube text-white-2"
                                    href="https://www.youtube.com/channel/UCbAV9rbLsGEMBHY-GIL6Iqg" target="_blank"><i
                                        class="fa-brands fa-youtube me-0" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end social media -->
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- start scroll to top -->
    <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
    <!-- end scroll to top  -->
    <!-- javascript -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootsnav.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.nav.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/hamburger-menu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/theme-vendors.min.js') }}"></script>
    <!-- setting -->
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
