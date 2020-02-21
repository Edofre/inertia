<?php

Route::get('/', ['uses' => 'HomeController@index'])
    ->name('home.index');

Route::get('/dashboard', ['uses' => 'DashboardController@index'])
    ->name('dashboard.index');

// TODO, same as a Resource Controller, but let's leave it like this for now
Route::get('/events', ['uses' => 'EventController@index'])
    ->name('events.index');
Route::get('/events/create', ['uses' => 'EventController@create'])
    ->name('events.create');
Route::post('/events', ['uses' => 'EventController@store'])
    ->name('events.store');
Route::get('/events/{event}', ['uses' => 'EventController@show'])
    ->name('events.show');
Route::get('/events/{event}/edit', ['uses' => 'EventController@edit'])
    ->name('events.edit');
Route::put('/events/{event}/edit', ['uses' => 'EventController@update'])
    ->name('events.update');
Route::delete('/events/{event}', ['uses' => 'EventController@destroy'])
    ->name('events.destroy');

Auth::routes();
