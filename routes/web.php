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
    return view('jobFinder.dashboard');
})->name('/');
Route::get('/test','jobController@index');

Route::get('about','jobController@about')->name('about');
Route::get('contact','jobController@contact')->name('contact');


Route::get('want-job','jobController@jobForm')->name('jobs');

Route::post('want-job','jobController@getJobs')->name('want.job');

Route::get('post-job','jobController@postForm')->name('post-job');
