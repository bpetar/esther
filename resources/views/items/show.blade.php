@extends('app')


@section('content')
	
	<p> Selected item: {{$item->title}} </p>
	<p> Description: {{$item->description}} </p>

@stop