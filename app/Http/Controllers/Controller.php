<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function articulos(){
        /**
         * Traigo los datos y los envio a la vista
         * TODO: Esto se tiene que hacer desde un servicio no acá
         */
        $respuesta = DB::table('articulo')->get();
        return view('index', ['respuesta' => $respuesta]);
    }

    public function articulos2(){
        $art1 = array('articleName' => 'Yerba Peron', 'articlePrice' => '452','articleImage' => 'images/product_1.jpg','articleCategory' => 'Usados');
        $art2 = array('articleName' => 'Arroz Evita', 'articlePrice' => '133','articleImage' => 'images/product_2.jpg','articleCategory' => 'Usados');
        $articulos = array("prod1" => $art1, "prod2" => $art2);
        $respuesta =[
            ['id'=> 1, 'articleName'=>'Yerba Rosamonte', 'articlePrice'=> '444', 'articleImage'=>'images/product_1.jpg', 'articleCategory' => 'Yerbacafe'],
            ['id'=> 2, 'articleName'=>'Arroz Dos Hermanos', 'articlePrice'=> '133', 'articleImage'=>'images/product_2.jpg', 'articleCategory' => 'Comestibles']
        ];
        return view('articulos2', compact('respuesta'));
    }

    public function alta(){
        return view('alta');
    }

    //Trae datos del formulario, los guarda en variables locales que luego vuelca en la base de datos
    //para después volver a la vista
    public function store(Request $request){
 //       $validatedData = $request->validate([
 //           'name' => 'required',
 //           'price' => 'required',
 //           'image' => 'required',
 //           'category' => 'required',
 //       ]);

        // $request->validate([
        //     'name' => 'required',
        //     'founded' => 'required|integer|min:0|max:2021',
        //     'description' => 'required',
        //     'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        // ]);

        // $test = $request->file('image')->getClientOriginalName();
        // gessExtension()
        // getMimeType()
        // store()
        // asStore()
        // storePublicly()
        // move()
        // getClientOriginalName()
        // getClientMimeType()
        // getClientMimeType()
        // gessClientExtension()
        // getSize()
        // getError()
        // isValid()

        // dd($test);

        $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);
        // dd($test);

        $nombre = $request->input('name');
        $precio = $request->input('price');
        $imagen = 'images/' . $newImageName;
        $categoria = $request->input('category');
        //Escribo en base de datos
        DB::table('articulo')->upsert([
            ['name'=> $nombre, 'price' => floatval($precio), 'image' =>  $imagen, 'category' => $categoria],
        ],[]);
        //Envío respuesta a vista
        $respuesta = [
            'name' => $nombre, 'price' => $precio, 'image' => $imagen, 'category' => $categoria
        ];
        return view('alta', compact('respuesta'));
    }

    public function modify(Request $request){
               $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();
               $request->image->move(public_path('images'), $newImageName);
               // dd($test);
               $id = $request->input('id');
               $nombre = $request->input('name');
               $precio = $request->input('price');
               $imagen = 'images/' . $newImageName;
               $categoria = $request->input('category');
               //Escribo en base de datos
               DB::table('articulo')->where('id', $id)
               ->update(array('name' => $nombre, 'price' => floatval($precio), 'image' => $imagen, 'category' => $categoria));
               return redirect('/admin/articulos');
    }
}
