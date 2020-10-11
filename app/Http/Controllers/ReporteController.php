<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class ReporteController extends Controller
{
    public function getDataReporte() {

        $ciudades = DB::table('ciudad as c') 
                ->where('c.estado', '=', 'A')
                ->where('c.id', '!=', '1')
                ->orderBy('c.id', 'asc')
                ->get();

        $recintos = DB::table('recinto as r')
            ->where('r.estado', '=', 'A')
            ->orderBy('r.id', 'asc')
            ->get();
        
        $mesas = DB::table('mesa as m')
            ->where('m.estado', '=', 'A')
            ->orderBy('m.id', 'asc')
            ->get();

        return response()->json([
            'response' => 1,
            'ciudades' => $ciudades,
            'recintos' => $recintos,
            'mesas' => $mesas
        ]);
    }

    public function generar1(Request $request) {

        $idciudad = $request->idciudad;
        $idrecinto = $request->idrecinto;
        $idmesa = $request->idmesa;

        $tipo = 0;
        $votos = [];
        if ($idciudad == 0 && $idrecinto == 0 && $idmesa == 0) {
            $votos = DB::table('voto as v')
                        ->join('mesa as m', 'v.idmesa', 'm.id')
                        ->join('partido as p', 'v.idpartido', 'p.id')
                        ->join('recinto as r', 'm.idrecinto', 'r.id')
                        ->join('ciudad as c', 'r.idciudad', 'c.id')
                        ->select(
                            'v.cantidad as votos', 'm.nombre as mesa', 
                            'r.nombre as recinto', 'c.nombre as departamento',
                            'p.sigla as partido'
                        )
                        ->get();
            
        } else if ($idciudad != 0 && $idrecinto == 0 && $idmesa == 0) {
            $tipo = 1;
            $votos = DB::table('voto as v')
                        ->join('mesa as m', 'v.idmesa', 'm.id')
                        ->join('partido as p', 'v.idpartido', 'p.id')
                        ->join('recinto as r', 'm.idrecinto', 'r.id')
                        ->join('ciudad as c', 'r.idciudad', 'c.id')
                        ->select(
                            'v.cantidad as votos', 'm.nombre as mesa', 
                            'r.nombre as recinto', 'c.nombre as departamento',
                            'p.sigla as partido'
                        )
                        ->where('c.id', $idciudad)
                        ->get();
        } else if($idciudad != 0 && $idrecinto != 0 && $idmesa == 0) {
            $tipo = 2;
            $votos = DB::table('voto as v')
                        ->join('mesa as m', 'v.idmesa', 'm.id')
                        ->join('partido as p', 'v.idpartido', 'p.id')
                        ->join('recinto as r', 'm.idrecinto', 'r.id')
                        ->join('ciudad as c', 'r.idciudad', 'c.id')
                        ->select(
                            'v.cantidad as votos', 'm.nombre as mesa', 
                            'r.nombre as recinto', 'c.nombre as departamento',
                            'p.sigla as partido'
                        )
                        ->where('c.id', $idciudad)
                        ->where('r.id', $idrecinto)
                        ->get();
        } else {
            $tipo = 3;
            $votos = DB::table('voto as v')
                        ->join('mesa as m', 'v.idmesa', 'm.id')
                        ->join('partido as p', 'v.idpartido', 'p.id')
                        ->join('recinto as r', 'm.idrecinto', 'r.id')
                        ->join('ciudad as c', 'r.idciudad', 'c.id')
                        ->select(
                            'v.cantidad as votos', 'm.nombre as mesa', 
                            'r.nombre as recinto', 'c.nombre as departamento',
                            'p.sigla as partido'
                        )
                        ->where('c.id', $idciudad)
                        ->where('r.id', $idrecinto)
                        ->where('m.id', $idmesa)
                        ->get();
        }

        $year = date('Y');
        $mes = date('m');
        $dia = date('d');

        $fecha = $dia.'/'.$mes.'/'.$year;

        $pdf = PDF::loadView('reportes.votos', [
            'fecha' => $fecha,
            'votos' => $votos
        ]);

        $pdf->output();
        $dom_pdf = $pdf->getDomPDF();

        $canvas = $dom_pdf ->get_canvas();
        $canvas->page_text(480, 750, "Pag. {PAGE_NUM} de {PAGE_COUNT}", null, 10, array(0, 0, 0));

        $canvas->page_text(50, 750, "Usuario", null, 10, array(0, 0, 0));


        return $pdf->download('votos.pdf');
    }

    public function generar2(Request $request) {

        $idciudad = $request->idciudad;

        $votos = [];
        if ($idciudad == 0) {
            $votos = DB::table('voto as v')
                        ->join('mesa as m', 'v.idmesa', 'm.id')
                        ->join('partido as p', 'v.idpartido', 'p.id')
                        ->join('recinto as r', 'm.idrecinto', 'r.id')
                        ->join('ciudad as c', 'r.idciudad', 'c.id')
                        ->select(
                            'v.cantidad as votos', 'm.nombre as mesa', 
                            'r.nombre as recinto', 'c.nombre as departamento',
                            'p.sigla as partido', 'c.id as idciudad',
                            'v.idpartido', 'v.cantidad'
                        )
                        ->get();

           $ciudades = DB::table('ciudad')
                        ->where('estado', 'A')
                        ->where('id', '<>', 1)
                        ->get();

            $partidos = DB::table('partido')
                        ->where('estado', 'A')
                        ->get();
            
            $result = [];
            foreach ($ciudades as $key => $ciudad) {
                
                $partido_ciudad = [];
                foreach ($partidos as $key => $partido) {

                    $votos1 = DB::table('voto as v')
                            ->join('partido as p', 'v.idpartido', 'p.id')
                            ->join('mesa as m', 'v.idmesa', 'm.id')
                            ->join('recinto as r', 'm.idrecinto', 'r.id')
                            ->join('ciudad as c', 'r.idciudad', 'c.id')
                            ->select('v.cantidad')
                            ->where('c.id', $ciudad->id)
                            ->where('p.id', $partido->id)
                            ->where('c.id', '<>', 1)
                            ->get();
                    $sum = 0;
                    foreach ($votos1 as $key => $val) {
                        $sum += $val->cantidad;
                    }

                    array_push($partido_ciudad, [
                        'partido' => $partido->nombre,
                        'sigla' => $partido->sigla,
                        'votos' => $sum
                    ]);

                }

                array_push($result, [
                    'ciudad' => $ciudad->nombre,
                    'resultados' => $partido_ciudad
                ]);

            }

            // dd($result);

        } else {
            $votos = DB::table('voto as v')
                        ->join('mesa as m', 'v.idmesa', 'm.id')
                        ->join('partido as p', 'v.idpartido', 'p.id')
                        ->join('recinto as r', 'm.idrecinto', 'r.id')
                        ->join('ciudad as c', 'r.idciudad', 'c.id')
                        ->select(
                            'v.cantidad as votos', 'm.nombre as mesa', 
                            'r.nombre as recinto', 'c.nombre as departamento',
                            'p.sigla as partido', 'c.id as idciudad',
                            'v.idpartido', 'v.cantidad'
                        )
                        ->get();

           $ciudades = DB::table('ciudad')
                        ->where('estado', 'A')
                        ->where('id', '<>', 1)
                        ->where('id', $idciudad)
                        ->get();

            $partidos = DB::table('partido')
                        ->where('estado', 'A')
                        ->get();
            
            $result = [];
            foreach ($ciudades as $key => $ciudad) {
                
                $partido_ciudad = [];
                foreach ($partidos as $key => $partido) {

                    $votos1 = DB::table('voto as v')
                            ->join('partido as p', 'v.idpartido', 'p.id')
                            ->join('mesa as m', 'v.idmesa', 'm.id')
                            ->join('recinto as r', 'm.idrecinto', 'r.id')
                            ->join('ciudad as c', 'r.idciudad', 'c.id')
                            ->select('v.cantidad')
                            ->where('c.id', $ciudad->id)
                            ->where('p.id', $partido->id)
                            ->where('c.id', '<>', 1)
                            ->get();
                    $sum = 0;
                    foreach ($votos1 as $key => $val) {
                        $sum += $val->cantidad;
                    }

                    array_push($partido_ciudad, [
                        'partido' => $partido->nombre,
                        'sigla' => $partido->sigla,
                        'votos' => $sum
                    ]);

                }

                array_push($result, [
                    'ciudad' => $ciudad->nombre,
                    'resultados' => $partido_ciudad
                ]);

            }
        }

        $year = date('Y');
        $mes = date('m');
        $dia = date('d');

        $fecha = $dia.'/'.$mes.'/'.$year;

        $pdf = PDF::loadView('reportes.votos_dep', [
            'fecha' => $fecha,
            'data' => $result
        ]);

        $pdf->output();
        $dom_pdf = $pdf->getDomPDF();

        // $canvas = $dom_pdf ->get_canvas();
        // $canvas->page_text(480, 750, "Pag. {PAGE_NUM} de {PAGE_COUNT}", null, 10, array(0, 0, 0));

        // $canvas->page_text(50, 750, "Usuario", null, 10, array(0, 0, 0));


        return $pdf->download('resultados.pdf');

    }
}
