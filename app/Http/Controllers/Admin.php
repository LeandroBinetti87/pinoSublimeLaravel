<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admin extends Controller
{
    function articulos(){
        $respuesta = DB::table('articulo')->get();
        return view('admin/articulos', ['respuesta' => $respuesta]);
    }
}
