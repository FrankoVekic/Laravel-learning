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
Route::get('/', [GameController::class, 'index']);

Route::get('/game/{game}', [GameController::class, 'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Common Resource Routes:
// index - Show all products
// show - Show single product
// create - Show form to create new product
// store - Store new product
// edit - Show form to edit product
// update - Update product
// destroy - Delete product  