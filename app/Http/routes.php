<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/features', function () {
    return view('features');
});

Route::get('/download-demo', function () {
    return view('download-demo');
});

Route::get('downloads', 'DownloadsController@index');
Route::get('downloads/latest', 'DownloadsController@showLatest');
Route::get('downloads/latest/{identifier}', 'DownloadsController@showLatest');
Route::get('downloads/{identifier}/latest', 'DownloadsController@showLatest');
Route::get('downloads/{gitBranch}/{gitHashShort}', 'DownloadsController@show');

Route::get('content', 'ContentController@index');
Route::get('content/cat/{category}', 'ContentController@category');
