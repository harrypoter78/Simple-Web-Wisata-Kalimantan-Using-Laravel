<?php

use App\Models\Post;
use App\Models\Category;
use function PHPSTORM_META\map;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardPostController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\API\DestinationCategoryController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\DestinationController;
use App\Http\Controllers\API\UserAdminController;
use App\Http\Controllers\API\UserController;

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
    Artisan::call('storage:link');
    return view('home', [
        "title" => "Beranda",
        "image1" => "1.png",
        "image2" => "2.png",
        "image3" => "3.jpeg",
        
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



Route::get('/posts',[PostController::class, 'index']);
// halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

// Route::get('/categories', function () {
//     return view('categories', [
//         'title' => 'Post Categories',
//         'categories' => Category::all(),
//         "image1" => "kota1.png",
//         "image2" => "alam.png",
//         "image3" => "kuliner.jpg",
//     ]);
// });


Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post By Category :  $category->name",
        'posts' => $category->posts->load('category'),
        //'category' => $category->name
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
});

// Route::get('dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug']);
Route::resource('/dashboard/posts', DashboardPostController::class);
// ->middleware('auth');




Route::resource('destinationCategory', DestinationCategoryController::class)->only([
    'index', 'show'
]);
Route::resource('destination', DestinationController::class)->only([
    'index', 'show'
]);
Route::get('/destinationByCategory/{id}', [DestinationController::class, 'destinationByCategory']);