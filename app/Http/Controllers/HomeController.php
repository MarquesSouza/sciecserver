<?php

namespace App\Http\Controllers;

use App\Entities\Event;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    // Controller View Usuario (Carioca)
    public function index()
    {
        $listacursos = [
            'Banco de dados',
            'Desenvolvimento',
            'Marketing'
        ];

        return view('usuario.home', compact('listacursos'));
    }
    // Termina aqui..
    public function welcome()
    {
        $evento=Event::all();
        return view('welcome', compact('evento'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
}
