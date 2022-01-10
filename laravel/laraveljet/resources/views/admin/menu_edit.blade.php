@extends('layouts.admin')

@section('title', 'Edit Menu')


@section('content')

    <br> <br> <br>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="title-1 m-b-25">Menüye Ekle</h2>
            <div class="card">
                <div class="card-header">Form</div>
                <div class="card-body card-block">
                    <form role="form" action="{{route('admin_menu_update', ['id'=>$data->id])}}" method="post" >
                        @csrf
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <select name="parent_id" id="SelectLm"  class="form-control ">
                                    <option value="{{$data->parent_id}}" selected="selected"></option>

                                    <option value="">Kişi Listesi</option>
                                    @foreach ($datalist as $user)
                                        <!-- ürünün kategorisi neyse oraya odakla  -->
                                        <option value="{{ $user->id }}"  @if ($user->id == $data->parent_id) selected="selected" @endif > {{ $user->title }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" id="username" value="{{$data->title}}" name="title" placeholder="Title" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" id="username" value="{{$data->keywords}}" name="keywords" placeholder="Keywords" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <input type="text" id="email" value="{{$data->description}}" name="description" placeholder="Description" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-asterisk"></i>
                                </div>
                                <select id="SelectLm" class="form-control">
                                    <option selected="selected">{{$data->status}}</option>
                                    <option >True</option>
                                    <option >False</option>

                                </select>
                            </div>
                        </div>


                        <div class="form-actions form-group">
                            <button type="submit" class="btn btn-success btn-sm" style="background-color: rebeccapurple; border: 1px solid rebeccapurple; width: 7rem;">Güncelle</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
