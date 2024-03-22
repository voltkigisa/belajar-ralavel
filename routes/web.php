<?php

use App\Models\post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;


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

Route::get('/', function () {
    return view('home', [
        "title"=> "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Raden Indra Prawirajaya",
        "email"=> "radenprawirajaya@gmail.com",
        "image"=> "img/pasfoto.jpg",
        ]);
});


Route::get('/posts',[PostController::class, 'index']);
//halaman single post
Route::get('posts/{slug}', [PostController::class, 'show']);
