<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Image;

class PersonaController extends Controller
{

    public function index() {
        try {

            $data = DB::table('persona as p')
                ->join('ciudad as c', 'p.idciudad', '=', 'c.id')
                ->select('c.nombre as ciudad', 'p.id', 'p.nombre', 'p.apellido', 
                    'p.genero', 'p.imagen'
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
            ]);
        }
    }

    public function store(Request $request) {
        
        try {
            
            $ci = $request->ci;
            $nombre = $request->nombre;
            $apellido = $request->apellido;
            $genero = $request->genero;
            $idciudad = $request->idciudad;
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
                $path = "public/img/persona/".$nameHash.'.'
                    .explode('/', explode(':', substr($imagen, 0, strpos($imagen, ';')))[1])[1];
                Storage::put($path, $imageData);
                $pathabsoluto = "/storage/img/persona/".$nameHash.'.'.explode('/', explode(':', substr($imagen, 0, strpos($imagen, ';')))[1])[1];
                $imagen = $pathabsoluto;
            }else {
                $imagen = null;
            }

            $data = new Persona();
            $data->ci = $ci;
            $data->nombre = $nombre;
            $data->apellido = $apellido;
            $data->idciudad = $idciudad;
            $data->genero = $genero;
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
