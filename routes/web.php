<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function(){

    Route::get('/dashboard','Dashboard\DashboardController@index')->name('dashboard');

    //Movies
    Route::get('/dashboard/movies','Dashboard\MovieController@index')->name('dashboard.movies');
    Route::get('/dashboard/movies/create','Dashboard\MovieController@create')->name('dashboard.movies.create');
    Route::get('/dashboard/movies/{movie}','Dashboard\MovieController@edit')->name('dashboard.movies.edit');
    Route::put('/dashboard/movies/{movie}','Dashboard\MovieController@update')->name('dashboard.movies.update');
    Route::post('/dashboard/movies','Dashboard\MovieController@store')->name('dashboard.movies.store');
    Route::delete('/dashboard/movies/{movie}','Dashboard\MovieController@destroy')->name('dashboard.movies.delete');

    //Theaters
    Route::get('/dashboard/theaters','Dashboard\TheaterController@index')->name('dashboard.theaters');
    Route::get('/dashboard/theaters/create','Dashboard\TheaterController@create')->name('dashboard.theaters.create');
    Route::get('/dashboard/theaters/{theater}','Dashboard\TheaterController@edit')->name('dashboard.theaters.edit');
    Route::put('/dashboard/theaters/{theater}','Dashboard\TheaterController@update')->name('dashboard.theaters.update');
    Route::post('/dashboard/theaters','Dashboard\TheaterController@store')->name('dashboard.movies.store');
    Route::delete('/dashboard/theaters/{theater}','Dashboard\TheaterController@destroy')->name('dashboard.theaters.delete');


    Route::get('/dashboard/theaters','Dashboard\TheaterController@index')->name('dashboard.theaters');
    Route::get('/dashboard/tickets','Dashboard\TicketController@index')->name('dashboard.tickets');

    //Users
    Route::get('/dashboard/users','Dashboard\UserController@index')->name('dashboard.users');
    Route::get('/dashboard/users/{id}','Dashboard\UserController@edit')->name('dashboard.users.edit');
    Route::post('/dashboard/users/{id}','Dashboard\UserController@update')->name('dashboard.users.update');
    Route::delete('/dashboard/users/{id}','Dashboard\UserController@destroy')->name('dashboard.users.delete');
});
