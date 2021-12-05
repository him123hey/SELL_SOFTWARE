<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin route
Route::get('/admin_login', function () {
    return view('admin/admin_login');
});

// Product route
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product');
// Prefex route 
// Route::prefix('products')->group(function () {
//     Route::get('new', 'ProductController@newArrival');
//     Route::middleware('staff:dashboard/login')->group(function () {
//         Route::get('create', 'ProductController@create');
//         Route::post('create', 'ProductController@store');
//         Route::get('{id}/edit', 'ProductController@edit');
//         Route::patch('{id}/edit', 'ProductController@update');
//         Route::delete('{id}', 'ProductController@destroy');
//     });
//     Route::get('{product}', 'ProductController@index');
//     Route::get('{id}/details/{attr1Id?}/{attr2Id?}', 'ProductController@show');
// });
