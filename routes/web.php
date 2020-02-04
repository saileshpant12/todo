<?php

// https://bbbootstrap.com/snippets/todo-task-list-badges-71324362

Route::get('/', function () {
	return view('todo.index');
});

Route::get('create', function () {

	return view('todo.create');
});

Route::get('edit', function () {

	return view('todo.edit');
});