<?php

use App\User;
use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = $this->_data();
        foreach ($data as $d) {
            User::create($d);
        }
    }
    public function _data() {
        return [
            [
                'nombre'   => 'Angelica',
                'apellido' => 'Rodriguez Rivero',
                'usuario' => 'angelica',
                'password' => bcrypt('123456'),
            ], //1
            [
                'nombre'   => 'Adbel',
                'apellido' => 'Rodriguez Calle',
                'usuario' => 'adbel',
                'password' => bcrypt('123456'),
            ], //2
            [
                'nombre'   => 'Alondra',
                'apellido' => 'Avalo Romero',
                'usuario' => 'alondra',
                'password' => bcrypt('123456'),
            ], //3
        ];
    }
}
