<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GameController extends Controller
{
    
    public function index(){
        //dd(request()->tag);
        return view('games.index',[
            'games' => Product::latest()->filter
            (request(['tag', 'search']))->paginate(6) //or simplePaginate
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

        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')
            ->store('images','public');
        }

        $formFields['user_id'] = auth()->id();
        
        Product::create($formFields);

        return redirect('/')->with('message','Product created successfully!');
    }

    // Show Edit Form
    public function edit(Product $game){
        return view('games.edit',['game' => $game]);
    }

    // Update Game Data
    public function update(Request $request,Product $game){

        // Make sure logged in user is owner
        if($game->user_id != auth()->id()){
            abort(403,'Unauthorized Action');
        }

        $formFields = $request->validate([
            'title'=>'required',
            'price'=>'required',
            'quantity'=>'required',
            'tags'=>'required',
            'description'=>'required'
        ]);

        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')
            ->store('images','public');
        }
        
        $game->update($formFields);

        return back()->with('message','Product updated successfully!');
    }

    // Delete Product
    public function destroy(Product $game){
        if($game->user_id != auth()->id()){
            abort(403,'Unauthorized Action');
        }
        $game->delete();
        return redirect('/')->with('message','Game deleted sucessfully');
    }

    // Manage Products
    public function manage(){
        return view('games.manage',[
        'products' => auth()->user()->products()->get()]);
    }
}
