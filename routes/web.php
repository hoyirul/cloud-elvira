<?php

use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BookController;
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
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [PageController::class, 'index']);
Route::get('/book', [PageController::class, 'index']);
Route::get('/book/{id}/show', [PageController::class, 'show']);


Route::middleware(['auth', 'isCustomer'])->group(function(){
    Route::get('/cart/{id}/show', [PageController::class, 'cart']);
    Route::get('/cart/{id}/edit', [PageController::class, 'cart_edit']);
    Route::get('/checkout/{id}/detail', [PageController::class, 'checkout_detail']);
    Route::post('/checkout/{id}', [PageController::class, 'checkout']);

    Route::get('/user/dashboard', [PageController::class, 'dashboard']);
    Route::put('/user/update', [PageController::class, 'update_profile']);
    Route::get('/user/transaction', [PageController::class, 'transaction']);
    Route::get('/user/transaction/{id}/detail', [PageController::class, 'transaction_detail']);
    Route::get('/user/change_password', [PageController::class, 'change_password']);
    Route::put('/user/change_password', [PageController::class, 'update_password']);
});

Route::middleware(['auth', 'isAdmin'])->group(function(){
    
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
        
        Route::resource('book', BookController::class);
    });
});