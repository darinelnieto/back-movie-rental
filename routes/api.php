<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\RentController;
use App\Models\User;
use App\Models\Customer;
use App\Models\Movie;
use App\Models\Categorie;
use App\Models\Year;
use App\Models\Rent;
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
// login
Route::post('login', [UserController::class, 'login']);
Route::get('logged', [UserController::class, 'logged']);
// Roles
Route::get('read/role', [UserController::class, 'readRole']);
// User
Route::post('create/user', [UserController::class, 'createUser']);
Route::get('read/user', [UserController::class, 'readUser']);
Route::get('user', [UserController::class, 'getUser']);
Route::post('update/user', [UserController::class, 'updateUser']);
Route::post('delete/user', [UserController::class, 'delete']); 
// Customer
Route::post('create/customer', [CustomerController::class, 'create']);
Route::get('show/customer', [CustomerController::class, 'read']);
Route::get('customer', [CustomerController::class, 'getCustomer']);
Route::post('update/customer', [CustomerController::class, 'update']);
Route::post('delete/customer', [CustomerController::class, 'delete']);
// Movies
Route::post('movie/create', [MovieController::class, 'createMovie']);
Route::get('year/category', [MovieController::class, 'getCatYear']);
Route::get('show/movies', [MovieController::class, 'showMovies']);
route::get('get/movie', [MovieController::class, 'getMovie']);
Route::post('update/movie', [MovieController::class, 'updateMovie']);
Route::post('delete/movie', [MovieController::class, 'deleteMovie']);
// Rent
Route::get('movie/customer', [RentController::class, 'getContent']);
Route::post('create/rent', [RentController::class, 'createRent']);
Route::get('show/rents', [RentController::class, 'showRents']);
Route::get('get/rent', [RentController::class, 'getRent']);
Route::post('update/rent', [RentController::class, 'update']);