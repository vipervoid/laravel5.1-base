@extends('partials.main-header')

@section('breadcrumb')
	<ol class="breadcrumb">
		<li><a href="/"><i class="glyphicon glyphicon-home"></i></a></li>
		<li class="active">Manage Users</li>
	</ol>
@stop

@section('content')
	
	<div class="panel panel-default">
		<div class="panel-heading">
			<strong><h4 class="pull-left">Manage Users</h4></strong>
			<span class="pull-right">
				<a href="/users/add" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Add new user</a>
			</span>
			<div class="clearfix"></div>
		</div>
		<div class="panel-body">
			<table class="table table-condensed table-hover table-striped" width="100%">
				<thead>
					<tr>
						<th>Username</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>&nbsp;</th>
					</tr>
				</thead>
				<tbody>
					@if (count($users))
						@foreach ($users as $sUser) 
							<tr>
								<td>{{ $sUser->username }}</td>
								<td>{{ $sUser->first_name }}</td>
								<td>{{ $sUser->last_name }}</td>
								<td>{{ $sUser->email }}</td>
								<td><a href="/users/edit/{{ $sUser->id }}" class="btn btn-sm btn-default">Edit</a></td>
							</tr>
						@endforeach
					@else 
						<tr><td colspan="100%"><strong>No records to show.</strong></td></tr>
					@endif
				</tbody>
			</table>		

		</div>
	</div>
	
@stop