@extends('layouts.admin')

@section('title', 'Edit Setting')
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
            <h2 class="title-1 m-b-25">Edit Setting</h2>
            <div class="card" >
                <div class="card-header" style="background-color: #9999cc; color:black;">Form</div>
                <div class="card-body card-block" style="background-color: #9999cc">
                    <form role="form" action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" id="username" name="id" value="{{$data->id}}" placeholder="ID" class="form-control">

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-heading"></i>
                                </div>
                                <input type="text" id="username" name="title" value="{{$data->title}}" placeholder="Title" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="far fa-star"></i>
                                </div>
                                <input type="text" id="username" name="keywords" value="{{$data->keywords}}" placeholder="Keywords" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-info"></i>
                                </div>
                                <input type="text" id="email" name="description" value="{{$data->description}}" placeholder="Description" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="far fa-building"></i>
                                </div>
                                <input type="text" id="email" name="company" value="{{$data->company}}" placeholder="Company" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-map-marker-alt"></i>                                </div>
                                <input type="text" id="email" name="address" value="{{$data->address}}" placeholder="Address" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-phone"></i>                                </div>
                                <input type="text" id="email" name="phone" value="{{$data->phone}}" placeholder="Phone" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-fax"></i>                                </div>
                                <input type="text" id="email" name="fax" value="{{$data->fax}}" placeholder="Fax" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-envelope"></i>                                </div>
                                <input type="text" id="email" name="email" value="{{$data->email}}" placeholder="Email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-info"></i>                                </div>
                                <input type="text" id="email" name="smtpserver" value="{{$data->smtpserver}}" placeholder="Smtpserver" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-info"></i>                                </div>
                                <input type="text" id="email" name="smtpemail" value="{{$data->smtpemail}}" placeholder="Smptemail" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-info"></i>                                </div>
                                <input type="text" id="email" name="smtppassword" value="{{$data->smtppassword}}" placeholder="Smtppassword" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-info"></i>                                </div>
                                <input type="text" id="email" name="smtpport" value="{{$data->smtpport}}" placeholder="Smtpport" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fab fa-facebook-f"></i>                                </div>
                                <input type="text" id="email" name="facebook" value="{{$data->facebook}}" placeholder="Facebook" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fab fa-instagram"></i>
                                </div>
                                <input type="text" id="email" name="instagram" value="{{$data->instagram}}" placeholder="Instagram" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fab fa-twitter"></i>                                </div>
                                <input type="text" id="email" name="twitter" value="{{$data->twitter}}" placeholder="Twitter" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fab fa-linkedin"></i>                           </div>
                                <input type="text" id="email" name="linkedinin" value="{{$data->linkedinin}}" placeholder="LinkedIn" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>About Us</label>

                            <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Contact</label>
                            <textarea id="contact" name="contact" placeholder="Contact">{{$data->contact}}</textarea>
                        </div>
                            <div class="form-group">
                                <label>References</label>
                            <textarea id="references" name="references">{{$data->references}}</textarea>
                            </div>
                            <script>
                                $('#aboutus').summernote();
                                $('#contact').summernote();
                                $('#references').summernote();

                            </script>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="far fa-images"></i>                                </div>
                                <input type="file" id="password" name="image" value="{{$data->image}}" placeholder="Image" class="form-control" style="height: 4rem">
                                @if ($data->image)
                                    <img src="{{ Storage:: url($data->image)}}" height="30" alt="">
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-asterisk"></i>
                                </div>
                                <select id="SelectLm" class="form-control" value="{{$data->status}}" style="height: 3rem">
                                    <option selected="selected">Please select</option>
                                    <option >True</option>
                                    <option>False</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-actions form-group">
                            <button type="submit" class="btn btn-success btn-sm" style="background-color: rebeccapurple; border: 1px solid rebeccapurple; width: 11rem;">Update Setting</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
