<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
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
	return view('home', [
		"title" => 'Home',
		"active" => 'home'
	]);
});

Route::get('/about', function () {
	return view('about', [
		"title" => 'About',
		"active" => 'about',
		"name" => "Bennart",
		"email" => "ben@gmail.com"
	]);
});

Route::get('/blog', [PostController::class, 'index']);

Route::get('/blog/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
	return view('categories', [
		'title' => "Post Categories",
		'active' => "categories",
		'categories' => Category::all()
	]);
});

// login & register
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/register', [RegisterController::class, 'index']);

// action register
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

// action login
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::post('/logout', [LoginController::class, 'logout']);