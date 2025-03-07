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
    return view('index');
});

Route::get('/new-canva', function () {
    return view('canvasForm');
});

Route::post('/UGCPDF', 'ControllerFiles@infos')->name('generateFiles');

Route::post('/editUGC', 'ControllerFiles@readJson')->name('readJsonFile');
