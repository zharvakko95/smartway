<?php
Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/register', 'RegistrationController@create')->name('register');

Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionController@create')->name('login');

Route::post('/login', 'SessionController@store');

Route::get('/logout', 'SessionController@destroy');

Route::get('/module/1', function (){
    return view('m1.list');
})->name('m1');

Route::get('/module/1/show', function (){
    return view('m1.show');
})->name('s1');

Route::get('/module/1/register', function (){
    return view('m1.register');
})->name('r1');