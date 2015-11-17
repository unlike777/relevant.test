@extends('layouts.main')

@section('content')
	
	
	<div class="form">
		{{ Form::model($item) }}

		@if (Session::has('message'))
			<div class="form__notice">
				<b>{{ Session::get('message')['text'] }}</b>
			</div>
		@endif
		
		<div class="form__item">
			Заголовок:<br>
			{{ Form::text('title') }}
		</div>

		<div class="form__item">
			Эл. почта:<br>
			{{ Form::text('email') }}
		</div>

		<div class="form__item">
			Описание:<br>
			{{ Form::textarea('text') }}
		</div>

		<div class="form__item">
			<label>
				{{ Form::checkbox('active') }} активность<br>
			</label>
		</div>
		
		<div class="form__item">
			{{ Form::submit() }}
		</div>

		{{ Form::close() }}
	</div>

	<a href="{{ route('del', array('id' => $item->id)) }}">удалить</a>
	
	
	
	
@stop
