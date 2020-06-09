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

Route::get('/', function () {
    return view('Welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/loginme','loginController@login' );

Route::get('admin/', 'admin\PostController@index')->name('admin_home');
Route::group([
    'namespace' => 'admin', 
    'prefix' => 'admin'
], function(){
    Route::resource('/posts','PostController');
    Route::resource('/about','AboutController');
});
