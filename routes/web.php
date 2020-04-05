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
Route::get('/article/{type}/{slug}', 'ArticleController@show')->name('article');
Route::get('/search', 'ArticleController@search')->name('article.search');

Route::prefix('/admin')->group(function () {
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\LoginController@login');
    Route::post('/2fa', 'Auth\LoginController@twofactor')->name('2fa')->middleware('2fa');
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
    Route::post('/lock', 'Auth\LoginController@lock')->name('lock');

    Route::group(['middleware' => ['auth', '2fa'], 'namespace' => 'Admin'], function () {
        Route::get('/', 'DashboardController@dashboard');
        Route::get('/dashboard', 'DashboardController@dashboard')->name('admin.dashboard');
        Route::get('/access', 'DashboardController@access')->name('admin.request_access');
        Route::get('/settings', 'SettingsController@settings')->name('admin.settings');

        Route::group(['prefix' => 'articles'], function () {
            Route::get('/', 'ArticleController@articles')->name('admin.articles');
            Route::get('/new', 'ArticleController@newArticle')->name('admin.new_article');
            Route::post('/new', 'ArticleController@store')->name('admin.new_article');
        });

        Route::group(['prefix' => 'assets'], function () {
            Route::post('/upload', 'ArticleController@image')->name('admin.upload');
            Route::group(['prefix' => 'browse'], function () {
                Route::get('/images/{page?}', 'ArticleController@browseImages')->name('admin.browse.images');
            });
        });

        Route::get('/preview/{article}', 'ArticleController@preview')->name('admin.preview_article');

        Route::group(['prefix' => 'article'], function () {
            Route::get('/{article}', 'ArticleController@article')->name('admin.article');
            Route::post('/{article}', 'ArticleController@update');
            Route::post('/delete/{article}', 'ArticleController@delete')->name('admin.delete_article');
        });
    });
});

Route::group(['prefix' => 'assets'], function () {
    Route::get('/images/{image}', 'AssetController@getImage')->name('asset.image');
});
