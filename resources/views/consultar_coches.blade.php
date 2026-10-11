@extends('plantilla')

@section('titulo', 'Consultar coche')

@section('contingut')
<p>CONSULTAR TAULES</p>

<p>Coches con extras:</p>
<ul>
    @foreach ($cochesConExtras as $coche) <!-- 1. Definimos cada coche aquí -->
        <li>
            <strong>{{ $coche->marca }} {{ $coche->modelo }}</strong> (Matrícula: {{ $coche->matricula }}) - 
            Motor: <em>{{ $coche->tipoMotor->nombre ?? 'Sin motor' }}</em>
            <br>
            Extras:
            <ul>
                @foreach ($coche->extras as $extra) <!-- 2. Usamos $coche y accedemos a ->extras sin $ -->
                    <li>{{ $extra->nombre }} ({{ $extra->precio }}€)</li>
                @endforeach
            </ul>
        </li>
    @endforeach
</ul>

<p>Coches sin extras:</p>
<ul>
    @foreach ($cochesSinExtras as $coche)
        <li>
            <strong>{{ $coche->marca }} {{ $coche->modelo }}</strong> (Matrícula: {{ $coche->matricula }})
        </li>
    @endforeach
</ul>          
@endsection