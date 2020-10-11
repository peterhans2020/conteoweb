<?php

namespace App\Http\Controllers;

use App\Partido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Image;

class PartidoController extends Controller
{

    public function index() {
        try {

            $data = DB::table('partido as p')
                ->select('p.id', 'p.nombre', 'p.sigla', 
                    'p.imagen'
                )
                ->where('p.estado', '=', 'A')
                ->orderBy('p.id', 'desc')
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
            
            $sigla = $request->sigla;
            $nombre = $request->nombre;
            $idpersona = $request->idpersona;
            $imagen = $request->imagen;

            if ($imagen != '') {
                $image = Image::make($imagen);
                $image->resize(700,null,function($constraint){
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $imageData = (string)$image->encode('jpg',30);
                $name = time();
                $nameHash = md5($name);
                $path = "public/img/partido/".$nameHash.'.'
                    .explode('/', explode(':', substr($imagen, 0, strpos($imagen, ';')))[1])[1];
                Storage::put($path, $imageData);
                $pathabsoluto = "/storage/img/partido/".$nameHash.'.'.explode('/', explode(':', substr($imagen, 0, strpos($imagen, ';')))[1])[1];
                $imagen = $pathabsoluto;
            }else {
                $imagen = null;
            }

            $data = new Partido();
            $data->sigla = $sigla;
            $data->nombre = $nombre;
            $data->idpersona = $idpersona;
            $data->imagen = $imagen;
            $data->estado = 'A';
            $data->save();

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
}
