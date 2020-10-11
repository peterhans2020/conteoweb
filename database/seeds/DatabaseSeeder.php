<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CiudadTableSeeder::class);
        $this->call(PartidoTableSeeder::class);
        $this->call(RecintoTableSeeder::class);
        $this->call(MesaTableSeeder::class);
        $this->call(UsuarioTableSeeder::class);
        $this->call(PersonaTableSeeder::class);
        $this->call(DelegadoTableSeeder::class);
        $this->call(ActaTableSeeder::class);
        $this->call(VotoTableSeeder::class);
    }
}
