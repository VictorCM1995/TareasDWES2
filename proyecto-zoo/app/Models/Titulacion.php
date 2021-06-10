<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titulacion extends Model
{
    use HasFactory;
    protected $table = "titulaciones";

    public function cuidadores(){
        return $this->hasMany(Cuidador::class,"id_titulo1")->orWhere("id_titulo2",$this->id);
    }
}
