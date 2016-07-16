<?php
use Illuminate\Http\Request;

Route::group(['prefix'=> 'main', 'namespace' => 'App\Modules\Tasks\Controllers'], function() {
    Route::get('/task', 'TaskController@Index');
    Route::post('/task', 'TaskController@Store');
});
