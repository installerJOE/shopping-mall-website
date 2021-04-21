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
//Route to the home (index) page
Route::get('/', 'App\Http\Controllers\PagesController@index');

/*
Without the use of controllers this can be done
// Route::get('/library', function () {
//     return view('pages/library');
// });

*/

//Route to the product catalog page
Route::get('/catalog', 'App\Http\Controllers\PagesController@catalog');
Route::get('/user', 'App\Http\Controllers\PagesController@user');
Route::get('/about-us', 'App\Http\Controllers\PagesController@about');

Route::resource('/product','App\Http\Controllers\ProductsController');

Route::resource('/categories', 'App\Http\Controllers\CategoriesController');

Route::resource('/brands', 'App\Http\Controllers\BrandsController');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

Auth::routes();

Route::resource('/upload-image', 'App\Http\Controllers\ImageUploadsController');

// enable email verification
// Auth::routes(['verify' => true]);

// Route::get('/login', 'App\Http\Controllers\Auth\LoginController@index')->name('login');

// Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@index')->name('register');
