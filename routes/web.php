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
// Route LandingPage
Route::get('/', function () {
    return view('home');
});
// Route Login
Route::get('/login1','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

// Route userprofile
Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard','DashboardController@dashboard');
    Route::get('/userprofile','UserProfileController@userprofile');
    Route::post('/userprofile/create','UserProfileController@create');
    Route::get('/userprofile/{id}/edit','UserProfileController@edit');
    Route::post('/userprofile/{id}/update','UserProfileController@update');
    Route::get('/userprofile/{id}/delete','UserProfileController@delete');
});

// Route data mahasiswa
Route::get('/datamahasiswa','MahasiswaController@datamahasiswa');
        