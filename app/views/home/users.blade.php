@extends('layouts.master')

@section('content')

	
	<div class="welcome">


			{{ Form::open(array('url' => 'users')) }}
			{{ Form::text('fname', '', array('placeholder' => 'First Name')) }}
			{{ Form::text('lname', '', array('placeholder' => 'Last Name')) }}
			<br />
			{{ Form::submit('Add Person!!!', array('class' => 'btn btn-primary')) }}
			{{ Form::close() }}	

	</div>

@stop