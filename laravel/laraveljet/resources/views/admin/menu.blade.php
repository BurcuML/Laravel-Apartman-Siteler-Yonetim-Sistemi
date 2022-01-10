@extends('layouts.admin')

@section('title', 'Menü Sayfası')


@section('content')

    <br> <br> <br>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="title-1 m-b-25">Menü</h2>
            <a href="{{route('admin_menu_add')}}"><button type="button" class="btn btn-warning btn-sm" style="padding:7px; margin: 10px; width:7rem; ">
                    <i class="fa fa-map-marker"></i>&nbsp; Ekle</button></a>
            <br>
    <div class="table-responsive table--no-card m-b-40">
        <table class="table table-borderless table-striped table-earning">
            <thead>
            <tr>
                <th>date</th>
                <th>ID</th>
                <th>parent_ID</th>
                <th>name</th>
                <th class="text-right">Toplam Ödenen Tutar</th>
                <th class="text-right">Status</th>
                <th class="text-right">Seçenekler</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($datalist as $user)

            <tr>
                <td>2018-09-29 05:57</td>
                <td>{{ $user->id }}</td>
                <td class="text-right">{{ $user->parent_id }}</td>
                <td>{{ $user->title }}</td>
                <td> </td>
                <td class="text-right">{{ $user->status }}</td>


                <td>
                    <div class="table-data-feature">

                        <a href="{{route('admin_content_edit', ['id'=>$user->id])}}">  <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                          <i class="zmdi zmdi-edit"></i>
                        </button></a>
                        <a href="{{route('admin_content_delete', ['id'=>$user->id])}}" onclick="return confirm('Silmek istediğinden emin misin?')">  <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
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
