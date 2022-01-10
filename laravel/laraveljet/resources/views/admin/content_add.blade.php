@extends('layouts.admin')

@section('title', 'Add')

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
            <h2 class="title-1 m-b-25">Ekle</h2>
            <div class="card">
                <div class="card-header">Form</div>
                <div class="card-body card-block">
                    <form role="form" action="{{route('admin_content_store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <select name="menu_id" id="SelectLm"  class="form-control " style="height: 3rem;">

                                    <option value="">Kişi Listesi</option>
                                    @foreach ($datalist as $user)
                                        <option value="{{ $user->id }}">{{ $user->title}}</option>
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
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <input type="text" id="email" name="description" placeholder="Description" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                </div>
                                <input type="text" id="email" name="type" placeholder="Type" class="form-control">
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
                                </div>
                                <input type="file" id="email" name="image" placeholder="Image" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-asterisk"></i>
                                </div>
                                <input type="text" id="password" name="status" placeholder="Status" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-asterisk"></i>
                                </div>
                                <select id="SelectLm" class="form-control" style="height: 3rem;">
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
