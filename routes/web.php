<?php

Route::get('/', ['uses' => 'HomeController@index'])
    ->name('home.index');

Route::get('/dashboard', ['uses' => 'DashboardController@index'])
    ->name('dashboard.index');
Route::get('/events', ['uses' => 'EventController@index'])
    ->name('events.index');

Auth::routes();
