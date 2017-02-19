<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    /*return view('welcome')
    		->with('name', 'David');*/

    $tasks = [
    	'Botar la basura',
    	'Copiar mis fotos en el disco',
    	'mandar disco para cuba',
    	'entender git cracken',

    ];
    return view('welcome')
    		->with('name', 'David')
    		->with('tasks', $tasks);
    		

});
