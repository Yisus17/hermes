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
                    <span>Lista de Presupuestos para : {{$currentUser->name}}</span>
                    <a href="/budgets/create" class="btn btn-primary btn-sm">Crear Presupuesto</a>
                </div>

                <div class="card-body">
                    <div id="product-list-container">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Contacto</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($budgets as $item)
                                    <tr>
                                        <td scope="row">{{ $item->id }}</td>
                                        <td>{{ $item->contact->name}} {{$item->contact->last_name}}</td>
                                        <td>{{ $item->description }}</td>
                                        <td id="actions_td">
                                            <form action="{{ route('budgets.destroy',$item->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro que deseas eliminar a este item?');">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{route('budgets.show', $item->id)}}" class="btn btn-primary btn-sm" title="Show item"><i class="fas fa-eye"></i></a>
                                                <a href="{{route('budgets.edit', $item->id)}}" class="btn btn-success btn-sm" title="Edit item"><i class="fas fa-edit"></i></a>
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