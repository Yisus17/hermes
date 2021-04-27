@extends('layouts.app')

@section('content')
{<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 ">

            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Crear contacto por: {{auth()->user()->name}}</span>
                </div>

                <div class="card-body">
                    {!! Form::open(['route' => 'contacts.store']) !!}
                    @include('contacts.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>}
@endsection