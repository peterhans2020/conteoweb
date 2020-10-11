<?php

namespace App\Http\Controllers;

use App\Acta;
use App\QR;
use App\Voto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use QrCode;

class ActaController extends Controller
{

    public function index() {
        try {

            $data = DB::table('acta as a')
                ->join('persona as p', 'a.idpersona', '=', 'p.id')
                ->select('p.nombre as persona', 'p.apellido', 'a.id', 'a.descripcion', 'a.totalvoto')
                ->where('a.estado', '=', 'A')
                ->orderBy('a.id', 'desc')
                ->get();

            return response()->json([
                'data' => $data,
                'response' => 1,
            ]);

        }catch(\Exception $e) {
            return response()->json([
                'response' => 0,
                'error' => [
                    'file' => $e->getFile(),
                    'line' => $e->getLine(),
                    'message' => $e->getMessage()
                ]
            ]);
        }
    }

    public function store(Request $request) {
        
        try {

            DB::beginTransaction();
            
            $descripcion = $request->descripcion;
            $idpersona = $request->idpersona;
            $idrecinto = $request->idrecinto;
            $idmesa = $request->idmesa;

            $arraypartido = json_decode($request->arraypartido);
            $arrayresultado = json_decode($request->arrayresultado);

            $data = new Acta();
            $data->idpersona = $idpersona;
            $data->descripcion = $descripcion;
            $data->totalvoto = 0;
            $data->totalnulo = 0;
            $data->totalblanco = 0;
            $data->estado = 'A';
            $data->save();
            $total = 0;

            for ($i = 0; $i < sizeof($arraypartido); $i++) {
                $partido = $arraypartido[$i];
                $resultado = $arrayresultado[$i];
                $detalle = new Voto();
                $detalle->idacta = $data->id;
                $detalle->idpartido = $partido->id;
                $detalle->idmesa = $idmesa;
                $detalle->cantidad = ($resultado->cantidad == '')?0:$resultado->cantidad;
                $nro = ($resultado->cantidad == '')?0:$resultado->cantidad;
                $total = $total + (int)$nro;
                $detalle->save();
            }

            $data = Acta::find($data->id);
            $data->totalvoto = $total;
            $data->update();

            $qr = new QR();
            $qr->idacta = $data->id;
            $nombre = 'acta_qr'.$data->id.'.png';
            $qr->nombre = $nombre;
            $qr->save();

            $acta = DB::table('acta as a')
                ->join('persona as p', 'a.idpersona', '=', 'p.id')
                ->join('voto as v', 'a.id', '=', 'v.idacta')
                ->join('mesa as m', 'v.idmesa', '=', 'm.id')
                ->join('recinto as r', 'm.idrecinto', '=', 'r.id')
                ->join('ciudad as c', 'r.idciudad', '=', 'c.id')
                ->select('p.nombre', 'p.apellido', 'a.totalvoto', 'm.nro as nromesa', 'm.nombre as mesa',
                    'r.nombre as recinto', 'r.ubicacion', 'c.nombre as ciudad', 'a.id'
                )
                ->where('a.id', '=', $data->id)
                ->get();

            $direccion= '/img/qr/'.$nombre;
            $r= QrCode::size(500)->format('png')->generate(json_encode($acta),public_path($direccion));

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
}
