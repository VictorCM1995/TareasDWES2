<?php

namespace Database\Factories;

use App\Models\Cuidador;
use App\Models\Titulacion;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CuidadorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cuidador::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nombre = $this->faker->name;
        return [
            "nombre" => $nombre,
            "id_titulo1" => Titulacion::all()->random()->id,
            "id_titulo2" => Titulacion::all()->random()->id,
            "slug" => Str::slug($nombre)
        ];
    }
}
