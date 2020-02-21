<?php

Route::get('/', ['uses' => 'HomeController@index'])
    ->name('home.index');

Route::get('/dashboard', ['uses' => 'DashboardController@index'])
    ->name('dashboard.index');

Route::get('/events', ['uses' => 'EventController@index'])
    ->name('events.index');
Route::get('/events/create', ['uses' => 'EventController@create'])
    ->name('events.create');
Route::post('/events/create', ['uses' => 'EventController@store'])
    ->name('events.store');

Auth::routes();
