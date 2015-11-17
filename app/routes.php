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

Route::any('/', function()
{
	$items = Vacancy::where('active', '=', 1)->orderBy('created_at', 'desc');
	
	return View::make('pages.home', array('items' => $items));
});
