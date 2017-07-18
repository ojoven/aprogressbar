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

Route::get('/', 'IndexController@index');
Route::get('/{language?}', 'IndexController@index')->where(['language' => '[a-z][a-z]']);

Route::get('/api/getcards', 'ApiController@getcards');
Route::get('/api/getcardsuser', 'ApiController@getcardsuser');
Route::get('/api/getcardsbyids', 'ApiController@getcardsbyids');
Route::post('/api/createuser', 'ApiController@createuser');
Route::post('/api/rate', 'ApiController@rate');
Route::get('/api/getratings', 'ApiController@getratings');

Route::get('/resume/single', 'ResumeController@single');
Route::get('/resume/resume', 'ResumeController@resume');

// TMP routes
Route::get('/playground', 'IndexController@playground');
Route::get('/scraper', 'IndexController@scraper');
