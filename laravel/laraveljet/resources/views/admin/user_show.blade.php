<div class="form-group">
    <table class="table table-borderless table-striped table-earning" style="border: 2px solid #9999cc">

        <tr >
            <th style="border: 1px solid #9999cc">ID</th><td>{{ $data->id }}</td>
        </tr>
        <tr>
            <th style="border: 1px solid #9999cc">Name</th> <td>{{ $data->name}}</td>
        </tr>
        <tr>
            <th style="border: 1px solid #9999cc">Email</th><td>{{ $data->email }}</td>
        </tr>
        <tr>
            <th style="border: 1px solid #9999cc">Phone</th><td>{{ $data->phone }}</td>
        </tr>
        <tr>
            <th style="border: 1px solid #9999cc">Address</th><td>{{ $data->Address }}</td>
        </tr>
        <tr>
            <th style="border: 1px solid #9999cc">Date</th><td>{{ $data->created_at }}</td>
        </tr>
        <tr>
            <th class="text-right" style="border: 1px solid #9999cc">Roles</th>
            <td>
                <table>
                    @foreach($data->roles as $row)
                        <tr>
                            <td>{{$row -> name}}</td>
                            <td>
                                <a href="{{route('admin_user_role_delete', ['userid'=>$data->id, 'roleid' => $row->id])}}">Sil</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </td>
        </tr>
        <th style="border: 1px solid #9999cc; height: 0.5rem;">Add Role</th>
        <td>
            <form role="form" action="{{route('admin_user_role_add', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <select name="roleid" class="form-control " style="height: 2rem">

                        @foreach ($datalist as $user)
                            <!--id sini kaydediyoruz unutma-->
                                <option value="{{ $user->id }}"> {{ $user->name }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-success btn-sm" style="background-color: lightgreen; border: 1px solid rebeccapurple; width: 7rem;">Add Role</button>
            </form>
        </td>
    </table>
