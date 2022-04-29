<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function articulos(){
        $respuesta =[
            ['id'=> 1, 'articleName'=>'Yerba Rosamonte', 'articlePrice'=> '444', 'articleImage'=>'images/product_1.jpg', 'articleCategory' => 'Yerbacafe'],
            ['id'=> 2, 'articleName'=>'Arroz Dos Hermanos', 'articlePrice'=> '133', 'articleImage'=>'images/product_2.jpg', 'articleCategory' => 'Comestibles'],
            ['id'=> 3, 'articleName'=>'Azúcar Ledesma', 'articlePrice'=> '85', 'articleImage'=>'images/product_3.jpg', 'articleCategory' => 'Yerbacafe'],
            ['id'=> 4, 'articleName'=>'Galletitas Manón', 'articlePrice'=> '100', 'articleImage'=>'images/product_4.jpg', 'articleCategory' => 'Comestibles'],
            ['id'=> 5, 'articleName'=>'Fideos Terrabusi', 'articlePrice'=> '180', 'articleImage'=>'images/product_5.jpg', 'articleCategory' => 'Comestibles']
        ];
        return view('index', compact('respuesta'));
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
}
