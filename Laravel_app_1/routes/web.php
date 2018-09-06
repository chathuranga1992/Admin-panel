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
/* 
Route::get('/users/{id}/{name}', function ($id, $name) {
    return "This is User ".$name. " With an id of ".$id ;
});
Route::get('/about', function () {
    return view('pages.about');
}); 
*/
Route::get('/', 'PagesController@index');

Route::get('/about','PagesController@about');
Route::get('/service','PagesController@service');


Route::resource('posts','PostController');

//Route::resource('users','UsersController');
Route::group(['prefix'=>''], function(){
    Route::resource('users','UserManageController');
});



Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@admin')->middleware('is_admin')->name('admin');