<?php

use \Illuminate\Support\Facades\Route;

Route::post('complete', 'CompleteController@complete')->name('complete');
Route::post('update', 'CompleteController@update')->name('update');