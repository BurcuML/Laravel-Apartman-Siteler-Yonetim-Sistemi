
    <br> <br> <br>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="title-1 m-b-25">Message Detail </h2>
            @include('home.message')
            <div class="card">
                <div class="card-header">Form</div>
                <div class="card-body card-block">
                    <form role="form" action="{{route('admin_message_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <table class="table table-borderless table-striped table-earning">

                                <tr>
                                    <th>ID</th><td>{{ $data->id }}</td>
                                </tr>
                                <tr>
                                    <th>Name</th> <td>{{ $data->name}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th><td>{{ $data->email }}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>  <td>{{ $data->phone }}</td>
                                </tr>
                                <tr>
                                    <th class="text-right">Subject</th><td>{{ $data->subject }}</td>
                                </tr>
                                <tr>
                                    <th class="text-right">Message</th><td>{{ $data->message }}</td>
                                </tr>
                                <tr>
                                    <th class="text-right">Admin Note</th>
                                    <td> <textarea id="note" name="note">{{ $data->note }}</textarea></td>
                                </tr>
                                <tr>
                                    <th class="text-right">Seçenekler</th>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-actions form-group">
                                            <button type="submit" class="btn btn-success btn-sm" style="background-color: rebeccapurple; border: 1px solid rebeccapurple; width: 7rem;">Güncelle</button>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        @include('home.message')
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

