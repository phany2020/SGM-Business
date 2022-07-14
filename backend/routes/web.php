<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::Class, 'index'])->name('welcome');
Route::get('/posts/{id}', [PostController::Class, 'show'])->name('posts.show');
Route::get('/contact', [PostController::Class, 'contact'])->name('contact');

/*Route::get('/posts', function(){
    return response()->json([
        'title' => 'mon super titre',
        'description' => 'ma super description'
    ]);
});

Route::get('articles', function () {
    return view('articles ');
});*/