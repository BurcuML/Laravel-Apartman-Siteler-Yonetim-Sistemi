<!-- admin panel tablo içeriği-->
@extends('layouts.admin')

@section('title', 'İçerik Sayfası')


@section('content')

    <br> <br> <br>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="title-1 m-b-25">Menü</h2>
            <a href="{{route('admin_content_add')}}"><button type="button" class="btn btn-warning btn-sm" style="padding:7px; margin: 10px; width:7rem; ">
                    <i class="fa fa-map-marker"></i>&nbsp; Ekle</button></a>
            <br>
            <div class="table-responsive table--no-card m-b-40">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>name</th>
                        <th>Apartman Numarası</th>
                        <th>Blok Numarası</th>
                        <th>Kira</th>
                        <th>Aidat</th>
                        <th>Type</th>
                        <th>Duyuru</th>
                        <th class="text-right">Status</th>
                        <th class="text-right">Image</th>
                        <th class="text-right">Gallery</th>
                        <th class="text-right">Seçenekler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($datalist as $user)

                        <tr>

                            <td>{{ $user->id }}</td>
                            <td>{{ $user->menu->title ?? 'None'}}</td>
                            <td>{{ $user->title }}</td>
                            <td>{{ $user->apartmannumarasi }}</td>
                            <td>{{ $user->bloknumarasi }}</td>
                            <td>{{ $user->kira }}</td>
                            <td>{{ $user->aidat }}</td>
                            <td>{{ $user->type }}</td>
                            <td>{{ $user->duyuru }}</td>
                            <td class="text-right">{{ $user->status }}</td>
                            <td class="text-right">
                                @if ($user->image)
                                    <img src="{{ Storage::url($user->image)}}" style="height:4.5rem; " alt="">
                                @endif
                            </td>
                            <td class="text-right"><a href="{{route('admin_image_add', ['content_id'=>$user->id])}}" onclick="return !window.open(this.href, '', 'to=50 left=100 width=1100, height=700')">Gallery</a></td>
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

