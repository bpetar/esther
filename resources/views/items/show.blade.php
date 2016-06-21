@extends('layouts.app')


@section('content')
	
	<p> <a href="/items"><-Back</a></p>
	<p> Selected item: {{$item->title}} </p>
	<p> Description: {{$item->description}} </p>
	<p><img src="/{{$item->image}}" width="600px" alt="ASD"></p>
@stop