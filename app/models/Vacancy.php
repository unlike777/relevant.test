<?php

class Vacancy extends Eloquent {
	
	protected $table = 'vacancys';
	
	public function validate($data, $behavior = 'default') {

		$rules = array(
			'title' => 'required|min:2',
			'text' => 'required|min:20',
			'active' => 'boolean',
			'email' => 'required|min:5|email',
		);

		return Validator::make($data, $rules);
		
	}

}
