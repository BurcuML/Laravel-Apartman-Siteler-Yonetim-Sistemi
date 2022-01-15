@extends('layouts.home')

@section('title', 'About Us')

@section('content')
    <br><br><br><br>
    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="{{route('home')}}">Home</a><i class="fa fa-angle-double-right"></i><span>Hakkımızda</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->

    <div>
        {!!$setting->aboutus  !!}
    </div>

@endsection
