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
    return view('home');
})->name('home');

Route::get('/students', function () {
    return view('students');
})->name('students');

Route::get('/homeworks', function () {
    return view('homeworks');
})->name('homeworks');

Route::get('/studentsfeedback', function () {
    return view('students_feedback');
})->name('students_feedback');

Route::get('/homeworksfeedback', function () {
    return view('homeworks_feedback');
})->name('homeworks_feedback');

Route::get('/coursefeedback', function () {
    return view('course_feedback');
})->name('course_feedback');
