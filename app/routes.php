<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::any('/', array('as' => 'home', 'uses' => 'HomeController@def'));
Route::any('/add', array('as' => 'add', 'uses' => 'VacanciesController@add'));
Route::any('/view/{id}', array('as' => 'view', 'uses' => 'VacanciesController@view'));
Route::any('/moder/{id}', array('as' => 'moder', 'uses' => 'VacanciesController@moder'));
Route::any('/del/{id}', array('as' => 'del', 'uses' => 'VacanciesController@del'));

