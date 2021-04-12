@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Detalle de Producto</span>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{$product->id}}</td>
                            </tr>
                            <tr>
                                <th>Nombre</th>
                                <td>{{$product->name}}</td>
                            </tr>

                            <tr>
                                <th>Descripción</th>
                                <td>{{$product->description}}</td>
                            </tr>

                            <tr>
                                <th>Unidades en Stock</th>
                                <td>{{$product->stock}}</td>
                            </tr>
                            
                            <tr>
                                <th>Precio</th>
                                <td>{{$product->price}}</td>
                            </tr>
                            
                            <tr>
                                <th>Categoría/th>
                                <td>{{$product->category->name}}</td>
                            </tr>

                            <tr>
                                <th>Imagen</th>
                                <td>
                                    @if(isset($product) && $product->image)
                                    <img src="{{url('assets/products/'.$image->name.'/logo.png')}}" alt="Imagen del producto" srcset="">
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{route('products.edit', $product)}}" class="btn btn-primary">Editar</a>
                    <a href="/products" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection