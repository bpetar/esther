
{{-- This form is used for Creating and Editing item --}}



{{--Item Title--}}
{!! Form::label('title') !!}
{!! Form::text('title') !!}
<br>

{{--Item Description--}}
{!! Form::label('description') !!}
{!! Form::text('description') !!}
<br>

{{--Item Price--}}
{!! Form::label('price') !!}
{!! Form::text('price') !!}
<br>

{{--Item Image--}}
{!! Form::label('image') !!}
{!! Form::file('image') !!}
<br>


<button type="submit" >Submit</button>