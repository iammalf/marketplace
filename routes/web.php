<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
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


////////RUTAS DE LA TABLA POSTS
//LISTADO DE POSTS
Route::get('/', [PostController::class, 'index'])->name('posts.index');
//DETALLE POST
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');


////////RUTAS DE LA TABLA PRODUCTS
//LISTADO DE PRODUCTS



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('users/{id}', function ($id) {
});
