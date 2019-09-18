<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('/test')->group(function () {
    Route::get('/home', function () {
        return view('home');
    });
    Route::get('/article', function () {
        return view('article');
    });

    Route::get('/login', function () {
        return view('admin.login');
    });
});

Route::prefix('/admin')->group(function () {
    Route::get('/login', 'LoginController@showLoginForm')->name('admin.login');
    Route::get('/access', function () {
        return 'access requests not yet implemented, please contact support@cyberfusion.nl.';
    })->name('admin.request_access');

    Route::get('/articles', 'Admin\ArticleController@articles');
    Route::get('/articles/new', 'Admin\ArticleController@newArticle');
    Route::get('/article/{id}', 'Admin\ArticleController@article');
    Route::get('/dashboard', 'Admin\DashboardController@dashboard')->name('admin.dashboard');
});
