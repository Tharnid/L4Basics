@extends('layouts.master')

@section('content')

	
	<div class="container">
		<div class="span4 well">
			<legend>Add a contact</legend>
			<br />
			{{ Form::open(array('url' => 'contacts')) }}
			{{ Form::text('fname', '', array('placeholder' => 'First Name')) }}
			{{ Form::text('lname', '', array('placeholder' => 'Last Name')) }}
			{{ Form::text('state', '', array('placeholder' => 'State')) }}
			{{ Form::text('region', '', array('placeholder' => 'Region')) }}
			<br />
			{{ Form::submit('Add Contact!!!', array('class' => 'btn btn-primary')) }}
			{{ Form::close() }}	
		</div>
		
		<div class="span4 well">
			@if($errors->any())
				<ul>
					{{ implode('', $errors->all('<<li class="text-error">:message  </li>'))}}
				</ul>
			@endif
		</div>

	</div>

@stop