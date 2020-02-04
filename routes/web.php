<?php

// https://bbbootstrap.com/snippets/todo-task-list-badges-71324362

Route::get('/', 'TodoController@index');
Route::get('todo/create', 'TodoController@create');
Route::post('todo', 'TodoController@store');
Route::get('todo/{id}/edit', 'TodoController@edit');
Route::put('todo/{id}', 'TodoController@update');
Route::delete('todo/{id}', 'TodoController@destroy');
Route::post('todo/complete/{id}', 'TodoController@complete');
