<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class ZoologicoController extends Controller
{
    public function buscar(Request $request){
    	$animales = Animal::where("especie","LIKE","%".$resquest->especie."%");
    	return $animales;
    }
}
