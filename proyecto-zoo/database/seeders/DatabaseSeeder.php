<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Cuidador;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        DB::table("titulaciones")->delete();
        $this->call(TitulacionSeeder::class);
        Cuidador::factory(20)->create();
        // \App\Models\User::factory(10)->create();
        DB::table("animales")->delete();
        $this->call(AnimalSeeder::class);
        DB::table("revisiones")->delete();
        $this->call(RevisionSeeder::class);
        DB::table("users")->delete();
        $this->call(UserSeeder::class);
        \App\Models\User::factory(5)->create();
        
    }
}
