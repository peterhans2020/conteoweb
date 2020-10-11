<?php

namespace App\Http\Controllers;

use App\Mesa;
use App\Recinto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovilController extends Controller
{
    public function get_mesa($id){
        try {

            $data = DB::table('mesa as m')
                ->join('recinto as r', 'm.idrecinto', '=', 'r.id')
                ->select('r.nombre as recinto', 'm.id', 'm.nombre', 'm.nro')
                ->where('m.estado', '=', 'A')
                ->where('m.idrecinto', '=', $id)
                ->orderBy('m.id', 'asc')
                ->get();

            $recinto=Recinto::find($id);

            return response()->json([
                'data' => $data,
                'response' => 1,
                'recinto' => $recinto
            ]);

        }catch(\Exception $e) {
            return response()->json([
                'response' => 0,
            ]);
        }
    }
    public function get_ciudad(){
        try {

            $data = DB::table('ciudad as c') 
                ->where('c.estado', '=', 'A')
                ->where('c.id', '!=', '1')
                ->orderBy('c.id', 'asc')
                ->get();

            return response()->json([
                'response' => 1,
                'data' => $data,
            ]);

        }catch(\Exception $e) {
            return response()->json([
                'response' => 0,
            ]);
        } 
    }
    public function show_mesa($id){
        try {

            $delegado = DB::table('delegado as d')
                ->join('persona as p', 'd.idpersona', '=', 'p.id')
                ->select('p.id', 'p.nombre', 'p.apellido', 'p.genero')
                ->where('p.estado', '=', 'A')
                ->where('d.idmesa', '=', $id)
                ->orderBy('p.id', 'asc')
                ->get();

            $votos = DB::table('voto as v')
                ->join('partido as p', 'v.idpartido', '=', 'p.id')
                ->select('v.id', 'v.cantidad', 'p.nombre', 'p.sigla', 'p.color')
                ->where('v.idmesa', '=', $id)
                ->orderBy('v.id', 'asc')
                ->get();

            $mesa = DB::table('mesa as m')
                ->join('recinto as r', 'm.idrecinto', '=', 'r.id')
                ->join('ciudad as c', 'r.idciudad', '=', 'c.id')
                ->select('m.id', 'm.nro', 'm.nombre', 'r.nombre as recinto', 'r.ubicacion', 'c.nombre as ciudad')
                ->where('m.id', '=', $id)
                ->orderBy('m.id', 'asc')
                ->first();

            return response()->json([
                'delegado' => $delegado,
                'votos' => $votos,
                'mesa' => $mesa,
                'response' => 1,
            ]);

        }catch(\Exception $e) {
            return response()->json([
                'response' => 0,
            ]);
        } 
    }
}
