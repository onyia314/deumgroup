<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('index');
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

Route::resource('posts' , PostController::class);

Route::get('/blog-details' , function(){
    return view('blog.details');
})->name('blog.details');

Route::get('/faq' , function(){
    return view('faq');
})->name('faq');

require __DIR__.'/auth.php';