@extends('plantilla')

@section('titulo', 'Login - Venta de Coches')

@section('contingut')
<div class="container mt-4">
    <h2>LOGIN</h2>
    <hr>

    <div class="col-md-6">
        <!-- El formulario apunta a la ruta de autenticación por POST -->
        <form action="{{ route('login_autenticar') }}" method="POST">
            @csrf

            <!-- Mensaje de error general si las credenciales fallan -->
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" name="usuario" id="usuario" value="{{ old('usuario') }}" required />
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" required />
            </div>

            <!-- Checkbox de "Recuérdame" que pide el enunciado -->
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="remember" id="remember">
                <label class="form-check-label" for="remember">recuérdame</label>
            </div>

            <div class="d-flex align-items-center gap-3">
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="{{ route('registro') }}" class="btn btn-info text-white">¿No estas registrado? Registrate aqui</a>
            </div>
        </form>
    </div>
</div>
@endsection