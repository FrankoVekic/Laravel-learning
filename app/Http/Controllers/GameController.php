<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class GameController extends Controller
{
    
    public function index(){
        return view('games.index',[
            'heading'=>'Games',
            'games' => Product::all()
        ]);
    }

    public function show(Product $game){
        return view('games.show',[
            'game' => $game
        ]);
    }
}
