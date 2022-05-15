<?php

 Route::get('/', 'App\controllers\HomeController@index');
 Route::get('/home/show/{id}', 'App\controllers\HomeController@show');
 Route::post('/home/create', 'App\controllers\HomeController@store');


