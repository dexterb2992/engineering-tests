@extends('layouts.default')


@section('content')
	<p>Welcome {{$user->name}}</p>
	<p>Please provide some information to continue...</p>
	{{ Form::open( array('action' => 'OffersController@find') ) }}
		<div class="form-group">
			{{ Form::label('budget', 'How much is your budget?') }}
			{{ Form::text('budget', '', ['required' => 'required' ]) }}
		</div>
		<div class="form-group">
			{{ Form::label('location', 'Can you specify the location?') }}
			{{ Form::text('location', '') }}
		</div>
		<div class="form-group">
			{{ Form::label('guests', 'How many are with you? So that we can find the restaurants that can actually serve all of you.') }}
			{{ Form::text('guests', '') }}
		</div>
		<div class="form-group">
			{{ Form::label('time', 'What time would you like to take your meal?') }}
			{{ Form::text('time', '', [ 'class'=>'timepicker', 'required' => 'required' ]) }}
		</div>
		<div class="form-group">
			{{ Form::label('cuisine', 'What cuisine would you like?') }}
			{{ Form::text('cuisine', '', ['placeholder'=>'optional']) }}
		</div>
		<div class="form-group">
			{{ Form::submit('Submit') }}
		</div>
	{{ Form::close() }}
@stop