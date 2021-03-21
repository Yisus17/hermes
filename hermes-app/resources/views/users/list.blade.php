@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            @if( session('message') )
            <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            @if ($errors->any())
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>
            @endif

            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Users list</span>
                    <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Add User</a>

                </div>

                <div class="card-body">
                    <div id="product-list-container">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Company</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        @switch($item->type)
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
                                            <td>{{ $item->type }}</td>
                                        </span>
                                        @endswitch
                                        
                                        <td>{{ $item->company->name }}</td>

                                        <td id="actions_td">
                                            <form action="{{ route('users.destroy',$item->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro que deseas eliminar a este usuario?');">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{route('users.show', $item->id)}}" class="btn btn-primary btn-sm" title="Show item"><i class="fas fa-eye"></i></a>
                                                <a href="{{route('users.edit', $item->id)}}" class="btn btn-success btn-sm" title="Edit item"><i class="fas fa-edit"></i></a>
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete item"><i class="fa fa-minus-circle"></i></button>
                                            </form>

                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection