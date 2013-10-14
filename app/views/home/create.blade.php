@extends('layouts.master')

@section('content')

	
	<div class="container">
		<div class="span4 well">
			<legend>Add a user</legend>
			<br />
			{{ Form::open(array('url' => '/')) }}
			{{ Form::text('fname', '', array('placeholder' => 'First Name')) }}
			{{ Form::text('lname', '', array('placeholder' => 'Last Name')) }}
			<br />
			{{ Form::submit('Add Person!!!', array('class' => 'btn btn-primary')) }}
			{{ Form::close() }}	
		</div>
		
		<div class="span4 well">
			@if($errors->any())
				<ul>
					{{ implode('', $errors->all('<<li class="error">:message</li>')) }}
				</ul>
			@endif
		</div>

	</div>

@stop