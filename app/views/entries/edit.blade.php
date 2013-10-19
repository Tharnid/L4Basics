@extends('layouts.scaffold')

@section('main')

<h1>Edit Entry</h1>
{{ Form::model($entry, array('method' => 'PATCH', 'route' => array('entries.update', $entry->id))) }}
	<ul>
        <li>
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('entries.show', 'Cancel', $entry->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
