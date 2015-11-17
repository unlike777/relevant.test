@extends('layouts.main')

@section('content')
	
	<h1 class="vac__title">{{ $item->title }}</h1>
	
	<div class="vac__email">Эл. почта: {{ $item->email }}</div>
	
	<h3>Описание</h3>
	
	<div class="vac__text">
		{{ $item->text }}
	</div>
	
	<a href="{{ route('moder', array('id' => $item->id)) }}">модерация</a>
	<a href="{{ route('del', array('id' => $item->id)) }}">удаление</a>
	
@stop
