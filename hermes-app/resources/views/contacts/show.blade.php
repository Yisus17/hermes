@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Detalle Contacto</span>
                </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-6">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{$contact->id}}</td>
                                </tr>
                                <tr>
                                    <th>Nombre</th>
                                    <td>{{$contact->name}}</td>
                                </tr>

                                <tr>
                                    <th>Apellido</th>
                                    <td>{{$contact->last_name}}</td>
                                </tr>

                                <tr>
                                    <th>Razón Social</th>
                                    <td>{{$contact->business_name}}</td>
                                </tr>

                                <tr>
                                    <th>Teléfono</th>
                                    <td>{{$contact->phone}}</td>
                                </tr>

                                <tr>
                                    <th>Correo</th>
                                    <td>{{$contact->email}}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-6">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Ciudad</th>
                                    <td>{{$address->city}}</td>
                                </tr>
                                <tr>
                                    <th>Municipio</th>
                                    <td>{{$address->municipality}}</td>
                                </tr>
                                <tr>
                                    <th>Estado / Provincia</th>
                                    <td>{{$address->state}}</td>
                                </tr>
                                <tr>
                                    <th>Código Postal</th>
                                    <td>{{$address->zipcode}}</td>
                                </tr>

                                <tr>
                                    <th>Municipio</th>
                                    <td>{{$address->municipality}}</td>
                                </tr>

                                <tr>
                                    <th>País</th>
                                    <td>{{$country->name}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    </div>
                    <a href="{{route('contacts.edit', $contact)}}" class="btn btn-primary">Editar</a>
                    <a href="/contacts" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection