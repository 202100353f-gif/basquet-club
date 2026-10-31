@extends('layout')

@section('titulo', 'Jugadores')

@section('contenido')
    <h2 class="titulo">Nuestros jugadores</h2>

    <div class="grid">
        @foreach ($jugadores as $jugador)
            <div class="card">
                <div class="numero">{{ $jugador['numero'] }}</div>
                <h3>{{ $jugador['nombre'] }}</h3>
                <p>{{ $jugador['posicion'] }}</p>
            </div>
        @endforeach
    </div>
@endsection