@extends('layouts.admin')

@section('title', 'Review')


@section('content')

    <br> <br> <br>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="title-1 m-b-25">Review</h2>

            <br>
            <div class="table-responsive table--no-card m-b-40">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                    <tr>
                        <th>User_ID</th>
                        <th>Name</th>
                        <th>Apartman</th>
                        <th>Subject </th>
                        <th>Review </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($datalist as $user)

                        <tr>

                            <td>{{ $user->user_id }}</td>
                            <td>{{ $user->name}}</td>
                            <td>{{ $user->apartman }}</td>
                            <td>{{ $user->subject }}</td>
                            <td>{{ $user->review }}</td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>

        </div>
    </div>

@endsection
