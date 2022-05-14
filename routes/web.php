<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[Controller::class, 'articulos']);

Route::get('/articulos2', [Controller::class, 'articulos2']);

/**
 * 
 * carga de datos de los articulos, por el momento se hace de esta forma
 * TODO: tiene que haber un formulario para agregar articulos nuevos
 */
Route::get('/cargar_articulos', function(){
    $datos = DB::table('articulo')->get();
    if(!count($datos)){
        DB::table('articulo')->upsert([
            ['name'=> 'Yerba Rosamonte', 'price' => 444, 'image' => 'images/product_1.jpg', 'category' => 'Yerbacafe'],
            ['name'=> 'Arroz Dos Hermanos', 'price' => 133, 'image' => 'images/product_2.jpg', 'category' => 'Comestibles'],
            ['name'=> 'Azúcar Ledesma', 'price' => 85, 'image' => 'images/product_3.jpg', 'category' => 'Yerbacafe'],
            ['name'=> 'Galletitas Manón', 'price' => 100, 'image' => 'images/product_4.jpg', 'category' => 'Comestibles'],
            ['name'=> 'Fideos Terrabusi', 'price' => 180, 'image' => 'images/product_5.jpg', 'category' => 'Comestibles'],
        ],[]);
    }
    return redirect('/');
});

