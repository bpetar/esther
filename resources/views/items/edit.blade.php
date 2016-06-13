@extends('app')


@section('content')
	
	<h1> EDIT: {{$item->title}} </h1>

	{!! Form::model($item, array('url' => URL::to('/items/' . $item->id), 'method' => 'PUT')) !!}

	@include('items.partials.form')

	{!! Form::close() !!}


@stop