@extends('layouts.admin')

@section('title', 'Payment')


@section('content')

    <br> <br> <br>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="title-1 m-b-25">Payment</h2>

            <br>
            @include('home.message')
            <br>
            <div class="table-responsive table--no-card m-b-40">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Apartman Numarası</th>
                        <th>Blok Numarası</th>
                        <th class="text-right">Oda Sayısı</th>
                        <th class="text-right">Kart Numarası</th>
                        <th class="text-right"> Güvenlik Numarası</th>
                        <th class="text-right">Kira</th>
                        <th class="text-right">Aidat</th>
                        <th class="text-right">Admin Notu</th>
                        <th class="text-right">Seçenekler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($datalist as $user)

                        <tr>

                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name}}</td>
                            <td>{{ $user->apartmannumarasi }}</td>
                            <td>{{ $user->bloknumarasi }}</td>
                            <td>{{ $user->odasayisi }}</td>
                            <td>{{ $user->kartnumarasi }}</td>
                            <td class="text-right">{{ $user->guvenliknumarasi }}</td>
                            <td>{{ $user->kira }}</td>
                            <td>{{ $user->aidat }}</td>
                            <td class="text-right">{{ $user->adminnote }}</td>
                            <td>
                                <div class="table-data-feature">

                                    <a href="{{route('admin_payment_edit', ['id'=>$user->id])}}"  onclick="return !window.open(this.href, '', 'to=50 left=100 width=1100, height=700')">  <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="zmdi zmdi-edit"></i>
                                        </button></a>

                                </div>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>

        </div>
    </div>

@endsection

