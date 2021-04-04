@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Crear emprendedor por: {{auth()->user()->name}}</span>
                </div>
            
                <div class="card-body">
                    {!! Form::model($company, ['route' => ['companies.update', $company->id], 'method' => 'PUT'])  !!}
                    @include('companies.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection