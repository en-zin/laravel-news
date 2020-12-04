<?php

use Illuminate\Support\Facades\Redirect;
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
    return view('welcome');
});

Route::get('/archives/',function() {
    return view('archives');
});

Route::get('/archives/{category}/',function($category) {
    return view('category', ['category' => $category]);
});

// Route::post('/join/',function() {
//     return 'おけ';
// });

// Route::get('/join/',function() {
//     return Redirect() -> to('/');
// });

// Route::get('/{id}/',function($id) {
//     return $id. 'ページ';
// });
