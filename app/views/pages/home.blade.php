@extends('layouts.main')

@section('content')
	
	@if ($items->count())
		@foreach($items->get() as $item)
			<div class="item">
				<div class="item__title">{{ $item->title }}</div>
				<div class="item__email">Эл. почта: {{ $item->email }}</div>
				<div class="item__link"><a href="">узнать подробнее</a></div>
			</div>
		@endforeach
	@else 
		<h2>Ничего не найдено</h2>
	@endif
	
	
	
@stop
