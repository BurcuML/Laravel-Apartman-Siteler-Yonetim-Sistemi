<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">

    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Corso</a> -->

    <!-- Image Logo -->
    @auth
    <a class="navbar-brand logo-image" style="text-decoration: none" href="{{route('myprofile')}}">{{Auth::user()->name}}</a><strong>{{Auth::user()->roles->pluck('name')}}</strong>
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
                <a class="nav-link page-scroll" href="/login">GİRİŞ<span class="sr-only">(current)</span></a>
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
                    <a class="dropdown-item" href="{{route('paymen')}}"><span class="item-text">Kira ve Aidat Ödeme</span></a>

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
<header id="header" class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-container">

                    <h1>Apartmanımıza Hoşgeldiniz</h1>
                    <p class="p-large"></p>
                    <a class="btn-solid-lg page-scroll" href="/register">KAYIT OL</a>
                    <a class="btn-outline-lg page-scroll" href="#instructor">KEŞFET</a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->

    <!-- Image Slider -->
    <div class="outer-container">
        <div class="slider-container">
            <div class="swiper-container image-slider-1">
                <div class="swiper-wrapper">

                    <!-- Slide -->
                    <div class="swiper-slide" >
                        <a href="{{route('icerik')}}"> <img class="img-fluid" src="{{ asset('assets') }}/images/details-slide-1.jpg" alt="alternative"></a>
                    </div>
                    <!-- end of slide -->

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <a href="{{route('icerik')}}"> <img class="img-fluid" src="{{ asset('assets') }}/images/details-slide-2.jpg" alt="alternative"></a>
                    </div>
                    <!-- end of slide -->

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <a href="{{route('icerik')}}"><img class="img-fluid" src="{{ asset('assets') }}/images/details-slide-3.jpg" alt="alternative"></a>
                    </div>
                    <!-- end of slide -->

                </div> <!-- end of swiper-wrapper -->

                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!-- end of add arrows -->

            </div> <!-- end of swiper-container -->
        </div> <!-- end of slider-container -->
    </div> <!-- end of outer-container -->
    <!-- end of image slider -->

</header> <!-- end of header -->
<!-- end of header -->
