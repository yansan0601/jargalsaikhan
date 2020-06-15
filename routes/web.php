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

Auth::routes([
    'register' => false
]);

Route::get('/', 'HomePageController@index');

Route::get('admin/', 'admin\PostController@index')->name('admin_home')->middleware('auth');
Route::group([
    'namespace' => 'admin', 
    'prefix' => 'admin',
    'middleware'=>'auth',
], function(){
    Route::resource('/posts','PostController');
    Route::resource('/niitlels','NiitlelController');
    Route::resource('/about','AboutController');
    Route::resource('/videos','VideoController');
});