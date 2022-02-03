<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produto;

class ProdutoController extends Controller
{

    public function index()
    {
        return Produto::all();
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

    $content = $request->file('json')->get();

    $rooms = json_decode($content, true);
    
    // $rooms->map(function($produtos){
    //     return $produtos;
    // });
    foreach ($rooms as $room){

         $produto = Produto::create([
        "title"=> $room['title'],
		"type"=>$room['type'],
        "description"=>$room['description'],
        "price"=>$room['price'],
		"rating"=>$room['rating'],

    ]);
     
    };
  
//    return $rooms;
    // $produto = Produto::create([
    //     "title"=> "Notebook",
	// 	"type"=>"7",
    //     "description"=>"teste",
    //     "price"=>300,
	// 	"Rating"=> 10

    // ]);
    // return Produto::all();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request,Produto $id)
    {

       $id->update($request->all());
        return response()->json($id);
        
    }

    public function destroy(Produto $id)
    {
     $id->delete();
     return response()->json($id);
    }
}
