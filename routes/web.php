<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/add-form');
})->name('main');

Route::post('/', 'App\Http\Controllers\FormController@submit')->name('form');

Route::get('/price-list', 'App\Http\Controllers\FormController@viewItems')->name('price-list');

Route::get('/price-list/{idItem}', 'App\Http\Controllers\FormController@showItem')->name('info-about-item');

Route::get('/price-list/{idItem}/update', 'App\Http\Controllers\FormController@updateItem')->name('update-item');

Route::post('/price-list/{idItem}/update', 'App\Http\Controllers\FormController@updateItemSubmit')->name('update-item-submit');

Route::get('/price-list/{idItem}/delete', 'App\Http\Controllers\FormController@deleteItem')->name('delete-item');