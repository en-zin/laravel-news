<?php

use App\Http\Controllers\MainController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Models\Article;


use function PHPUnit\Framework\returnSelf;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//POST通信の練習
Route::get('add/post','PostsController@post');
Route::post('add/post', 'PostsController@result');

Route::get('/','MainController@main');
Route::post('/','MainController@result');

// 送られてきた'id'をパラメータとして使っている
Route::get('/details/{id}/', 'DetailsController@details');
Route::post('/details/{id}/', 'DetailsController@result');
