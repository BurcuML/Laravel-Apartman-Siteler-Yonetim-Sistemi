@php
    $setting =  App\Http\Controllers\HomeController::getSetting()
@endphp

<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="footer-col first">
                    <h5>About</h5>
                    <p class="p-small">We're passionate about teaching people how to do better SEO for their online presence</p> <br>
                    {{$setting->company}}<br>
                    {{$setting->address}}
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
                <div class="footer-col fourth">
                    <h5>Social Media</h5>
                    <p class="p-small">For news & updates follow us</p>
                    @if($setting->facebook != null)
                    <a href="{{$setting->facebook}}">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    @endif
                    @if($setting->twitter != null)
                    <a href="{{$setting->twitter}}">
                        <i class="fab fa-twitter"></i>
                    </a>
                    @endif
                    @if($setting->instagram != null)
                    <a href="{{$setting->instagram}} ">
                        <i class="fab fa-instagram"></i>
                    </a>
                    @endif
                     @if($setting->linkedinin != null)
                    <a href="{{$setting->linkedinin}}">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    @endif
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
                <p class="p-small">Copyright © 2020 <a href="https://inovatik.com">Inovatik</a> - All rights reserved |
                    {{$setting->company}}</p>
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

