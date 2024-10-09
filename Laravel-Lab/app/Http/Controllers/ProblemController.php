<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProblemController extends Controller
{ 
    // Funcion del navbar
    public function show($numero) {  
        // Por ejemplo localhost/problema+4 = problema4
        $viewName = 'works.promblem' . $numero;
        if (view()->exists($viewName)) {
            return view($viewName);
        }
        return abort(404, 'La Pagina  no existe.');
    }

 // Problema - 1 Triangulo   
public function showTriangulo(Request $request){ 
    // Obtiene el valor del input 'cantidad'
    $cantidad = $request->input('cantidad', 0); 
    $triangulo = '';
    for ($i = 0; $i < $cantidad; $i++) { 
        $triangulo .= str_repeat('*', $i + 1) . "<br>"; 
    }  
    $data = [
        'cantidad' => $cantidad, 
        'triangulo' => $triangulo,
    ];
    return view('works.promblem1', $data);
}

// Problema -2 Tabla Multiplicar
public function showTablaMultiplicar(Request $request){ 
    $numero = $request->input('numero', 0);
    $tabla = []; 
    for ($i = 0; $i <= 12; $i++) { 
        $tabla[] = [
            'multiplicacion' => "$numero X $i =", // Ej: "5 x 0 = "
            'resultado' => $numero * $i         // Ej: 0, 5, 10, etc.
        ];
    }
    return view('works.promblem2', ['numero' => $numero, 'tabla' => $tabla]);
}
 
//Problema 3
public function showTablaCifrado() {
    $numeros = [];
    for ($i = 1; $i <= 100; $i++) {
        $numeros[] = [
            'numero' => $i,
            'hash' => md5($i)
        ]; 
        
    }
    
    return view('works.promblem3', compact('numeros'));  
}
public function verCifrado(Request $request)
{
    $numero = $request->query('n');
    $cifrado = $request->query('cifrado'); 
    dd($numero, $cifrado); 
    return view('works.verCifrado', compact('numero', 'cifrado')); 
}
// Esta bug esta mierdha
}
