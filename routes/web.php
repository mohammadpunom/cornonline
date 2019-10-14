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
    return view('welcome');
});

Route::get('/cornjob', function () {
    return 'corn pickers online';
});

// This is my first view calling (wish.blade.php file)
Route::get('/myfirstview', function(){
    return view('wish'); // wish is the name of my viewfile
});

// This is my second view calling from subfolder (second.blade.php file)
Route::get('/mysecondview', function(){
    return view('punomsubview.second'); // second is the name of subfolder based view file
});