<?php

use App\Models\Land;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\LandController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SendContactUsEmail;

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
    $lands = Land::orderBy('created_at' , 'desc')->paginate(5);
    $posts = Post::orderBy('created_at' , 'desc')->paginate(3);
    $projects = Project::orderBy('created_at' , 'desc')->paginate(4);
    return view('index' , ['lands' => $lands , 'posts' => $posts , 'projects' => $projects]);
})->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth' , 'verified'])->name('dashboard');

Route::get('/about' , function(){
    return view('about');
})->name('about');

Route::get('/contact' , function(){
    return view('contact');
})->name('contact');

Route::group(['middleware' => ['json.response']] , function(){
    //no need for @csrf here so we make use of Get method
    Route::get('/send-contact-form/{name}/{email}/{subject}/{message}' , [SendContactUsEmail::class , 'send']);
    Route::get('/send-dummy-contact-form/{name}/{email}/{subject}/{message}' , [SendContactUsEmail::class , 'dummy']);
});


Route::name('services.')->prefix('services')->group(function(){

    Route::get('real-estate' , function(){
        return view('services.real-estate');
    })->name('real-estate');

    Route::get('engineering' , function(){
        return view('services.engineering');
    })->name('engineering');

    Route::get('ict' , function(){
        return view('services.ict');
    })->name('ict');
    
});

Route::get('/view/categories/posts/{category_id}' , [CategoryController::class , 'categoryPosts'])->name('category.posts');
Route::resource('categories' , CategoryController::class);

Route::get('/blog', [PostController::class , 'index'])->name('blog');

Route::get('/posts' , [PostController::class , 'adminIndex'])->middleware(['auth' , 'admin'])->name('posts.index');
Route::post('/posts/store' , [PostController::class , 'store'])->middleware(['auth', 'admin'])->name('posts.store');
Route::get('/posts/create' , [PostController::class , 'create'])->middleware(['auth', 'admin'])->name('posts.create');
Route::get('/posts/edit/{slug}' , [PostController::class , 'edit'])->middleware(['auth', 'admin'])->name('posts.edit');
Route::get('/posts/show/{slug}' , [PostController::class , 'show'])->name('posts.show');
Route::post('/posts/update/{slug}' , [PostController::class , 'update'])->middleware(['auth', 'admin'])->name('posts.update');
Route::post('/posts/destroy/{slug}' , [PostController::class , 'destroy'])->middleware(['auth', 'admin'])->name('posts.destroy');


Route::resource('lands' , LandController::class);
Route::get('/properties', [LandController::class , 'guestIndex'])->name('properties');

Route::get('/engprojects', [ProjectController::class , 'guestIndex'])->name('engprojects');
Route::resource('projects' , ProjectController::class);

Route::get('/faq' , function(){
    return view('faq');
})->name('faq');

Route::get('/clear/cache' , function(){
    Artisan::call('cache:clear');
    return "cache cleared";
});

require __DIR__.'/auth.php';