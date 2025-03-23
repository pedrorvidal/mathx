<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        echo "Home";
    }

    public function generateExercises(Request $request)
    {
        echo "Gerar Exercícios";
    }
    public function printExercises()
    {
        echo "Imprimir Exercícios no navegador";
    }
    public function exportExercises()
    {
        echo "Exportar exercícios para um arquivo de texto";
    }
}
