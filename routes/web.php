<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RecipeAdminController;
use App\Http\Controllers\CommentController;

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

Route::post('recipes/{recipe:id}/comment', [CommentController::class, 'store'])->middleware('auth');

// Users
Route::get('login', [UserController::class, 'login'])->middleware('guest')->name('login');
Route::post('login', [SessionController::class, 'create'])->middleware('guest');
Route::get('logout', [SessionController::class, 'destroy'])->middleware('auth');
Route::get('register', [UserController::class, 'register'])->middleware('guest');
Route::post('register', [UserController::class, 'create'])->middleware('guest');

// Administrator
Route::get('administrator/recipes/create', [RecipeAdminController::class, 'create'])->middleware('administrator');
Route::post('administrator/recipes/create', [RecipeAdminController::class, 'store'])->middleware('administrator');
Route::get('administrator/recipes', [RecipeAdminController::class, 'show'])->middleware('administrator');
Route::get('administrator/recipes/{recipe:id}/edit', [RecipeAdminController::class, 'edit'])->middleware('administrator');
Route::patch('administrator/recipes/{recipe}', [RecipeAdminController::class, 'update'])->middleware('administrator');
Route::delete('administrator/recipes/{recipe}', [RecipeAdminController::class, 'destroy'])->middleware('administrator');
