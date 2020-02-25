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
    return view('handmade.cucitoditta.top');
});

Route::group(['prefix' => 'handmade'], function() {
    Route::get('cucitoditta/top', 'Handmade\CucitodittaController@add');
    Route::get('cucitoditta/gallery', 'Handmade\CucitodittaController@gallery');
    Route::get('cucitoditta/work', 'Handmade\CucitodittaController@work');
    Route::get('cucitoditta/shop', 'Handmade\CucitodittaController@shop');
    Route::get('cucitoditta/info', 'Handmade\CucitodittaController@info');
    Route::get('cucitoditta/infodone', 'Handmade\CucitodittaController@infodone');
});


Route::group(['prefix' => 'admin'], function() {
    Route::get('cucitoditta/top', 'Admin\EditController@top')->middleware('auth');
    Route::get('cucitoditta/topedit', 'Admin\EditController@topedit')->middleware('auth');
    Route::post('cucitoditta/topedit', 'Admin\EditController@topupdate')->middleware('auth');
    Route::get('cucitoditta/shopcreate', 'Admin\EditController@shop')->middleware('auth');
    Route::post('cucitoditta/shopcreate', 'Admin\EditController@shopcreate')->middleware('auth');
    Route::get('cucitoditta/shopindex', 'Admin\EditController@shopindex')->middleware('auth');
    Route::get('cucitoditta/shopedit', 'Admin\EditController@shopedit')->middleware('auth');
    Route::post('cucitoditta/shopedit', 'Admin\EditController@shopupdate')->middleware('auth');
    Route::get('cucitoditta/shopdelete', 'Admin\EditController@shopdelete')->middleware('auth');
    Route::get('cucitoditta/gallerycreate', 'Admin\EditController@gallery')->middleware('auth');
    Route::post('cucitoditta/gallerycreate', 'Admin\EditController@gallerycreate')->middleware('auth');
    Route::get('cucitoditta/galleryindex', 'Admin\EditController@galleryindex')->middleware('auth');
    Route::get('cucitoditta/galleryedit', 'Admin\EditController@galleryedit')->middleware('auth');
    Route::post('cucitoditta/galleryedit', 'Admin\EditController@galleryupdate')->middleware('auth');
    Route::get('cucitoditta/gallerydelete', 'Admin\EditController@gallerydelete')->middleware('auth');
    Route::get('cucitoditta/workcreate', 'Admin\EditController@work')->middleware('auth');
    Route::post('cucitoditta/workcreate', 'Admin\EditController@workcreate')->middleware('auth');
    Route::get('cucitoditta/workindex', 'Admin\EditController@workindex')->middleware('auth');
    Route::get('cucitoditta/workedit', 'Admin\EditController@workedit')->middleware('auth');
    Route::post('cucitoditta/workedit', 'Admin\EditController@workupdate')->middleware('auth');
    Route::get('cucitoditta/workdelete', 'Admin\EditController@workdelete')->middleware('auth');    

});


Route::get('/contact','ContactController@index')->name('contact.index');

Route::post('/contact/confirm','ContactController@confirm')->name('contact.confirm');

Route::post('/contact/thanks','ContactController@send')->name('contact.send');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
