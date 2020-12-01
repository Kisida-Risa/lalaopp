App\Http\Requests\StoreMember<?php

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



Auth::routes();

 Route::get('/top', function () {
    return view('top');
 });
 
 Route::get('/login', function () {
    return view('login_form');
 });

 Route::get('/sub', function () {
    return view('twosub');
 });

 Route::post('/login', 'TwinLoginController@login');
 Route::post('/logout', 'TwinLogoutController@logout');
 

Route::group(['middleware' => 'auth'], function() {
    Route::group(['prefix' => 'users'], function() {
        Route::get('edit/{id}', 'UsersController@getEdit')->name('users.edit');
        Route::post('edit/{id}', 'UsersController@postEdit')->name('users.postEdit');
    });
});

Route::group(['prefix'=>'member'], function () {
   Route::get('index', 'MemberController@index')->name('member.index');
   Route::get('create', 'MemberController@create')->name('member.create');
   Route::post('store', 'MemberController@store')->name('member.store');
   Route::get('show/{id}', 'MemberController@show')->name('member.show');
   Route::get('edit/{id}', 'MemberController@edit')->name('member.edit');
   Route::post('update/{id}', 'MemberController@update')->name('member.update');
   Route::post('destroy/{id}', 'MemberController@destroy')->name('member.destroy');
   Route::get('destroy/{id}', 'MemberController@destroy')->name('member.twodestroy');
   Route::get('search', 'MemberController@search')->name('member.search'); 
});


Route::group(['prefix'=>'bombs'], function () {
   Route::get('index', 'BombController@index')->name('bomb.index');
   Route::get('create', 'BombController@create')->name('bomb.create');
   Route::post('store', 'BombController@store')->name('bomb.store');
   Route::get('show/{id}', 'BombController@show')->name('bomb.show');
   Route::get('edit/{id}', 'BombController@edit')->name('bomb.edit');
   Route::post('update/{id}', 'BombController@update')->name('bomb.update');
   Route::post('destroy/{id}', 'BombController@destroy')->name('bomb.destroy');
   Route::get('search', 'BombController@search')->name('bomb.search'); 
});

