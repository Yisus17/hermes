@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>User Detail</span>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                           


                            <tr>
                                <th>ID</th>
                                <td>{{$user->id}}</td>
							</tr>
                            <tr>
                                <th>Name</th>
                                <td>{{$user->name}}</td>
							</tr>

                            <tr>
                                <th>Last Name</th>
                                <td>NULL</td>
							</tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$user->email}}</td>
							</tr>
                            <tr>
                                <th>Company</th>
                                <td>{{$user->company->name }} ({{ $user->company->id}})</td>
							</tr>
                            <tr>
                                <th>Type</th>
                                @switch($user->type)
                                @case(1)
                                <td>Admin</td>
                                @break

                                @case(2)
                                <td>Moderator</td>
                                @break

                                @case(3)
                                <td>Simple User</td>
                                @break

                                @default
                                <span>
                                    <td>{{ $user->type }}</td>
                                </span>
                                @endswitch
							</tr>
							
                            <tr>
                                <th>Image</th>
                                <td>NULL</td>
							</tr>
                        </tbody>
                    </table>

                    <a href="/users" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection