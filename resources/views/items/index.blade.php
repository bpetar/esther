@extends('app')


@section('content')
	
	<h1> All items </h1>

	<p><a href="/items/create"> [Add New Item] </a></p>
	<br>

	@foreach ($items as $item)

	<p>Title: <a href="/items/{{$item->id}}">{{$item->title}} [${{$item->price}}]</a></p>
	<p>Description: {{$item->description}}</p>
	<p>
		
		{{ Form::open(array('url' => URL::to('/items/' . $item->id . '/edit'), 'method' => 'GET', 'style'=>'display:inline-block')) }}
        <button type="submit" >Edit</button>
    	{{ Form::close() }}

    	{{ Form::open(array('url' => URL::to('/items/' . $item->id), 'method' => 'DELETE', 'style'=>'display:inline-block')) }}
        <button type="submit" >Delete</button>
    	{{ Form::close() }}


	</p>
	<br>

	@endforeach

@stop