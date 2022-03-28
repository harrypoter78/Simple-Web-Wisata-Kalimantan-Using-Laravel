<?php

use App\Models\Post;
use App\Models\Category;
use function PHPSTORM_META\map;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HotelController;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Beranda",
        "image1" => "1.png",
        "image2" => "2.png",
        "image3" => "3.png",

    ]);
});



Route::get('/about', function () {
    return view('about', [
        "title" => "Tentang",
        "name" => "reza",
        "email" => "muhammaddwiki01@gmail.com",
        "image1" => "alam.jpeg",
        "image2" => "kota.jpeg"
    ]);
});



Route::get('/posts', [PostController::class, 'index']);
// halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});


Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post By Category :  $category->name",
        'posts' => $category->posts->load('category'),
        //'category' => $category->name
    ]);
});

Route::get('/login', [LoginController::class, 'index']);


// Route Hotel

Route::get('Hotel', [HotelController::class, 'index'])->name('Hotel.mainhotel');
