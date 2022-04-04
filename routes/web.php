<?php
// use App\Models\Post; // manual
// use App\Models\User; // manual
use App\Models\Category; // manual

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController; // manual


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
        "active" => "home",
    ]);
});

Route::get('/dashboard/posts/create', function () {
    return view('dashboard/posts/create', [
        "title" => "Create New Post",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Achmad Rizky",
        "email" => "1achrizky@gmail.com",
        "image" => "Foto - Achmad Rizky - red - 4x6.jpg",
    ]);
});


Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']); // single post

Route::get('/dashboard/posts/create', function(){
  return view('dashboard.posts.create', [
    'title' => 'Post Create',
    "active" => "create",
  ]);
});

Route::get('/categories', function(){
  return view('categories', [
    'title' => 'Post Categories',
    "active" => "categories",
    'categories' => Category::all(),
  ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
  return view('posts', [
    'title' => "Post by Category : $category->name",
    'active' => "categories",
    'posts' => $category->posts->load('category', 'author'), //BINDING. {->posts} HARUS sama dengan method di Model Category
  ]);
});

Route::get('/authors/{author:username}', function(User $author){
  return view('posts', [
    'title' => "Post by Author : $author->name",
    'posts' => $author->posts->load('category','author'),
  ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Route::get('/payment-entry', function () {
//     return view('payment.payment_entry', ["title"=>"Entry Payment"] );
// });

// Route::get('/payment-list', function () {
//     return view('payment.payment_list', ["title"=>"List Payment"] );
// });

