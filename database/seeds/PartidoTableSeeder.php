<?php

use App\Partido;
use Illuminate\Database\Seeder;

class PartidoTableSeeder extends Seeder
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
            Partido::create($d);
        }
    }
    public function _data() {
        return [
            [
                'nombre'   => 'Movimiento Nacionalista Revolucionario',
                'sigla' => 'MNR',
                'color' => '#FE15CC',
            ], //1
            [
                'nombre'   => 'Movimiento Al Socialismo ',
                'sigla' => 'MAS',
                'color' => '#0319D3',
            ], //2
            [
                'nombre'   => 'Acción Democratica Nacionalista',
                'sigla' => 'ADN',
                'color' => '#E40202',
            ], //3
            [
                'nombre'   => 'Comunidad Ciudana',
                'sigla' => 'CC',
                'color' => '#EA5B09',
            ], //4
            [
                'nombre'   => 'Creemos',
                'sigla' => 'C',
                'color' => '#0319D3',
            ], //5
            [
                'nombre'   => 'Frente para la Victoria',
                'sigla' => 'FPV',
                'color' => '#43A703',
            ], //6
            [
                'nombre'   => 'Partido Democrata Cristiano',
                'sigla' => 'PDC',
                'color' => '#FBFEFF',
            ], //7
            [
                'nombre'   => 'Movimiento Tercer Sistema',
                'sigla' => 'MTS',
                'color' => '#1BDCFF',
            ], //8
            [
                'nombre'   => 'Partido de Accion Nacional Boliviano',
                'sigla' => 'PAN-BOL',
                'color' => '#FCA3A3',
            ], //9
            
        ];
    }
}
