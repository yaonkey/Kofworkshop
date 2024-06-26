<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/products/{id}', function (string $id) {
    return view('one_product');
})->where('id', '[0-9]+')->whereNumber('id');

Route::get('/schemas', function () {
    return view('schemas');
});

Route::get('/schemas/{id}', function (string $id) {
    return view('one_schema');
})->where('id', '[0-9]+')->whereNumber('id');

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/categories/{category}', function (string $category) {
    return view('one_category');
})->whereAlphaNumeric('category');
