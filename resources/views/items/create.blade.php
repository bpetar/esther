@extends('app')


@section('content')
	
	<h1> Create New Item </h1>

	{!! Form::open(array('url' => URL::to('/items'), 'method' => 'post', 'files' => true)) !!}

		@include('items.partials.form')

	{!! Form::close() !!}

@stop