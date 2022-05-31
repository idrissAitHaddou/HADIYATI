<?php



// ** Les categories
Route::get('/categories', 'App\controllers\CategorieController@index');
Route::get('/best-categories', 'App\controllers\CategorieController@bestCategories');

// ** Les produits
Route::get('/products', 'App\controllers\ProductController@index');
Route::get('/rich-products', 'App\controllers\ProductController@getRichProducts');
Route::get('/cheap-products', 'App\controllers\ProductController@getCheapProducts');
Route::get('/last-products', 'App\controllers\ProductController@getLastProducts');

// ** Les villes
Route::get('/cities', 'App\controllers\ProductController@getCities');

// ** detaills of search
Route::get('/search-detaills', 'App\controllers\CategorieController@getSearchDetaills');




