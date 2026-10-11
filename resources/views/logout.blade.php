@extends('plantilla')

@section('titulo', 'Logout - Venta de Coches')

@section('contingut')
<div class="container mt-4">
    <div class="col-md-6">
        <div class="card p-4 shadow-sm text-center">
            <h1 class="h3 mb-3">Logout</h1>
            <p class="fs-5 text-secondary">Has sido desconectado</p>
            <div class="mt-3">
                <a href="{{ route('login') }}" class="btn btn-primary">Volver a inicirar sesion</a>
            </div>
        </div>
    </div>
</div>
@endsection