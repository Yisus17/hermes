@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Crear producto por: {{auth()->user()->name}}</span>
                </div>

                <div class="card-body">
                    {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT', 'id' => 'product_form', 'files' => true]) !!}
                    @include('products.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection