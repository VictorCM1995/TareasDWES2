<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Revision;

class RevisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $revisiones = array(
		array(
			'fecha' => '2014-09-07',
			'descripcion' => 'Primera revision',
			'animal_id' => "1"
		),
		array(
			'fecha' => '2011-07-07',
			'descripcion' => 'Segunda revision',
			'animal_id' => "1"
		)
    );

    public function run()
    {
        foreach($this->revisiones as $revision){
        	$a = new Revision();
        	$a->fecha = $revision["fecha"];
        	$a->descripcion = $revision["descripcion"];
        	$a->animal_id = $revision["animal_id"];
        	$a->save();
        }
        $this->command->info("Tabla revisiones inicializada con datos");
    }
}
