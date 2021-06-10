<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class RestWebServiceController extends Controller
{
    public function index(){
    	$animales = Animal::all();
    	return response()->json($animales);
    }

    public function show(Animal $animal){
    	return response()->json($animal);
    }

    public function destroy(Animal $animal){
    	if(Animal::where('id',$animal->id)->exists()){
            $animal->delete();
            return response()->json(["mensaje" => "Animal borrado"]);
        }else{
            return response()->json(["mensaje" => "Animal no encontrado"]);
        }
    }

    public function store(Request $request){
        try{
        	$a = new Animal();
            $a->especie = $request->especie;
            $a->slug = $request->especie;
            $a->peso = $request->peso;
            $a->altura = $request->altura;
            $a->fechaNacimiento = $request->fechaNacimiento;
            $a->imagen = $request->imagen;
            $a->alimentacion = $request->alimentacion;
            $a->descripcion = $request->descripcion;
            $a->save();
            return response()->json(["mensaje" => "Insertado datos"]);
        }catch(\Exception $e){
            return response()->json(["mensaje" => "No se ha podido insertar"]);
        }
    }
}
