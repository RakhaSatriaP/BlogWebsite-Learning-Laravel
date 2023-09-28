<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;



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
    return view('home/home',[
        "title" => "Home" 
    ]);
});
Route::get('/about', function () {
    return view('about/about',[
        "name" => "Rakha Satria",
        "email" => "Rakhasatria@gmail.com",
        "image" => "rakha.jpg",
        "title" => "About"
    ]);
});



Route::get('/posts', [PostController::class, 'index']);

// halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);


