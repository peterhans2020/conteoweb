<?php

namespace App\Http\Controllers;

use App\Mesa;
use App\Recinto;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecintoController extends Controller
{

    public function index() {
        try {

            $data = DB::table('recinto as r')
                ->join('ciudad as c', 'r.idciudad', '=', 'c.id')
                ->select('c.nombre as ciudad', 'r.id', 'r.nombre', 'r.ubicacion')
                ->where('r.estado', '=', 'A')
                ->orderBy('r.id', 'asc')
                ->get();

            return response()->json([
                'data' => $data,
                'response' => 1,
            ]);

        }catch(\Exception $e) {
            return response()->json([
                'response' => 0,
            ]);
        }
    }

    public function store(Request $request) {
        
        try {

            DB::beginTransaction();
            
            $nombre = $request->nombre;
            $ubicacion = $request->ubicacion;
            $idciudad = $request->idciudad;

            $data = new Recinto();
            $data->nombre = $nombre;
            $data->ubicacion = $ubicacion;
            $data->idciudad = $idciudad;
            $data->estado = 'A';
            $mytime = Carbon::now('America/La_paz');
            $data->fecha = $mytime->toDateString();
            $data->hora = $mytime->toTimeString();
            $data->save();

            $arraymesa = json_decode($request->arraymesa);

            foreach ($arraymesa as $mesa) {
                $detalle = new Mesa();
                $detalle->idrecinto = $data->id;
                $detalle->nro = $mesa->nro;
                $detalle->nombre = $mesa->nombre;
                $detalle->save();
            }
            DB::commit();

            return response()->json([
                'data' => $data,
                'response' => 1,
            ]);

        }catch(\Exception $e) {
            DB::rollBack();
            return response()->json([
                'response' => 0,
            ]);
        }
    }

    public function show($id) {
        try {

            $data = DB::table('recinto as r')
                ->join('ciudad as c', 'r.idciudad', '=', 'c.id')
                ->select('c.nombre as ciudad', 'r.id', 'r.nombre', 'r.ubicacion')
                ->where('r.id', '=', $id)
                ->orderBy('r.id', 'desc')
                ->get();

            $detalle = DB::table('mesa')
                ->where('idrecinto', '=', $id)
                ->get();

            return response()->json([
                'data' => $data,
                'response' => 1,
                'detalle' => $detalle,
            ]);

        }catch(\Exception $e) {
            return response()->json([
                'response' => 0,
            ]);
        }
    }

    public function getRecintoByCidad($ciudadId) {

        try {
            
            $recintos = Recinto::where('idciudad', $ciudadId)->get();

            return response()->json([
                'recintos' => $recintos
            ]);

        } catch (\Throwable $th) {
            return response()->json([
                'error' => [
                    'file' => $th->getFile(),
                    'line' => $th->getLine(),
                    'message' => $th->getMessage()
                ]
            ]);
        }

    }

}
