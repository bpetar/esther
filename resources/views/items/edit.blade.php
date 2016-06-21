@extends('layouts.app')


@section('content')

	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit: {{$item->title}}</div>
                <div class="panel-body">

           

	{!! Form::model($item, array('url' => URL::to('/items/' . $item->id), 'class'=>'form-horizontal', 'method' => 'PUT', 'files' => true)) !!}

	@include('items.partials.form')

	{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>
@stop