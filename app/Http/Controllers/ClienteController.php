<?php

namespace App\Http\Controllers;
use App\Models\cliente;

use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index (){

        $cliente = Cliente:: select ('id','nombre_uno','nombre_dos','apellido_uno', 'apellido_dos','sexo')
        ->orderBy('nombres','asc')

        ->get();

        return[
            "cliente"=>$cliente
        ];

    }
        //
    public function store (request $request){
        $cliente = new cliente ();
        $cliente -> nuip  = $request -> nuip;
        $cliente -> nombre_uno = $request -> nombre_uno;
        $cliente -> nombre_dos = $request -> nombre_dos;
        $cliente -> apellido_uno  = $request -> apellido_uno;
        $cliente -> apellido_dos  = $request -> apellido_uno;
        $cliente -> sexo  = $request -> sexo;

        $cliente ->save();
    }

    public function update (Request $request){
        $cliente = Cliente::findOrFail($request->id);
        $cliente -> nuip  = $request -> nuip;
        $cliente -> nombre_uno = $request -> nombre_uno;
        $cliente -> nombre_dos = $request -> nombre_dos;
        $cliente -> apellido_uno = $request -> apellido_uno;
        $cliente -> apellido_dos = $request -> apellido_dos;
        $cliente -> sexo  = $request -> sexo;

        $cliente ->save();

    }


   public function destroy (Request $request){
        $cliente = Cliente ::findOrFail($request ->id);
        $cliente-> delete();

    }
    public function getcliente(){
        $cliente = Cliente :: select ('id','nombre_uno','nombre_dos','apellido_uno','apellido_dos','sexo')
        ->where ('sexo',2)
        ->get();
        return [
            "client"=>$cliente
        ];
    }
}
