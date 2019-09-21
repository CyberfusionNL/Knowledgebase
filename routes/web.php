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

Route::get('/', 'HomeController@home')->name('home');

Route::prefix('/test')->group(function () {
    Route::get('/info', function () {
        return phpinfo();
    });
});

Route::get('/article/{type}/{slug}', 'ArticleController@show')->name('article');
Route::get('/search', 'Admin\ArticleController@search')->name('article.search');

Route::prefix('/admin')->group(function () {
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\LoginController@login');
    Route::post('/2fa', function () {
        return redirect(URL()->previous());
    })->name('2fa')->middleware('2fa');
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
    Route::post('/lock', 'Auth\LoginController@lock')->name('lock');
    Route::get('/access', function () {
        return 'access requests not yet implemented, please contact support@cyberfusion.nl.';
    })->name('admin.request_access');

    Route::group(['middleware' => ['auth', '2fa']], function () {
        Route::get('/', 'Admin\DashboardController@dashboard');
        Route::get('/dashboard', 'Admin\DashboardController@dashboard')->name('admin.dashboard');
        Route::get('/settings', 'Admin\SettingsController@settings')->name('admin.settings');

        Route::get('/articles', 'Admin\ArticleController@articles')->name('admin.articles');
        Route::get('/articles/new', 'Admin\ArticleController@newArticle')->name('admin.new_article');
        Route::post('/articles/new', 'Admin\ArticleController@store')->name('admin.new_article');
        Route::get('/article/{id}', 'Admin\ArticleController@article')->name('admin.article');
        Route::post('/article/{id}', 'Admin\ArticleController@update');
        Route::get('/preview/{id}', 'Admin\ArticleController@preview')->name('admin.preview_article');
    });
});
