<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [RecipeController::class, 'index']);
Route::get('recipes/{recipe:slug}', [RecipeController::class, 'show']);
Route::get('categories/{category:slug}', [CategoriesController::class, 'index']);

// Users
Route::get('login', [UserController::class, 'login']);
Route::post('login', [SessionController::class, 'create']);
Route::get('logout', [SessionController::class, 'destroy']);

// Administrator
//Route::get('administrator/recipe/create', [RecipeController::class, 'create']);
