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


Route::get('/about','AboutController@about');
Route::get('/article','ArticleController@article');


Route::get('/master','MasterController@master');
Route::get('/kuishome','kuishomeController@kuishome');
Route::get('/kuisabout','kuisaboutController@kuisabout');
Route::get('/kuisinfo','kuisinfoController@kuisinfo');
// Route::get('/all','kuisinfoController@kuisinfo');
// Route::get('/wisata','wisataController@wisata');
Route::get('/kuissejarah','kuissejarahController@kuissejarah');
Route::get('/kuisvisimisi','kuisvisimisiController@kuisvisimisi');
Route::get('/readmore','readmoreController@readmore');
Route::get('/kuismakanan','kuismakananController@kuismakanan');
Route::get('/kuiskontak','kuiskontakController@kuiskontak');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Route::post('/logout', 'HomeController@logout')->name('logout');




Route::get('/wisata', 'WisataController@index')->name('wisata');
Route::get('/wisata/add','WisataController@add');
Route::post('/wisata/create','WisataController@create');
Route::get('/wisata/edit/{id}','WisataController@edit')->name('edit');
Route::post('/update/{id}','WisataController@update');
Route::get('/delete/{id}','WisataController@delete');

// kontak
Route::get('/kontak', 'KontakController@kontak')->name('kontak');
Route::get('/kontak/add','KontakController@add');
Route::post('/kontak/create','KontakController@create');
Route::get('/parent/edit/{id}','KontakController@edit');
Route::post('/kontak/update/{id}','KontakController@update');
Route::get('/kontak/delete/{id}','KontakController@delete');


