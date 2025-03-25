<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function home(): View
    {
        return view('home');
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
