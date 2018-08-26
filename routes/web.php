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

Route::get('login' ,['as'=>'login',function(){
    return view('login');
}]);

Route::get('home', 'HomeController@home');
Route::post('create-post', 'AdminController@createPost');

Route::get('admin', 'AdminController@getAdminData');

Route::get('register', function(){
    return view('register');
});

Route::post('createuser',array('as'=>'createuser','uses'=>'Auth\RegisterController@create')
);

Route::post('create-hackerthon', 'AdminController@createHackerthon');
Route::post('create-category', 'AdminController@createCategory');
Route::get('category/{id}','AdminController@getCategoryById');
Route::get('categories','AdminController@getCategories');
Route::get('hackerthons','AdminController@getHackerthons');
Route::get('posts','AdminController@getPosts');

