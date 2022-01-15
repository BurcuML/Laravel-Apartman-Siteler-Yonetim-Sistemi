@extends('layouts.admin')

@section('title', 'Contact Message List')


@section('content')

    <br> <br> <br>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="title-1 m-b-25">Messages</h2>
            <a href="#"><button type="button" class="btn btn-warning btn-sm" style="padding:7px; margin: 10px; width:7rem; ">
                    <i class="fa fa-map-marker"></i>&nbsp; Ekle</button></a>
            <br>
            @include('home.message')
            <br>
            <div class="table-responsive table--no-card m-b-40">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th class="text-right">Subject</th>
                        <th class="text-right">Message</th>
                        <th class="text-right">Admin Note</th>
                        <th class="text-right">Status</th>
                        <th class="text-right">Seçenekler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($datalist as $user)

                        <tr>

                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name}}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->subject }}</td>
                            <td>{{ $user->message }}</td>
                            <td class="text-right">{{ $user->note }}</td>
                            <td>{{ $user->status }}</td>

                            <td>
                                <div class="table-data-feature">

                                    <a href="{{route('admin_message_edit', ['id'=>$user->id])}}"  onclick="return !window.open(this.href, '', 'to=50 left=100 width=1100, height=700')">  <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="zmdi zmdi-edit"></i>
                                        </button></a>

                                    <a href="{{route('admin_message_delete', ['id'=>$user->id])}}" onclick="return confirm('Silmek istediğinden emin misin?')">  <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="zmdi zmdi-delete"></i>
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
