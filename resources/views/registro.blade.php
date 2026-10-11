@extends('plantilla') {{-- O el nombre de tu layout principal --}}

@section('titulo', 'Sobre Nosotros - Tcoches')

@section('contingut')

<div class="container mt-4">
    <h2>REGISTRO</h2>
    <hr>

    <div class="col-md-6">
        <form action="{{ route('registro_guardar') }}" method="POST">
            @csrf

            <!-- Mensaje de error si los passwords no coinciden -->
            @if (session('messageerrorpassword'))
                <div class="alert alert-danger">{{ session('messageerrorpassword') }}</div>
            @endif

            <!-- Mensaje de éxito al registrarse -->
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <!-- Errores de validación generales (como email o usuario duplicados) -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" name="usuario" id="usuario" value="{{ old('usuario') }}" required />
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required />
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="password" id="password" required />
            </div>

            <div class="mb-3">
                <label for="reppassword" class="form-label">Repite contraseña</label>
                <input type="password" class="form-control" name="reppassword" id="reppassword" required />
            </div>

            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
</div>
@endsection