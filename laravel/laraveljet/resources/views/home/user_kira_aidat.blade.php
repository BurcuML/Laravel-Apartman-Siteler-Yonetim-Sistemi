
    <br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Landing page template built with HTML and Bootstrap 4 for presenting training courses, classes, workshops and for convincing visitors to register using the form.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Ödeme</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700,700i&display=swap" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/fontawesome-all.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/swiper.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/magnific-popup.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('assets') }}/images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">

<!-- Preloader -->
<div class="spinner-wrapper">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!-- end of preloader -->


<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">

    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Corso</a> -->

    <!-- Image Logo -->
    @auth
        <a class="navbar-brand logo-image" style="text-decoration: none" href="{{route('myprofile')}}">{{Auth::user()->name}}</a>
@endauth

<!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-awesome fas fa-bars"></span>
        <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link page-scroll" href="{{route('admin-login')}}">GİRİŞ<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="/register">KAYIT OL <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="{{route('faq')}}">SIKÇA SORULAN SORULAR</a>
            </li>


            <!-- Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle page-scroll" href="#date" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">SEÇENEKLER</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="article-details.html"><span class="item-text">Kira ve Aidat Ödeme</span></a>
                </div>
            </li>
            <!-- end of dropdown menu -->

            <li class="nav-item">
                <a class="nav-link page-scroll" href="{{route('contact')}}">İLETİŞİM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="{{route('references')}}">REFERENCES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="{{route('aboutus')}}">ABOUT US</a>
            </li>
        </ul>
        <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
    </div>
</nav> <!-- end of navbar -->
<!-- end of navigation -->


<!-- Header -->
<header id="header" class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="white">Ödeme</h1>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of ex-header -->
<!-- end of header -->


<!-- Breadcrumbs -->
<div class="ex-basic-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs">
                    <a href="{{route('home')}}">Home</a><i class="fa fa-angle-double-right"></i>
                </div> <!-- end of breadcrumbs -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of ex-basic-1 -->
<!-- end of breadcrumbs -->



<br><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="text-container last">
                            <h3>Kira ve Aidat Ödemeleriniz İçin</h3>
                            <p>Corso Landing Page uses tracking technology on the landing page, in the Applications, and in the Platforms, including mobile application identifiers and a unique Corso user ID to help us. Recognize you across different Services, to monitor usage and web traffic routing for the Services, and to customize the Services.</p>
                            <p>By visiting Corso or using the Services you agree to the use of cookies in your browser and HTML-based emails. You visit a website, by using any of the Services, or submitting via the Services you consent and use of your basic <a href="#your-link">Personal Information</a></p>
                        </div> <!-- end of text container -->
                    </div> <!-- end of col-->
                    <div class="col-md-6">

                        <!-- Privacy Form -->
                        <div class="form-container">
                            <form  action="{{route('sendprice')}}" method="post">
                            @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control-input" id="name" name="name" required>
                                    <label class="label-control" for="name">İsim-Soyisim</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control-input" id="apartmannumarasi" name="apartmannumarasi" required>
                                    <label class="label-control" for="apartmannumarasi">Apartman Numarası</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control-input" id="bloknumarasi" name="bloknumarasi" required>
                                    <label class="label-control" for="bloknumarasi">Blok Numarası</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control-input" id="odasayisi" name="odasayisi" required>
                                    <label class="label-control" for="odasayisi">Oda Sayısı</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control-input" id="kartnumarasi" name="kartnumarasi" required>
                                    <label class="label-control" for="kartnumarasi">Kart Numarası</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control-input" id="guvenliknumarasi" name="guvenliknumarasi" required>
                                    <label class="label-control" for="guvenliknumarasi">Güvenlik Numarası</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control-input" id="kira" name="kira" required>
                                    <label class="label-control" for="kira">Kira</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control-input" id="aidat" name="aidat" required>
                                    <label class="label-control" for="aidat">Aidat</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control-submit-button">ÖDEME</button>
                                </div>
                                <div class="form-message">
                                    <div id="pmsgSubmit" class="h3 text-center hidden"></div>
                                </div>
                            </form>
                        </div> <!-- end of form container -->
                        <!-- end of privacy form -->

                    </div> <!-- end of col-->
                </div> <!-- end of row -->
                <a class="btn-solid-reg" href="{{route('home')}}">BACK</a>
            </div> <!-- end of col-->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of ex-basic-2 -->
<!-- end of privacy content -->


<!-- Breadcrumbs -->
<div class="ex-basic-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs">
                    <a href="{{route('home')}}">Home</a><i class="fa fa-angle-double-right"></i><span>Ödeme </span>
                </div> <!-- end of breadcrumbs -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of ex-basic-1 -->
<!-- end of breadcrumbs -->


<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="footer-col first">
                    <h5>About Corso</h5>
                    <p class="p-small">We're passionate about teaching people how to do better SEO for their online presence</p>
                </div>
            </div> <!-- end of col -->
            <div class="col-md-3">
                <div class="footer-col second">
                    <h5>Links</h5>
                    <ul class="list-unstyled li-space-lg p-small">
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body"><a href="terms-conditions.html">Terms & Conditions</a></div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body"><a href="privacy-policy.html">Privacy Policy</a></div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body"><a href="article-details.html">Article Details</a></div>
                        </li>
                    </ul>
                </div>
            </div> <!-- end of col -->
            <div class="col-md-3">
                <div class="footer-col third">
                    <h5>Links</h5>
                    <ul class="list-unstyled li-space-lg p-small">
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body"><a href="article-details.html">Article Details</a></div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body"><a href="terms-conditions.html">Terms & Conditions</a></div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body"><a href="privacy-policy.html">Privacy Policy</a></div>
                        </li>
                    </ul>
                </div>
            </div> <!-- end of col -->
            <div class="col-md-3">
                <div class="footer-col fourth">
                    <h5>Social Media</h5>
                    <p class="p-small">For news & updates follow us</p>
                    <a href="#your-link">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#your-link">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#your-link">
                        <i class="fab fa-pinterest-p"></i>
                    </a>
                    <a href="#your-link">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#your-link">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#your-link">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of footer -->
<!-- end of footer -->


<!-- Copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="p-small">Copyright © 2020 <a href="https://inovatik.com">Inovatik</a> - All rights reserved</p>
                <p class="p-small">Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a></p>
            </div> <!-- end of col -->
        </div> <!-- enf of row -->
    </div> <!-- end of container -->
</div> <!-- end of copyright -->
<!-- end of copyright -->


<!-- Scripts -->
<script src="{{ asset('assets') }}/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
<script src="{{ asset('assets') }}/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
<script src="{{ asset('assets') }}/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
<script src="{{ asset('assets') }}/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
<script src="{{ asset('assets') }}/js/jquery.countdown.min.js"></script> <!-- The Final Countdown plugin for jQuery -->
<script src="{{ asset('assets') }}/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
<script src="{{ asset('assets') }}/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
<script src="{{ asset('assets') }}/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
<script src="{{ asset('assets') }}/js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>
