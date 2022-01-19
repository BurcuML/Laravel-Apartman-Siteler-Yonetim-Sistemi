@extends('layouts.admin')

@section('title', 'User')


@section('content')

    <br> <br> <br>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="title-1 m-b-25">User</h2>
            <br>
            <div class="table-responsive table--no-card m-b-40">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th> </th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Roles</th>
                        <th class="text-right">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($datalist as $user)

                        <tr>

                            <td>{{ $user->id }}</td>
                            <td class="text-right">
                                @if ($user->profile_photo_path)
                                    <img src="{{ \Illuminate\Support\Facades\Storage::url($user->profile_photo_path)}}" style="height:4.5rem; " alt="">
                                @endif
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->address }}</td>
                            <td>
                                @foreach($user->roles as $row)
                                    {{$row->name}}
                                @endforeach

                            <a href="{{route('admin_user_roles', ['id'=>$user->id])}}" onclick="return !window.open(this.href, '', 'to=50 left=100 width=1100, height=700')">Add</a>
                            </td>
                            <td>
                                <div class="table-data-feature">

                                    <a href="{{route('admin_user_edit', ['id'=>$user->id])}}">  <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="zmdi zmdi-edit"></i>
                                        </button></a>
                                    <a href="{{route('admin_user_delete', ['id'=>$user->id])}}" onclick="return confirm('Silmek istediğinden emin misin?')">  <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
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
