@extends('layouts.home')

@section('title', 'User Profile')


@section('content')

    <br><br><br><br>
    @auth
<!-- Breadcrumbs -->
<div class="ex-basic-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs">
                    <a href="{{route('home')}}">Home</a><i class="fa fa-angle-double-right"></i><span>User Profile</span>
                    <i class="fa fa-angle-double-right"></i><a href="{{route('home')}}">Logout</a>
                    @php
                        $userRoles=Auth::user()->roles->pluck('name');
                        @endphp
                    @if($userRoles->contains('admin'))
                    <i class="fa fa-angle-double-right"></i><a href="{{route('adminhome')}}" target="_blank">Admin</a>
                    @endif
                </div> <!-- end of breadcrumbs -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of ex-basic-1 -->
<!-- end of breadcrumbs -->
    @endauth
    <div>
    @include('profile.show')</div>
@endsection
