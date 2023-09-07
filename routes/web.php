<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

//Basic Routing
Route::get('/products', function () {
    return view('test');
});

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/index', 'TestController@index');
    Route::get('/user/{id}', 'TestController@user');

});

Route::get('/products/{productId}/type/{typeId}', function (string $productId, string $typeId) {
    return 'Product ' . $productId . ', ' . 'type product ' . $typeId;
});

Route::get('/post/{post}', function (Post $post) {
})->name('post.show');

Route::fallback(function () {
    return 'NOT FOUND';
});
