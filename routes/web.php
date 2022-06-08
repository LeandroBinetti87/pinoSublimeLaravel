<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Admin;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

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



/** 
 * @brief: Rutas admin
 * @details: Acá se ponen todas las rutas que tienen relacion a las funcionaliadades
 *           que tiene el administrador del sitio web
 * 
 */

Route::get('/admin/articulos', [Admin::class, 'articulos'])->middleware('auth');

Route::get('/alta_articulo', [Controller::class, 'alta']);


Route::post('/guardar_formulario', [Controller::class, 'store'])->name('formulario.guardar'); 

Route::get('/admin/article/delete_get/{id}', [Admin::class, 'delete_get']);
Route::get('/admin/article/delete/{id}', [Admin::class, 'delete']);


/** 
 * @brief: Rutas Para Login y Registro de usuarios
 * @details: Acá se ponen todas las rutas que tienen relacion a las funcionalidades
 *           de dar de alta un usuario e iniciar session
 */

Route::get('/home',function(){
    return view('home');
})->name('home');;

Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('auth.register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [SessionController::class, 'create'])
    ->middleware('guest')
    ->name('auth.login');

Route::post('/login', [SessionController::class, 'store'])->name('login.store');

Route::get('/logout', [SessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('auth.logout');
