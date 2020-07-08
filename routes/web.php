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
    return view('gigs.dashboard');
});

Route::get('/gigs', 'GigController@index')->name('Gigs');

Route::get('/gigs/create', 'GigController@create');

Route::post('/add-gig', 'GigController@createGig')->name('AddGig');

Route::put('/updat-gig', 'GigController@updateGig')->name('UpdateGig');

Route::delete('/delete-gig', 'GigController@deleteGig')->name('DeleteGig');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
