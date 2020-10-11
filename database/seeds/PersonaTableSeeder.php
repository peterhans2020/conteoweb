<?php

use App\Persona;
use Illuminate\Database\Seeder;

class PersonaTableSeeder extends Seeder
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
            Persona::create($d);
        }
    }
    public function _data() {
        return [
            [
                'idciudad'   => 2,
                'ci' => '23546513',
                'nombre' => 'Viviana',
                'apellido' => 'Banegas Rocas',
                'direccion' => 'B/27 de Mayo C/las piedras #12',
                'genero' => 'F',

            ], //1
            [
                'idciudad'   => 2,
                'ci' => '23216513',
                'nombre' => 'Jorge',
                'apellido' => 'Valdivieso Arazola',
                'direccion' => 'B/San Rosita C/las lomas #14',
                'genero' => 'M',

            ], //2
            [
                'idciudad'   => 2,
                'ci' => '978324175',
                'nombre' => 'Marcia',
                'apellido' => 'Rosales Rivero',
                'direccion' => 'B/San Martin C/4 #123',
                'genero' => 'F',

            ], //3
            [
                'idciudad'   => 3,
                'ci' => '794678913',
                'nombre' => 'Cristiane',
                'apellido' => 'Sousa Justiniano',
                'direccion' => 'B/3 de diciembre C/venezuela #456',
                'genero' => 'F',

            ], //4
            [
                'idciudad'   => 3,
                'ci' => '2379821',
                'nombre' => 'Jose Luis',
                'apellido' => 'Burgos Orellana',
                'direccion' => 'B/san francisco C/primavera #124',
                'genero' => 'M',

            ], //5
            [
                'idciudad'   => 3,
                'ci' => '34656730',
                'nombre' => 'Bernardo',
                'apellido' => 'Aguilar Romero',
                'direccion' => 'B/las maravillas C/las piedritas #125',
                'genero' => 'M',

            ], //6
            [
                'idciudad'   => 4,
                'ci' => '235346789',
                'nombre' => 'Fernando',
                'apellido' => 'Camacho Ardaya',
                'direccion' => 'B/las palmeras C/9 #126',
                'genero' => 'M',

            ], //7
            [
                'idciudad'   => 4,
                'ci' => '7984906',
                'nombre' => 'Romina',
                'apellido' => 'Ayala Martinez',
                'direccion' => 'B/los lotes C/camacho #12',
                'genero' => 'F',

            ], //8
            [
                'idciudad'   => 4,
                'ci' => '7961446',
                'nombre' => 'Brayan',
                'apellido' => 'Bogota Perez',
                'direccion' => 'B/4 de noviembre C/Claudio gomez #127',
                'genero' => 'M',

            ], //9
            [
                'idciudad'   => 4,
                'ci' => '9631562',
                'nombre' => 'Pedro',
                'apellido' => 'Algarañaz Suarez',
                'direccion' => 'B/1ero de Mayo C/tarija #128',
                'genero' => 'M',

            ], //10
            [
                'idciudad'   => 5,
                'ci' => '56844561',
                'nombre' => 'Gladys',
                'apellido' => 'Caballero Rosales',
                'direccion' => 'B/las torchas av. lujan #129',
                'genero' => 'F',

            ], //11
            [
                'idciudad'   => 5,
                'ci' => '321866',
                'nombre' => 'Victor',
                'apellido' => 'Salvatierra Rocha',
                'direccion' => 'B/las moliendas C/las tuercas #1224',
                'genero' => 'M',

            ], //12
            [
                'idciudad'   => 6,
                'ci' => '0791312',
                'nombre' => 'Jose',
                'apellido' => 'Rivero Añez',
                'direccion' => 'B/las americas C/11 #1233',
                'genero' => 'M',

            ], //13
            [
                'idciudad'   => 6,
                'ci' => '1354341',
                'nombre' => 'Mario',
                'apellido' => 'Eguez Peñaloza',
                'direccion' => 'B/Panamericano C/romulo #1246',
                'genero' => 'M',

            ], //14
            [
                'idciudad'   => 7,
                'ci' => '8957896',
                'nombre' => 'Eltan',
                'apellido' => 'Figueroa Andrades',
                'direccion' => 'B/Almendras C/las tutumas #1278',
                'genero' => 'M',

            ], //15
            [
                'idciudad'   => 7,
                'ci' => '132443',
                'nombre' => 'Karola',
                'apellido' => 'Montalvo Flores',
                'direccion' => 'B/la selva C/panama #1200',
                'genero' => 'F',

            ], //16
            [
                'idciudad'   => 8,
                'ci' => '3431300',
                'nombre' => 'Katherine',
                'apellido' => 'Vilches Ozuna',
                'direccion' => 'B/los cupesi C/italia #12798',
                'genero' => 'F',

            ], //17
            [
                'idciudad'   => 8,
                'ci' => '654851',
                'nombre' => 'Alejandra',
                'apellido' => 'Espejo zamora',
                'direccion' => 'B/espejillo C/los tajibos #1279',
                'genero' => 'F',

            ], //18
            [
                'idciudad'   => 9,
                'ci' => '7943213',
                'nombre' => 'Carla',
                'apellido' => 'Moreno Salguero',
                'direccion' => 'B/mamore C/sucre #12897',
                'genero' => 'F',

            ], //19
            [
                'idciudad'   => 9,
                'ci' => '021352',
                'nombre' => 'Nelly',
                'apellido' => 'Mendoza Paz',
                'direccion' => 'B/las frutillas C/potosi #1222',
                'genero' => 'F',

            ], //20
            [
                'idciudad'   => 10,
                'ci' => '9959232',
                'nombre' => 'Jandira',
                'apellido' => 'Rojas Valdez',
                'direccion' => 'B/el trompillo C/kenide #128791',
                'genero' => 'F',

            ], //21
            [
                'idciudad'   => 10,
                'ci' => '9613434',
                'nombre' => 'Vilma',
                'apellido' => 'Zenteno Morales',
                'direccion' => 'B/melchor pinto C/las visitas #8955',
                'genero' => 'F',

            ], //22
        ];
    }
}
