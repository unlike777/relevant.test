<?php

class VacanciesController extends BaseController {

	public function add()
	{
		if (!empty($_POST)) {
			$obj = new Vacancy();
			$data = Input::only(array('email', 'title', 'text'));
			
			$validation = $obj->validate($data);
			
			if ($validation->fails()) {
				return Redirect::refresh()
					->with('message', array('text' => $validation->errors()->first() ))
					->withInput($data);
			} else {
				
				$obj->fill($data);
				$obj->active = 1;
				$obj->save();
				
				return Redirect::refresh()
					->with('message', array('text' => 'Вакансия успешно добавлена'));
			}
		}
		
		return View::make('vacancies.form');
	}
	
	public function view($id)
	{
		$obj = Vacancy::findOrFail($id);
		return View::make('vacancies.view', array('item' => $obj));
	}
	
}
