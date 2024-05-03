<?php

use App\Models\post;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\User;

use App\Http\Controllers\postController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
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
        "title"=> "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Raden Indra Prawirajaya",
        "email"=> "radenprawirajaya@gmail.com",
        "image"=> "img/pasfoto.jpg",
        ]);
});


//halaman single post'
Route::get('/posts',[PostController::class, 'index']);
//halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories'=> Category::all(),
     ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post By Category : $category->name",
        'posts' => $category->posts,
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('posts',[
        'title' => "Post By Author : $author->name",
        'posts' => $author->posts,
        ]);
});

route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
route::post('/login', [LoginController::class, 'authenticate']);
route::post('/logout', [LoginController::class, 'logout']);

route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
route::post('/register', [RegisterController::class, 'store']);

route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

