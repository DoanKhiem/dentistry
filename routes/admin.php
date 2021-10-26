<?php

use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;
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

Route::prefix('admin')->group(function(){
    Route::get('/index', [HomeController::class, 'index'])->name('admin.index');
    Route::get('/login', [HomeController::class, 'login'])->name('admin.login');
    Route::post('/login', [HomeController::class, 'loginPost'])->name('admin.loginPost');

    Route::get('/register', [HomeController::class, 'register'])->name('admin.register');
    Route::post('/register', [HomeController::class, 'registerPost'])->name('admin.registerPost');

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // category
    Route::get('/add-category', [CategoryController::class, 'add'])->name('admin.add-category');
    Route::post('/add-category', [CategoryController::class, 'create'])->name('admin.add-category');
    Route::get('/edit-category/{id}', [CategoryController::class, 'edit'])->name('admin.edit-category');
    Route::post('/edit-category/{id}', [CategoryController::class, 'update'])->name('admin.update-category');
    Route::get('/delete-category/{id}', [CategoryController::class, 'delete'])->name('admin.delete-category');

    Route::get('/list-category', [CategoryController::class, 'index'])->name('admin.list-category');

//     banner
    Route::get('/add-banner', function () {
        return view('admin.add-banner');
    })->name('admin.add-banner');

    Route::post('/add-banner', function () {
        return view('admin.list-banner');
    });


    Route::get('/list-banner', function () {
        return view('admin.list-banner');
    })->name('admin.list-banner');



    // product
    Route::resources([
        'product' => ProductController::class,
        'blog'=> BlogController::class
    ]);
//    Route::get('/add-product', function () {
//        return view('admin.add-product');
//    })->name('admin.add-product');
//
//    Route::get('/list-product', function () {
//        return view('admin.list-product');
//    })->name('admin.list-product');

    // color
    Route::get('/add-color', function () {
        return view('admin.add-color');
    })->name('admin.add-color');

    Route::get('/list-color', function () {
        return view('admin.list-color');
    })->name('admin.list-color');

    // user
    Route::get('/add-user', function () {
        return view('admin.add-user');
    })->name('admin.add-user');

    Route::get('/list-user', function () {
        return view('admin.list-user');
    })->name('admin.list-user');

    // comment
    Route::get('/add-comment', function () {
        return view('admin.add-comment');
    })->name('admin.add-comment');

    Route::get('/list-comment', function () {
        return view('admin.list-comment');
    })->name('admin.list-comment');

    // order
    Route::get('/add-order', function () {
        return view('admin.add-order');
    })->name('admin.add-order');

    Route::get('/list-order', function () {
        return view('admin.list-order');
    })->name('admin.list-order');

});


