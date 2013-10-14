@extends('layouts.master')

@section('content')

<h1>All Users</h1>

<p>{{ HTML::link('create', 'Add a new user!!!') }}</p>

@if(isset($users))

<div class="container">
	
	<table class="table.table.table-striped.table-bordered.table-hover">
		<thead>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $u)
			<tr>
				<td>{{ $u->fname }}</td>
				<td>{{ $u->lname }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>	

</div>

@else
	There are no users!!!!
@endif

@stop