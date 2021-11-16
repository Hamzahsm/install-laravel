<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
// hubungkan model post dari folder app
use App\Models\Post;

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
        "title" => "Home",
        "image" => "home.jpg"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Hamzah Saiful Madjid",
        "kampus" => "Universitas Negeri Malang",
        "jurusan" => "D3 Manajemen Pemasaran",
        "image" => "freelancer.png"
    ]);
});

// ambil controller PostController, dengan methode index
Route::get('/blog', [PostController::class, 'index']);

Route::get('/my-account', function () {
    return view('my-account', [
        "title" => "My-account"
    ]);
});


// halama single post 

Route::get('/post/{slug}', [PostController::class, 'show']);
