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


// laravel-newsここから
// Route::get('/', 'LoginController@index')->name('Login_route');
// Route::post('/', 'LoginController@create')->name('Login_route');

Route::get('/', 'MainController@index')->name('main_route');
Route::post('/', 'MainController@create');
Route::get('/edit/{id}/', 'EditControler@index')->name('edit_route');
Route::post('/edit/{id}/', 'EditControler@update');

// 送られてきた'id'をパラメータとして使っている
//明細ページに遷移する
Route::get('/details/{id}/', 'DetailsController@index')->name('details_route');
//明細ページからpost通信されたら起動する
Route::post('/details/{id}/', 'DetailsController@create');
// 消去ボタンが押されたら通るルート
Route::delete('/details/{id}/', 'DetailsController@destroy');
