<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\Category;
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

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category/category', [
        'title' => "Post By Category : $category->name",
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});

Route::get('/categories', function () {
    return view('category/categories', [
        'title' => "Post Categories",
        'categories' => Category::all()
    ]);
});


