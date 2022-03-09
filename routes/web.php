<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('posts');
})->name('posts');

Auth::routes();
Route::resource('user', UserController::class);
// Route::get('/register/checkSlug', [UserController::class, 'checkSlug']);
Route::resource('posts', PostController::class)->names([
    'index' => 'posts'
]);