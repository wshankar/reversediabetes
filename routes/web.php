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
Route::get('/', function(){
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/rec', 'DailyRecordController');
Route::resource('/inv', 'InvestigationController');
Route::resource('/med', 'MedicationController');
Route::resource('/profile', 'ProfileController');
Route::resource('/doctor', 'DoctorCommentController');
Route::get('/promise', 'UserPromiseController@createPromise')->name('promise.create');
Route::post('/promise', 'UserPromiseController@storePromise')->name('promise.store');
Route::get('/feedback', 'UserFeedBackController@createFeedback')->name('feedback.create');
Route::post('/feedback', 'UserFeedBackController@storeFeedback')->name('feedback.store');


Auth::routes();

