<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Revision;
use App\Models\Animal;

class RevisionController extends Controller
{
    public function create(Animal $animal){
    	return view("revisiones.create",compact("animal"));
    }

    public function store(Request $request, Animal $animal){
        $a = new Revision();
        $a->fecha = $request->fecha;
        $a->descripcion = $request->descripcion;
        $a->animal_id = $animal->id;
        $a->save();
        return redirect()->action([AnimalController::class,"index"]);
    }
}
