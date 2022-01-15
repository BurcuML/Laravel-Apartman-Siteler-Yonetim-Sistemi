@extends('layouts.home')

@section('title', 'Contact')

@section('content')
    <br><br><br><br>
    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="{{route('home')}}">Home</a><i class="fa fa-angle-double-right"></i><span>İletişim</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->

    <div class="col-md-6">
        {!!$setting->contact  !!}
    </div>

    <div id="contact" class="form-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-container">
                        <h2>İletişim Formu</h2>
                        <p>For registration questions please get in touch using the contact details below. For any questions use the form.</p>
                        <h3>İletişim Bilgileri</h3>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="media-body">{{$setting->address}}</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-mobile-alt"></i>
                                <div class="media-body">{{$setting->fax}}, &nbsp;&nbsp;<i class="fas fa-mobile-alt"></i>&nbsp;{{$setting->phone}}</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-envelope"></i>
                                <div class="media-body"><a class="light-gray" href="mailto:contact@zigo.com">{{$setting->email}}</a> <i class="fas fa-globe"></i><a class="light-gray" href="#your-link">www.zigo.com</a></div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
@include('home.message')
                <!-- Contact Form -->
                <form action="{{route('sendmessage')}}" method="post" >
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control-input" id="name" name="name" required>
                        <label class="label-control" for="name">Name</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control-input" id="phone" name="phone" required>
                        <label class="label-control" for="phone">Telefon Numarası</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control-input" id="email" name="email" required>
                        <label class="label-control" for="email">Email</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control-input" id="subject" name="subject" required>
                        <label class="label-control" for="subject">Subject</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control-textarea" id="message" name="message" required></textarea>
                        <label class="label-control" for="message">Your message</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control-submit-button">Send Message</button>
                    </div>

                </form>
                <!-- end of contact form -->

            </div>
    </div> <!-- end of form-3 -->
    <!-- end of contact -->

@endsection
