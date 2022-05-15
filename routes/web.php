<?php

use App\Models\Game;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::get('/hello', function (){
    return  response('<h1>Hello World</h1>', 200)
    ->header('Content-Type', 'text/plain')
    ->header('foo', 'bar');
});

Route::get('/posts/{id}', function($id){
    return response('Post: ' . $id);
})->where('id', '[0-9]+');


Route::get('/search', function(Request $request){
    return $request->name . " " . $request->city;
});

Route::get('/', function () {
    return view('welcome',[
        'heading'=>'Games',
        'games' => Product::all()
    ]);
});

Route::get('/game/{id}',function($id){
    return view('game',[
        'heading'=>'Game',
        'games' => Product::find($id)
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
