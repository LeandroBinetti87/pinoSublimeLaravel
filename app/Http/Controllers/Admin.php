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

    function delete_get($id){
        $articulo = DB::table('articulo')->where('id',$id)->first();
        return view('admin/articulos_delete', ['articulo' => $articulo]);
    }

    function delete($id){
        $articulo = DB::table('articulo')->where('id',$id)->delete();
        return redirect('/admin/articulos');
    }

    function update_get($id){
        $articulo = DB::table('articulo')->where('id',$id)->first();
        return view('admin/articulos_update', ['articulo' => $articulo]);
    }

    function update($id){
        $articulo = DB::table('articulo')->where('id',$id)->first();
        return view('/admin/articulo_id_update', ['articulo' => $articulo]);
    }
}
