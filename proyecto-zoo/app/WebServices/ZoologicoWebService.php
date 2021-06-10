<?php 

namespace App\WebServices;

use App\Models\Animal;
use App\Models\User;

class ZoologicoWebService{

    /**
    * @param string $correo
    * @param string $password
    * @return bool
    */


	public function login(string $correo, string $password){
		$passDB = User::query()->where("email",$correo)->$password;
        return $password === $passDB;
    }

    /**
    * @param int $id
    * @return App\Models\Animal
    */

    public function getAnimal(int $id){
        $animal = Animal::findOrFail($id);
        return $animal;
    }

    /**
    * @return App\Models\Animal[]
    */

    public function getAnimales(){
        $animales = Animal::all();
        return $animales;
    }

    /**
    * @param string $alimentacion
    * @return App\Models\Animal[]
    */

    public function getAnimalesAlimentacion(string $alimentacion){
        $animales = Animal::where("alimentacion",$alimentacion)->get();
        return $animales;
    }

    /**
    * @param string $especie
    * @return App\Models\Animal[]
    */

    public function busqueda(string $especie){
        $animales = Animal::where("especie","LIKE","%".$especie."%")->get();
        return $animales;
    }
}