<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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
}
