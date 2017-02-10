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

Route::get('/', function () {
    return view('welcome');
	 
});
 
Auth::routes();

Route::get('/home', 'HomeController@index');
  Route::get('/article', 'ArticleController@index');
 Route::get('article/{id}', 'ArticleController@show');
 Route::post('comment', 'CommentController@store');

/*前台用户*/
Route::group(['middleware' => 'auth', 'namespace' => 'User', 'prefix' => 'user'], function() {  
    Route::get('/', 'UserController@index');
	  Route::get('article', 'ArticleController@index');
	  Route::resource('article', 'ArticleController');

});

Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function() {
Route::get('/', 'AdminController@index');
//评论管理
    Route::get('comment', 'CommentController@index');
    Route::resource('comment', 'CommentController');


    //    管理用户
    Route::get('user', 'UserController@index');
    Route::resource('user', 'UserController');
   
});

Route::group(['prefix' => 'admin','namespace' => 'Admin'],function ($router)
{
    $router->get('login', 'LoginController@showLoginForm')->name('admin.login');
    $router->post('login', 'LoginController@login');
    $router->post('logout', 'LoginController@logout');

    $router->get('dash', 'DashboardController@index');
	//    管理文章
    Route::get('article', 'ArticleController@index');
    Route::resource('article', 'ArticleController');
	//    分类管理
    Route::get('category', 'CategoryController@index');
    Route::resource('category', 'CategoryController');
});