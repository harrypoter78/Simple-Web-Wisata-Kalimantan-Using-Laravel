<?php

use App\Models\Post;
use App\Models\Category;
use function PHPSTORM_META\map;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
<<<<<<< HEAD
use App\Http\Controllers\DashboardPostController;
=======
use App\Http\Controllers\HotelController;
>>>>>>> c9548a7f7d98f377f52ee5b3512c4933bf129712

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
<<<<<<< HEAD
        "image3" => "3.jpeg",
        
=======
        "image3" => "3.png",

>>>>>>> c9548a7f7d98f377f52ee5b3512c4933bf129712
    ]);
});



Route::get('/about', function () {
    return view('about', [
        "title" => "Tentang",
        "name" => "reza",
        "email" => "muhammaddwiki01@gmail.com",
        "image1" => "1.png",
    ]);
});



Route::get('/posts', [PostController::class, 'index']);
// halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all(),
        "image1" => "kota1.png",
        "image2" => "alam.png",
        "image3" => "kuliner.jpg",
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
<<<<<<< HEAD
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
});

// Route::get('dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug']);
Route::resource('/dashboard/posts', DashboardPostController::class);
// ->middleware('auth');
=======


// Route Hotel

Route::get('Hotel', [HotelController::class, 'index'])->name('Hotel.list-hotel');
>>>>>>> c9548a7f7d98f377f52ee5b3512c4933bf129712
