@extends('layouts.admin')

@section('title', 'Add Menu')
@section('javascript')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection

@section('content')

    <br> <br> <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">User Update</div>
                <div class="card-body card-block">
                    <form role="form" action="{{route('admin_user_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">

                                </div>
                                <input type="text" id="username" name="name" value="{{$data->name}}" placeholder="Title" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">

                                </div>
                                <input type="text" id="username" name="email" value="{{$data->email}}" placeholder="Keywords" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">

                                </div>
                                <input type="text" id="email" name="phone" value="{{$data->phone}}" placeholder="Description" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">

                                    <input type="text" id="email" name="address" value="{{$data->address}}" placeholder="Type" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">

                                    </div>
                                    <input type="file" id="password" name="image" value="{{$data->image}}" placeholder="Image" class="form-control">
                                    @if ($data->profile_photo_path)
                                        <img src="{{ Storage:: url($data->profile_photo_path)}}" height="30" alt="">
                                    @endif
                                </div>
                            </div>
                            <div class="form-actions form-group">
                                <button type="submit" class="btn btn-success btn-sm" style="background-color: rebeccapurple; border: 1px solid rebeccapurple; width: 7rem;">Update</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

