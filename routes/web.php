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


Route::get('login' ,['as'=>'login',function(){
    return view('login');
}]);

Route::get('logout', array('as'=>'createuser','uses'=>'LogoutController@logout')
);

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
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
Route::get('hackerthon-posts/{id}','HomeController@getPostsByHackerthonId');
Route::get('post/{id}', 'AdminController@getPostById');
Route::post('update-post/{id}', 'AdminController@updatePost');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
