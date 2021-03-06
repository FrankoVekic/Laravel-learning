<?php

use App\Models\Game;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\UserController;

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

//All Games
Route::get('/', [GameController::class, 'index']);

//Show Create Form
Route::get('/games/create', [GameController::class, 'create'])
->middleware('auth');

//Store Games Data
Route::post('/games', [GameController::class, 'store'])
->middleware('auth');

//Show Edit Form
Route::get('/games/{game}/edit',[GameController::class,'edit'])
->middleware('auth');;

// Update Game
Route::put('/games/{game}',[GameController::class,'update'])
->middleware('auth');

// Delete Game
Route::delete('/games/{game}',[GameController::class,'destroy'])
->middleware('auth');

// Manage Products 
Route::get('/games/manage',[GameController::class,'manage'])
->middleware('auth');

//Single Game
Route::get('/games/{game}', [GameController::class, 'show']);

// Show Register/Create Form
Route::get('/register',[UserController::class,'create'])
->middleware('guest');

// Create New User
Route::post('/users',[UserController::class,'store']);

// Log user out
Route::post('/logout',[UserController::class,'logout'])
->middleware('auth');

// Show Login Form
Route::get('/login',[UserController::class,'login'])
->name('login')
->middleware('guest');

// Log In User
Route::post('/users/authenticate',[UserController::class,'authenticate']);


Auth::routes([
    'register' => false,
    'reset' => false,
    'verify'=>false,
    'login'=>false
]);

