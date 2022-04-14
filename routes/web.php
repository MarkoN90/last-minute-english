<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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

   $link = DB::table('settings')
        ->where('slug', '=', 'udemy_link')->first();

    return view('home', ['udemyLink' => $link]);
});

Route::get('/admin', function () {
    return view('index');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});


Route::get('/starter', function () {
    return view('starter');
});


// admin

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/posts', [PostsController::class, 'index']);

Route::get('/posts/create', [PostsController::class, 'create']);

Route::post('/posts', [PostsController::class, 'store']);

Route::get('/posts/{posts}/edit', [PostsController::class, 'edit']);

Route::post('/posts/{posts}/update', [PostsController::class, 'update']);

Route::post('/posts/{posts}/preview', [PostsController::class, 'preview']);

Route::get('/posts/create', [PostsController::class, 'create']);

Route::get('/post', [PostsController::class, 'show']);

Route::get('/settings', [PagesController::class, 'settings']);

Route::post('/settings/save', [PagesController::class, 'settingsSave']);

Route::post('/about', [PagesController::class, 'about']);

Route::get('/contact', [PagesController::class, 'contact']);

Route::post('/subscribe', [\App\Http\Controllers\SubscriptionController::class, 'store']);

Route::resource('category', CategoryController::class);

Route::get('category/{category}/delete', [CategoryController::class, 'delete']);

// auth
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/user/create', function () {
    $user = new \App\Models\User();
    $user->password = Hash::make('password');
    $user->email = 'example@gmail.com';
    $user->name = 'admin';
    $user->save();

    echo 'success';
});





Route::get('/footer', function() {
    return view('footer');
});
