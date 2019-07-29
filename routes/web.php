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
    //return view('welcome');
    if(Auth::user()){
        return redirect(route('home'));
    }else{
        return view('telaLogin');
    }
});

Auth::routes();

Route::get('/home', 'HomeClienteController@index')->name('home');
