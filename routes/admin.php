<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryPostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

//RUTAS PARA CRUD CATEGORY POST
Route::resource('categoriesposts', CategoryPostController::class)->names('admin.categoriesposts');

//RUTAS PARA CRUD TAG POST
Route::resource('tags', TagController::class)->names('admin.tags');

//RUTAS PARA CRUD POST
Route::resource('posts', PostController::class)->names('admin.posts');
