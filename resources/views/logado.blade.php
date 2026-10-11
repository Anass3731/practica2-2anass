@extends('plantilla')

@section('titulo', 'Logado')

@section('contingut')
<main class="login-form mt-4">
    <div class="container-sm">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4 shadow-sm">
                    <h1 class="h3 mb-3">USUARIO LOGADO</h1>                    
                    <h2>Hola usuari: 
                        @php
                            echo Auth::user()->name;
                        @endphp
                    </h2>
                    <p class="text-muted mt-2">Has iniciado correctamente al sistema.</p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection