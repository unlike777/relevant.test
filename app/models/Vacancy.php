<?php

class Vacancy extends Eloquent {
	
	protected $table = 'vacancys';
	protected $fillable = array('title', 'text', 'active', 'email');
	
	public function validate($data, $behavior = 'default') {

		$rules = array(
			'title' => 'required|min:2',
			'text' => 'required|min:20',
			'active' => 'boolean',
			'email' => 'required|min:5|email',
		);

		return Validator::make($data, $rules);
		
	}
	
	public static function boot()
	{
		parent::boot();
		
		self::created(function($obj) {
			
			Mail::send('emails.vac_to_user', array('obj' => $obj), function($message) use ($obj) {
				/**
				 * @var $message Swift_Mailer
				 */
				$message->to($obj->email, 'Пользователь')
					->from('admin@email.ru', '')
					->subject('Вакансия успешно размещена на сайте');
			});

			Mail::send('emails.vac_to_moder', array('obj' => $obj), function($message) use ($obj) {
				/**
				 * @var $message Swift_Mailer
				 */
				$message->to('admin@email.ru', 'Пользователь')
					->from($obj->email, '')
					->subject('Новая вакансия на сайте');
			});
			
		});
	}

}
