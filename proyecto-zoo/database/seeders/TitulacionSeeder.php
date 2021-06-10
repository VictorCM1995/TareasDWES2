<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Titulacion;

class TitulacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $titulos = array(
        'DAW','DWES','DWEC',"EIE"
    );

    public function run()
    {
        foreach($this->titulos as $titulo){
        	$a = new Titulacion();
        	$a->nombre = $titulo;
        	$a->slug = Str::slug($titulo);
        	$a->save();
        }
        $this->command->info("Tabla titulaciones inicializada con datos");
    }
}
