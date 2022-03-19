<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; // manual
use App\Models\Post; // manual
use App\Models\Category; // manual
use App\Models\User; // manual

// use App\Models\Post;

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
        "name" => "Achmad Rizky",
        "email" => "1achrizky@gmail.com",
        "image" => "Foto - Achmad Rizky - red - 4x6.jpg",
    ]);
});

// Route::get('/blog', function () {
//     return view('posts', [
//       "title" => "Posts",
//       "posts" => Post::all(),
//     ]);
// });

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']); // single post

Route::get('/categories', function(){
  return view('categories', [
    'title' => 'Post Categories',
    'categories' => Category::all(),
  ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
  return view('category', [
    'title' => $category->name,
    'posts' => $category->posts, //BINDING. {->posts} HARUS = method di Model Category
    'category' => $category->name,
  ]);
});

Route::get('/authors/{user:username}', function(User $user){
  return view('posts', [
    'title' =>'User Post',
    'posts' => $user->posts,
  ]);
});


// Route::get('/payment-entry', function () {
//     return view('payment.payment_entry', ["title"=>"Entry Payment"] );
// });

// Route::get('/payment-list', function () {
//     return view('payment.payment_list', ["title"=>"List Payment"] );
// });

