<?php

namespace Futbol\Http\Controllers;

use Illuminate\Http\Request;
use Futbol\Jugador;

class JugadorController extends Controller
{
    public function index(Request $request){
    	if ($request->ajax()) {
            $jugadores=Jugador::all();
    		return response()->json($jugadores, 200);
    	}
        return view('jugadores.index');
    }
     public function store(Request $request)
    {
        if ($request->ajax()) {
    		$jugador = new Jugador();
	        $jugador->name = $request->input('name');
    	    $jugador->picture = $request->input('picture');
    	    $jugador->save();
    	    return response()->json([
    	    	"message"=> "Jugador creado correctamente.",
                "jugador" => $jugador
    		], 200);
    	}
    }
}
