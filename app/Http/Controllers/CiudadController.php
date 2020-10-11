<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CiudadController extends Controller
{
    public function index() {
        try {

            $data = DB::table('ciudad')
                ->where('estado', '=', 'A')
                ->orderBy('id', 'desc')
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
}
