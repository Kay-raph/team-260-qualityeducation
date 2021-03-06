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
Route::get('login','project@login');
Route::get('signup','project@signup');
Route::get('/','project@index');
Route::get('/home','project@index');
Route::any('signin','project@signin');
Route::any('userlogin','project@userlogin');
Route::any('course','project@course');
Route::any('/courses','project@courses');
Route::any('morecourses','project@morecourses');
Route::any('jobs','project@jobs');
Route::any('enrol','project@enrol');
Route::any('addjob','project@addjob');
Route::any('jobss','project@jobss');