@extends('layouts.main')

@section('content')
	
	@if ($items->count())
		@foreach($items->get() as $item)
			<div class="item">
				<div class="item__title"><b>{{ $item->title }}</b></div>
				<div class="item__email">Эл. почта: {{ $item->email }}</div>
				<div class="item__link">
					<a href="{{ route('view', array('id' => $item->id)) }}">узнать подробнее</a>
					<a href="{{ route('moder', array('id' => $item->id)) }}">модерация</a>
				</div>
			</div>
		@endforeach
	@else 
		<h2>Ничего не найдено</h2>
	@endif
	
	
	
@stop
