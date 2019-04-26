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


Route::get('open-the-book-of-life' ,['as'=>'login',function(){
    return view('auth\login');
}]);

Route::get('logout', array('as'=>'createuser','uses'=>'LogoutController@logout')
);

Route::get('/', 'HomeController@index');
Route::get('preface', 'HomeController@index');
Route::post('create-post', 'AdminController@createPost');

Route::get('hckr-admin', 'AdminController@getAdminData');

Route::get('register', function(){
    return view('register');
});

Route::post('createuser',array('as'=>'createuser','uses'=>'Auth\RegisterController@create')
);

Route::post('create-hackerthon', 'AdminController@createHackerthon');
Route::post('create-category', 'AdminController@createCategory');
Route::post('upload_friola_image/','AdminController@upload_friola_image');
Route::get('category/{id}','AdminController@getCategoryById');
Route::get('categories','AdminController@getCategories');
Route::get('hackerthons','AdminController@getHackerthons');
Route::get('posts','AdminController@getPosts');
Route::get('hackerthon-posts/{id}','HomeController@getPostsByHackerthonId');
Route::get('post/{id}', 'AdminController@getPostById');
Route::post('update-post/{id}', 'AdminController@updatePost');
Route::get('chapter/{hackerthon}/{post_title_slug}',
    array('as'=>'chapter','uses'=>'HomeController@getPostBySlug'));
Route::get('/autocomplete/{searchval}','HomeController@autoComplete');
Auth::routes();

Route::get('/preface', 'HomeController@index')->name('home');

