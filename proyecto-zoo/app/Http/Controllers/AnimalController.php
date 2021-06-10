<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller{

	public function index(){
		$animales = Animal::all();    	
        return view("animales.index",["arrayAnimales"=>$animales]);
    }

	public function show(Animal $animal){
    	return view("animales.show",compact("animal"));
    }

    public function create(){
    	return view("animales.create");
    }

    public function edit(Animal $animal){
    	return view("animales.edit",compact("animal"));
    }

    public function store(Request $request){
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
        return redirect()->action([AnimalController::class,"index"]);
    }

    public function update(Request $request, Animal $animal){
        $animal->especie = $request->especie;
        $animal->slug = $request->especie;
        $animal->peso = $request->peso;
        $animal->altura = $request->altura;
        $animal->fechaNacimiento = $request->fechaNacimiento;
        if(empty($request->imagen)){
            $animal->imagen = $animal->imagen;
        } else {
            $animal->imagen = $request->imagen;
        }
        $animal->alimentacion = $request->alimentacion;
        $animal->descripcion = $request->descripcion;
        $animal->save();
        return redirect()->action([AnimalController::class,"index"]);
    }
}
