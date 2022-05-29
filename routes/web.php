<?php

use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PublisherController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function(){
    
    Route::prefix('/u')->group(function(){
        Route::get('dashboard', [HomeController::class, 'index']);
        
        Route::controller(UserController::class)->group(function(){
            Route::get('add_profile', 'add');
            
            Route::get('admins', 'get_admin');
            Route::post('admins', 'add_admin');
            Route::get('admins/{id}/edit', 'edit_admin');
            Route::put('admins/{id}', 'update_admin');
            
            Route::get('customers', 'get_customer');

            Route::get('users/create', 'create');
            Route::post('users', 'store');
            Route::delete('users/{id}', 'destroy');
        });
        
        Route::resource('author', AuthorController::class);

        Route::resource('publisher', PublisherController::class);
        
        Route::resource('genre', GenreController::class);
    });
});