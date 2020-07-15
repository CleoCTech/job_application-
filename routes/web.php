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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home');
Route::get('edu', 'HomeController@education')->name('edu');
//Route::post('/about', 'PagesController@about')->name('about');areas-of-interests
Route::resource('posts', 'PostsController');
Route::post('work', 'PostsController@storeWokrInfo');
Route::post('interests', 'PostsController@interests');
Route::post('referees', 'PostsController@referees');
Route::post('resume', 'PostsController@resume');
Route::post('thanksmessage', 'PostsController@thanksmessage');
Route::get('/education', 'PagesController@education')->name('education-info');
Route::get('/work-expereience', 'PagesController@work');
Route::get('/areas-of-interests', 'PagesController@interests');
Route::get('/referees', 'PagesController@referees');
Route::get('/ulpoad-resume', 'PagesController@resume');
Route::get('/submit-application', 'PagesController@thanksmsg');