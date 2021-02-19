<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login', 'AuthController@login');
Route::post('logout', 'AuthController@logout');
Route::get('getUser', 'AuthController@getUser');
Route::post('client/create', 'ClientController@store');
Route::post('diary/create', 'DiaryController@store');
Route::put('diary/update/{id}', 'DiaryController@update');
