@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>Dashboard</h2>
            <div class="card-deck mt-4">

                <!-- CLIENTS -->
                <div class="card">
                    <a href="{{ url('/users') }}">
                        <div class="image-dashboard-card cyan">
                            <i class="fas fa-user-friends"></i>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Usuarios</h5>
                            <p class="card-text">En esta secci�n podr�s gestionar los datos de tus contactos.</p>
                        </div>
                    </a>
                </div>

                <!-- PRODUCTS -->
                <div class="card">
                    <a href="{{ url('/products') }}">
                        <div class="image-dashboard-card yellow">
                            <i class="fas fa-headphones-alt"></i>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Emprendimientos</h5>
                            <p class="card-text">En esta secci�n podr�s gestionar los productos de tu inventario.</p>
                        </div>
                    </a>
                </div>

                <!-- BUDGETS -->
                <div class="card">
                    <a href="{{ url('/budgets') }}">
                        <div class="image-dashboard-card red">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Presupuestos</h5>
                            <p class="card-text">En esta secci�n podr�s crear, editar y descargar tus presupuestos.</p>
                        </div>
                    </a>
                </div>

                <!-- Invoices -->
                <div class="card">
                    <a href="{{ url('/invoices') }}">
                        <div class="image-dashboard-card green">
                            <i class="fas fa-file-invoice-dollar"></i>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Facturas</h5>
                            <p class="card-text">En esta secci�n podr�s crear, editar y descargar tus facturas.</p>
                        </div>
                    </a>
                </div>

                

            </div>
        </div>

        
    </div>
</div>
@endsection