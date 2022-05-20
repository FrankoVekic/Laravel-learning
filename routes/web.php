<?php

use App\Http\Controllers\GameController;
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

/*
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
*/

// Common Resource Routes:
// index - Show all products
// show - Show single product
// create - Show form to create new product
// store - Store new product
// edit - Show form to edit product
// update - Update product
// destroy - Delete product  

//All games
Route::get('/', [GameController::class, 'index']);

//Show Create Form
Route::get('/games/create', [GameController::class, 'create']);

//Store Games Data
Route::post('/games', [GameController::class, 'store']);

//Single game
Route::get('/games/{game}', [GameController::class, 'show']);

Auth::routes();

