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

Route::get('/public', function () {
    return view('dashboard.home');
});

Route::get('api/doc/api-title-here', function ($id) {
    return view('dashboard.documentation');
});