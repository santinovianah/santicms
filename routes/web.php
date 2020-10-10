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

// // Route::get('/master','MasterController@master');
// Route::get('/parent','MasterController@parent');
// Route::get('/home','HomeController@home');
// // Route::get('/about','AboutController@about');
// Route::get('/article','ArticleController@article');
// Route::get('/all','HomeController@getAll');
// Route::get('/find/{id}','ArticleController@getById');

// Route::get('/kuismaster','kuismasterController@kuismaster');
Route::get('/kuishome','kuishomeController@kuishome');
// Route::get('/kuisabout','kuisaboutController@kuisabout');
// Route::get('/kuisinfo','kuisinfoController@kuisinfo');
// Route::get('/all','kuisinfoController@kuisinfo');
// Route::get('/kuiswisata','kuiswisataController@kuiswisata');
// Route::get('/kuissejarah','kuissejarahController@kuissejarah');
// Route::get('/kuisvisimisi','kuisvisimisiController@kuisvisimisi');
// Route::get('/readmore','readmoreController@readmore');
// Route::get('/kuismakanan','kuismakananController@kuismakanan');
// Route::get('/kuiskontak','kuiskontakController@kuiskontak');
// Route::get('/kuiskontak', 'PostController@kuiskontak');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
