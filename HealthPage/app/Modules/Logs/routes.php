<?php
use Illuminate\Http\Request;

Route::group(['prefix'=> 'home', 'namespace' => 'App\Modules\Logs\Controllers'], function() {
    Route::get('/logs', 'LogsController@Index');
    Route::post('/logs', 'LogsController@Store');
});