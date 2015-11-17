<?php

class HomeController extends BaseController {

	public function def()
	{
		$items = Vacancy::where('active', '=', 1)->orderBy('created_at', 'desc');
		return View::make('pages.home', array('items' => $items));
	}
}
