@extends('layouts.admin')

@section('title', 'Add Menu')


@section('content')

<br> <br> <br>
<div class="row">
    <div class="col-lg-12">
        <h2 class="title-1 m-b-25">Menüye Ekle</h2>
    <div class="card">
        <div class="card-header">Form</div>
        <div class="card-body card-block">
            <form role="form" action="{{route('admin_menu_create')}}" method="post" >
                @csrf
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <select name="parent_id" id="SelectLm"  class="form-control ">

                            <option value="0">Kişi Listesi</option>
                            @foreach ($datalist as $user)
                            <option value="{{ $user->id }}">{{ \App\Http\Controllers\Admin\MenuController::getParentsTree($user, $user->title )}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" id="username" name="title" placeholder="Title" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" id="username" name="keywords" placeholder="Keywords" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" id="apartmannumarasi" name="apartmannumarasi" placeholder="Apartman Numarası" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" id="bloknumarasi" name="bloknumarasi" placeholder="Blok Numarası" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <input type="text" id="email" name="description" placeholder="Description" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-asterisk"></i>
                        </div>
                        <input type="text" id="password" name="kira" placeholder="Kira" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-asterisk"></i>
                        </div>
                        <input type="text" id="password" name="aidat" placeholder="Aidat" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-asterisk"></i>
                        </div>
                        <select id="SelectLm" class="form-control" name="status">
                            <option selected="selected">Please select</option>
                            <option >True</option>
                            <option>False</option>

                        </select>
                    </div>
                </div>


                <div class="form-actions form-group">
                    <button type="submit" class="btn btn-success btn-sm" style="background-color: rebeccapurple; border: 1px solid rebeccapurple; width: 7rem;">Ekle</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
@endsection
