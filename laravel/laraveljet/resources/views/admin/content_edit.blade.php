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
            <h2 class="title-1 m-b-25">Add</h2>
            <div class="card">
                <div class="card-header">Content Edit</div>
                <div class="card-body card-block">
                    <form role="form" action="{{route('admin_content_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                </div>
                                <select name="menu_id" id="SelectLm"  class="form-control " style="height: 3.5rem">

                                    <option value="" >List</option>
                                    @foreach ($datalist as $user)
                                        <option value="{{ $user->id }}"  @if ($user->id == $data->menu_id) selected="selected" @endif > {{ $user->title }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">

                                </div>
                                <input type="text" id="username" name="title" value="{{$data->title}}" placeholder="Title" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">

                                </div>
                                <input type="text" id="username" name="keywords" value="{{$data->keywords}}" placeholder="Keywords" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">

                                </div>
                                <input type="text" id="email" name="description" value="{{$data->description}}" placeholder="Description" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">

                                <input type="text" id="email" name="type" value="{{$data->type}}" placeholder="Type" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">

                            <textarea id="summernote" name="detail"></textarea>

                            <script>
                                $('#summernote').summernote();

                            </script>
                        </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <input type="text" id="email" name="kira"  value="{{$data->kira}}" placeholder="Kira" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <input type="text" id="email" name="aidat"  value="{{$data->aidat}}" placeholder="Aidat" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <input type="text" id="email" name="bloknumarasi"  value="{{$data->bloknumarasi}}" placeholder="Blok Numarası" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <input type="text" id="email" name="apartmannumarasi"  value="{{$data->apartmannumarasi}}" placeholder="Apartman Numarası" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-asterisk"></i>
                                    </div>
                                    <input type="text" id="password" name="duyuru" value="{{$data->duyuru}}" placeholder="Duyuru" class="form-control">
                                </div>
                            </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">

                                        </div>
                                        <input type="file" id="password" name="image" value="{{$data->image}}" placeholder="Image" class="form-control">
                                        @if ($data->image)
                                        <img src="{{ \Illuminate\Support\Facades\Storage:: url($data->image)}}" height="30" alt="">
                                        @endif
                                    </div>
                                </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">

                                </div>
                                <select id="SelectLm" class="form-control" style="height: 3rem" value="{{$data->status}}">
                                    <option selected="selected">Please select</option>
                                    <option >True</option>
                                    <option>False</option>

                                </select>
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
