@extends('layout')

@section('titulo', 'Partidos')

@section('contenido')
    <h2 class="titulo">Calendario y resultados</h2>

    <table>
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Rival</th>
                <th>Resultado</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($partidos as $partido)
                <tr>
                    <td>{{ $partido['fecha'] }}</td>
                    <td>{{ $partido['rival'] }}</td>
                    <td>{{ $partido['resultado'] }}</td>
                    <td>{{ $partido['estado'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection