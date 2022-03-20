<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\DestinationController;
use App\Http\Controllers\API\UserAdminController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Public Routes
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::resource('destination', DestinationController::class)->only([
    'index', 'show'
]);;
Route::get('/alamDestination', [DestinationController::class, 'alamDestination']);
Route::get('/kotaDestination', [DestinationController::class, 'kotaDestination']);

// Protected Routes for Admin
Route::group(['middleware' => ['auth:sanctum', 'admin']], function () {
    Route::resource('destination', DestinationController::class)->only([
        'store', 'update', 'destroy'
    ]);;
    Route::resource('user-admin', UserAdminController::class);
});

// Protected Routes for User
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::resource('user', UserController::class);
    Route::put('/user', [UserController::class, 'updateUser']);
    Route::delete('/user', [UserController::class, 'destroyUser']);
    Route::post('/logout', [AuthController::class, 'logout']);
});


