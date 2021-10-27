<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\HomeController;
use App\Http\Controllers\user\AccountController;
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

// Route::prefix('user')->group(function(){
    // 404
    Route::get('/404', function () {
        return view('user.404');
    })->name('user.404');

    // about
    Route::get('/about', function () {
        return view('user.about');
    })->name('user.about');

    // blog
    Route::get('/blog', [HomeController::class , 'index'])->name('user.blog');
    // blog-detail
    Route::get('/blog-detail/{id}', [HomeController::class , 'blogDetail'])->name('user.blogDetail');
    //    Account
    Route::get('/login', [AccountController::class, 'login'])->name('user.login');
    Route::post('/login', [AccountController::class, 'check_login'])->name('user.check_login');
    Route::get('/logout', [AccountController::class, 'logout'])->name('user.logout');

    Route::get('/register', [AccountController::class, 'register'])->name('user.register');
    Route::post('/register', [AccountController::class, 'check_register'])->name('user.check_register');
    Route::get('/profile', [AccountController::class, 'profile'])->name('user.profile');

// cart
    Route::get('/cart', function () {
        return view('user.cart');
    })->name('user.cart');

    // checkout
    Route::get('/checkout', function () {
        return view('user.checkout');
    })->name('user.checkout');

    // compare
    Route::get('/compare', function () {
        return view('user.compare');
    })->name('user.compare');

    // contact
    Route::get('/contact', function () {
        return view('user.contact');
    })->name('user.contact');

    // forgot-password
    Route::get('/forgot-password', function () {
        return view('user.forgot-password');
    })->name('user.forgot-password');

    // index
    Route::get('/index', function () {
        return view('user.index');
    })->name('user.index');

    // index
    Route::get('/', function () {
        return view('user.index');
    });

    // login
    Route::get('/login', function () {
        return view('user.login');
    })->name('user.login');

    // products
    Route::get('/products', function () {
        return view('user.products');
    })->name('user.products');

    // register
    Route::get('/register', function () {
        return view('user.register');
    })->name('user.register');

    // shop
    Route::get('/shop', function () {
        return view('user.shop');
    })->name('user.shop');

    // wishlist
    Route::get('/wishlist', function () {
        return view('user.wishlist');
    })->name('user.wishlist');
// });


