<?php

use App\Http\Controllers\Authentication\UserController;
use App\Http\Controllers\Categories\CategoriesController;
use App\Http\Controllers\Products\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Categories
#add categories 
Route::post('add', [CategoriesController::class, 'AddCateg']);
#fetch all categ
Route::get('all-categ', [CategoriesController::class, 'AllCateg']);

// Products 
#add products
Route::post('add-product', [ProductsController::class, 'AddProducts']);

// Authentication
#register
Route::post('signup', [UserController::class, 'Register']);
#login
Route::post('login', [UserController::class, 'login']);
#fetch all user
Route::get('all', [UserController::class, 'AllUser']);
