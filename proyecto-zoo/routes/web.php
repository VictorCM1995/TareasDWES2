<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\RevisionController;
use App\Http\Controllers\CuidadorController;
use App\Http\Controllers\TitulacionController;
use App\Http\Controllers\SoapServerController;
use App\Http\Controllers\RestWebServiceController;
use App\Http\Controllers\ZoologicoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/

Route::get('/',[InicioController::class,"inicio"])->name("home");

Route::get('animales',[AnimalController::class,"index"])->name("animales.index");

Route::get('animales/crear',[AnimalController::class,"create"])->name("animales.create")/*->middleware("auth")*/;

Route::get('animales/{animal}',[AnimalController::class,"show"])->name("animales.show");

Route::get('animales/{animal}/editar',[AnimalController::class,"edit"])->name("animales.edit")/*->middleware("auth")*/;

Route::get('cuidadores/{cuidador}',[CuidadorController::class,"show"])->name("cuidadores.show");

Route::get('titulaciones/{titulacion}',[TitulacionController::class,"show"])->name("titulaciones.show");

Route::post('animales',[AnimalController::class,"store"])->name("animales.store");

Route::put('animales/{animal}',[AnimalController::class,"update"])->name("animales.update");

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function (){
    return view('dashboard');
})->name('dashboard');

Route::get('revisiones/{animal}/crear',[RevisionController::class,"create"])->name("revisiones.create");

Route::post('revisiones/{animal}',[RevisionController::class,"store"])->name("revisiones.store");

Route::any('api',[SoapServerController::class,"getServer"]);

Route::any('api/wsdl',[SoapServerController::class,"getWSDL"]);



Route::get('rest',[RestWebServiceController::class,"index"]);

Route::get('rest/{animal}',[RestWebServiceController::class,"show"]);

Route::delete('rest/{animal}/borrar',[RestWebServiceController::class,"destroy"]);

Route::post('rest/insertar',[RestWebServiceController::class,"store"]);

Route::post("animales/busquedaAjax",[ZoologicoController::class,"buscar"]);