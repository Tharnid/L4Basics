@extends('layouts.master')

@section('content')

<h1>All Contacts</h1>

<p>{{ HTML::link('createContacts', 'Add a new contact!!!') }}</p>

@if(isset($contacts))

<div class="container">
	
	<table class="table.table.table-striped.table-bordered.table-hover">
		<thead>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>State</th>
				<th>region</th>
			</tr>
		</thead>
		<tbody>
			@foreach($contacts as $c)
			<tr>
				<td>{{ $c->fname }}</td>
				<td>{{ $c->lname }}</td>
				<td>{{ $c->state }}</td>
				<td>{{ $c->region }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>	

</div>

@else
	There are no contacts!!!!
@endif

@stop