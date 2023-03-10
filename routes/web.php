<?php

use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\Post\ProfileController;
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
Auth::routes();


Route::middleware(['auth'])->group(function(){

    Route::get('/', function () {
        return redirect()->route('postshare.index');
    });
    
    Route::get('/home',function(){
        return redirect()->route('postshare.index');
    })->name('home');

    Route::get('/profilen',[ProfileController::class,'index'])->name('profile');




    // Route::post('/postds', [PostController::class,'store'])->name('post.store');
    Route::resource('postshare', PostController::class);

});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
