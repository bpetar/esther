@extends('layouts.app')


@section('content')
	
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create New Item</div>
                <div class="panel-body">

              

	{!! Form::open(array('url' => URL::to('/items'), 'method' => 'post', 'class'=>'form-horizontal', 'files' => true)) !!}

		@include('items.partials.form')

	{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>

@stop