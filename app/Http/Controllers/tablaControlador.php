<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\catalogo;

class tablaControlador extends Controller
{
    public function instanciar(Request $request){
        $requeste=catalogo::where('codigo',$request->codigo)->get();
        $request2=catalogo::where('codigo',$request->codigo)->get();
        $request3=catalogo::where('codigo',$request->codigo)->get();
        return view('index2', ['inicio'=>$requeste, 'inicio2'=>$request2, 'inicio3'=>$request3]);
    }
}
