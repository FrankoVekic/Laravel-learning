<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GameController extends Controller
{
    
    public function index(){
        //dd(request()->tag);
        return view('games.index',[
            'games' => Product::latest()->filter
            (request(['tag', 'search']))->get()
        ]);
    }

    public function show(Product $game){
        return view('games.show',[
            'game' => $game
        ]);
    }

    public function create(){
        return view('games.create');
    }

    public function store(Request $request){
        //dd($request->all());
        $formFields = $request->validate([
            'title'=>['required',Rule::unique('products','title')],
            'price'=>'required',
            'quantity'=>'required',
            'tags'=>'required',
            'description'=>'required'
        ]);

        Product::create($formFields);

        return redirect('/')->with('message','Product created successfully!');
    }
}
