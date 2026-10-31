<?php

namespace App\Http\Controllers;

class EquipoController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function jugadores()
    {
        $jugadores = [
            ['numero' => 4,  'nombre' => 'Carlos Quispe',   'posicion' => 'Base'],
            ['numero' => 7,  'nombre' => 'Luis Huamán',     'posicion' => 'Escolta'],
            ['numero' => 10, 'nombre' => 'Diego Ramos',     'posicion' => 'Alero'],
            ['numero' => 15, 'nombre' => 'Jorge Mendoza',   'posicion' => 'Ala-pívot'],
            ['numero' => 23, 'nombre' => 'Miguel Torres',   'posicion' => 'Pívot'],
            ['numero' => 11, 'nombre' => 'Andrés Salas',    'posicion' => 'Escolta'],
        ];

        return view('jugadores', compact('jugadores'));
    }

    public function partidos()
    {
        $partidos = [
            ['fecha' => '05/10/2026', 'rival' => 'Leones del Sur',  'resultado' => '82 - 75', 'estado' => 'Ganado'],
            ['fecha' => '12/10/2026', 'rival' => 'Águilas Andinas', 'resultado' => '68 - 71', 'estado' => 'Perdido'],
            ['fecha' => '19/10/2026', 'rival' => 'Toros FC',        'resultado' => '90 - 84', 'estado' => 'Ganado'],
            ['fecha' => '09/11/2026', 'rival' => 'Pumas Basket',    'resultado' => 'Por jugar', 'estado' => 'Próximo'],
        ];

        return view('partidos', compact('partidos'));
    }

    public function contacto()
    {
        return view('contacto');
    }
}