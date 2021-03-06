

@section('title', 'İçerik Detay')
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
    <title>Detail</title>

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
                    <a class="dropdown-item" href="article-details.html"><span class="item-text">Kira Ödeme</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">Aidat Ödeme</span></a>
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
                <h1 class="white">Apartmanımızın İçerik Detayı</h1>
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
                    <a href="{{route('home')}}">Home</a><i class="fa fa-angle-double-right"></i><span></span>
                </div> <!-- end of breadcrumbs -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of ex-basic-1 -->
<!-- end of breadcrumbs -->


<!-- Privacy Content -->
<div class="ex-basic-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="image-container-large">
                    <img class="img-fluid" src="{{ asset('assets') }}/images/details-slide-1.jpg" alt="alternative">
                </div> <!-- end of image-container-large -->
                <div class="text-container">
                    <h3>Apartman Sitemizin Dıştan Detaylı Görünümü</h3>
                    <p>Corso also automatically collects and receives certain information from your computer or mobile device, including the activities you perform on our Website, the Platforms, and the Applications, the type of hardware and software you are using (for example, your operating system or browser), and information obtained from cookies. For example, each time you visit the Website or otherwise use the Services, we automatically collect your IP address, browser and device type, access times, the web page from which you came, the regions from which you navigate the web page, and the web page(s) you access (as applicable).</p>
                    <p>When you first register for a Corso account, and when you use the Services, we collect some <a href="#your-link">Personal Information</a> about you such as:</p>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">The geographic area where you use your computer and mobile devices should be the same with the one of your</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Your full name, username, and email address and other contact details should be provided in the contact forms</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">A unique Corso user ID (an alphanumeric string) which is assigned to you upon registration should always be at front</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Every system is backuped regularly and it will not fail</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Your IP Address and, when applicable, timestamp related to your consent and confirmation of consent but please make</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Other information submitted by you or your organizational representatives via various methods and practiced techniques</div>
                                </li>
                            </ul>
                        </div> <!-- end of col -->

                        <div class="col-md-6">
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Your billing address and any necessary other information to complete any financial transaction, and when making purchases through the Services, we may also collect your credit card or PayPal information or any other sensitive</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">User generated content (such as messages, posts, comments, pages, profiles, images, feeds or communications exchanged on the Supported Platforms that can be used)</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Images or other files that you may publish via our Services</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Information (such as messages, posts, comments, pages, profiles, images) we may receive relating to communications you send us, such as queries or comments concerning</div>
                                </li>
                            </ul>
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                </div> <!-- end of text-container-->

                <div class="text-container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Yan Tarafta Örnek Bir Dairemiz Bulunmakta</h3>
                            <p>Corso also automatically collects and receives certain information from your computer or mobile device, including the activities you perform on our Website, the Platforms, and the Applications, the type of hardware and software you are using (for example, your operating system or browser), and information obtained.</p>
                            <p>For example, each time you visit the Website or otherwise use the Services, we automatically collect your IP address, browser and device type, access times, the web page.</p>
                            <p>The best way to promoted digital products is to provide potential users with free versions throughout the product's life.</p>
                        </div> <!-- end of col -->
                        <div class="col-md-6">
                            <div class="image-container-small">
                                <img class="img-fluid" src="{{ asset('assets') }}/images/details-slide-3.jpg" alt="alternative">
                            </div> <!-- end of image-container-small -->
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                </div> <!-- end of text-container -->

                <div class="text-container dark">
                    <p class="testimonial-text">Corso is a HTML landing page template tool. By its nature, Services enable our customers to promote their products and services integrate with hundreds of business applications that they already use, all in one place. Services help our customers promote their products and services, marketing and advertising; engaging audiences; scheduling and publishing.</p>
                </div> <!-- end of text container -->

                <div class="text-container last">
                    <h3>Dairelerimiz her açıdan konforlu ve huzurludur.</h3>
                </div> <!-- end of text-container -->
                <a class="btn-solid-reg" href="{{route('home')}}">BACK</a>
            </div> <!-- end of col-->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of ex-basic-2 -->
<!-- end of privacy content -->
<br><br>
<!-- Contact Form -->
<h2>Yorumlarınızı Bekleriz</h2>
<form action="{{route('sendreview')}}" method="post">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control-input" id="user_id" name="user_id" required>
        <label class="label-control" for="user_id">User_id</label>
        <div class="help-block with-errors"></div>
    </div>
    <div class="form-group">
        <input type="text" class="form-control-input" id="name" name="name" required>
        <label class="label-control" for="name">Name</label>
        <div class="help-block with-errors"></div>
    </div>
    <div class="form-group">
        <input type="text" class="form-control-input" id="apartman" name="apartman" required>
        <label class="label-control" for="apartman">Apartman</label>
        <div class="help-block with-errors"></div>
    </div>
    <div class="form-group">
        <input type="text" class="form-control-input" id="subject" name="subject" required>
        <label class="label-control" for="subject">Subject</label>
        <div class="help-block with-errors"></div>
    </div>
    <div class="form-group">
        <textarea class="form-control-textarea" id="review" name="review" required></textarea>
        <label class="label-control" for="review">Review</label>
        <div class="help-block with-errors"></div>
    </div>
    <div class="form-group">
        <button type="submit" class="form-control-submit-button">SUBMIT</button>
    </div>
    <div class="form-message">
        <div id="cmsgSubmit" class="h3 text-center hidden"></div>
    </div>
</form>
<!-- end of contact form -->

<!-- Breadcrumbs -->
<div class="ex-basic-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs">
                    <a href="{{route('home')}}">Home</a><i class="fa fa-angle-double-right"></i><span></span>
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
