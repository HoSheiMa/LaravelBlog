<?php

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

Route::get('/', 'HomeController@index')->name('home');

Route::get('honlap-keszites', 'WeboldalKeszitesController@index')->name('honlap.index');
Route::get('webaruhaz-keszites', 'WebshopKeszitesController@index')->name('webshop.index');

// Blog routes
Route::get('blog', 'PostController@index')->name('post.index');
Route::get('cikk/{slug}', 'SinglePostController@details')->name('post.details');
Route::get('/kategoria/{slug}', 'PostController@postByCategory')->name('category.posts');

Auth::routes();

Route::group(
    ['middleware' => ['auth']],
    function () {
        Route::post('comment/{post}', 'CommentController@store')->name('comment.store');
        Route::post('comment/{post}/{CommentId}/reply', 'CommentController@reply')->name('comment.reply');
    }
);

// Routes for Admin group
Route::group(
    [
        'as' => 'admin.',
        'prefix' => 'admin',
        'namespace' => 'Admin',
        'middleware' => ['auth', 'admin']
    ],
    function () {

        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::resource('categories', 'CategoryController');
        Route::resource('posts', 'PostController');
        Route::get('profile', 'AdminSettingsController@profile')->name('profile');
        Route::put('profile/update', 'AdminSettingsController@profileUpdate')->name('profile.update');
        Route::get('password', 'AdminSettingsController@password')->name('password');
        Route::put('password/update', 'AdminSettingsController@passwordUpdate')->name('password.update');
        Route::get('comments', 'CommentController@index')->name('comment.index');
        Route::delete('comments/{id}', 'CommentController@destroy')->name('comment.destroy');
    }
);

// Routes for Member group
Route::group(
    [
        'as' => 'member.',
        'prefix' => 'member',
        'namespace' => 'Member',
        'middleware' => ['auth', 'member']
    ],
    function () {

        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    }
);
