<html>
<head>
    <link href="{{asset('assets')}}/admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('assets')}}/admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('assets')}}/admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('assets')}}/admin/css/theme.css" rel="stylesheet" media="all">
</head>
<body>

    <br> <br> <br>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="title-1 m-b-25">Add Image</h2>
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body card-block">
                    <form role="form" action="{{route('admin_image_store', ['content_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf

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
                                </div>
                                <input type="file" id="email" name="image" placeholder="Image" class="form-control">
                            </div>
                        </div>

                        <div class="form-actions form-group">
                            <button type="submit" class="btn btn-success btn-sm" style="background-color: rebeccapurple; border: 1px solid rebeccapurple; width: 7rem;">Ekle</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="table-responsive table--no-card m-b-40">
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name(s)</th>
                            <th class="text-right">Image</th>
                            <th class="text-right">Seçenekler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($images as $user)

                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->title }}</td>
                                <td class="text-right">
                                    @if ($user->image)
                                        <img src="{{ Storage::url($user->image) }}" style="height:4.5rem; " alt="">
                                    @endif
                                </td>
                                <td>
                                    <div class="table-data-feature">

                                        <a href="{{route('admin_image_delete', ['id'=>$user->id, 'content_id'=>$data->id])}}" onclick="return confirm('Silmek istediğinden emin misin?')">  <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
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
</body>
</html>
