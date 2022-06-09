<?php



// ** Les categories
Route::get('/categories', 'App\controllers\CategorieController@index');
Route::get('/best-categories', 'App\controllers\CategorieController@bestCategories');

// ** Les produits
Route::get('/products', 'App\controllers\ProductController@index');
Route::get('/rich-products', 'App\controllers\ProductController@getRichProducts');
Route::get('/cheap-products', 'App\controllers\ProductController@getCheapProducts');
Route::get('/last-products', 'App\controllers\ProductController@getLastProducts');
Route::get('/get-product/{id}', 'App\controllers\ProductController@getProduct');
Route::post('/add-command', 'App\controllers\ProductController@addCommand');
Route::post('/add-product-command', 'App\controllers\ProductController@addProductCommand');
Route::get('/command-products/{id}', 'App\controllers\CommandController@getProductCommand');
Route::get('/destroy-command/{id}', 'App\controllers\CommandController@destroy');
Route::get('/categories-types', 'App\controllers\CategorieController@getCategoriesAndTypes');
Route::post('/add-produit', 'App\controllers\ProductController@addProduct');

// ** Les villes
Route::get('/cities', 'App\controllers\ProductController@getCities');

// ** detaills of search
Route::get('/search-detaills', 'App\controllers\CategorieController@getSearchDetaills');

// ** users
Route::post('/login', 'App\controllers\UserController@login');
Route::get('/info-users/{id}', 'App\controllers\UserController@index');
Route::post('/register', 'App\controllers\UserController@store');
Route::post('/update-user/{id}', 'App\controllers\UserController@update'); 
Route::post('/get-password/{id}', 'App\controllers\UserController@getPassword'); 
Route::post('/update-password/{id}', 'App\controllers\UserController@updatePassword'); 





