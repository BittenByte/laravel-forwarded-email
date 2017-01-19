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
Route::group([
    'middleware' => 'web',
    'namespace' => 'BittenByte\LaravelForwardedEmail\Http\Controllers',
], function ($router) {
    Route::post('/callbacks/mailgun/forward', [
        'as' => 'handler.process-posted-email',
        'uses' => 'Handlers\PostController@processPostedEmail',
    ]);
});
