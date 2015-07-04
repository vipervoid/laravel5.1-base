@extends('partials.main-header')

@section('breadcrumb')
	<ol class="breadcrumb">
		<li><a href="/"><i class="glyphicon glyphicon-home"></i></a></li>
		<li><a href="/users">Manage Users</a></li>
		<li class="active">Add new user</li>
	</ol>
@stop

@section('content')
	
	<form action="" method="post" class="form-horizontal col-sm-offset-3 col-sm-6">
		{!!  csrf_field() !!}
		@if (count($errors) > 0)
		    <div class="alert alert-danger">
		    	<i class="glyphicon glyphicon-warning-sign"></i> <strong>The following error(s) were found:</strong>
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		<div class="panel panel-default">
			<div class="panel-heading">
				<strong><h4>Add new user</h4></strong>
			</div>
			<div class="clearfix"></div>
			<div class="panel-body">
				<div class="form-group">
					<label for="" class="control-label col-sm-3">First Name</label>
					<div class="col-sm-9">
						<input type="text" class="form-control input-sm" name="first_name" value="{{ !empty(old()) ? old('first_name') : $user->first_name }}" />
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-3">Last Name</label>
					<div class="col-sm-9">
						<input type="text" class="form-control input-sm" name="last_name" value="{{ !empty(old()) ? old('last_name') : $user->last_name }}" />
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-3">Email</label>
					<div class="col-sm-9">
						<input type="text" class="form-control input-sm" name="email" value="{{ !empty(old()) ? old('email') : $user->email }}" />
					</div>
				</div>
				<hr />
				<div class="form-group">
					<label for="" class="control-label col-sm-3">Username</label>
					<div class="col-sm-9">
						<input type="text" class="form-control input-sm" name="username" value="{{ !empty(old()) ? old('username') : $user->username }}" />
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-3">Password</label>
					<div class="col-sm-9">
						<input type="password" class="form-control input-sm" name="password" value="" />
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-3">Re-type Password</label>
					<div class="col-sm-9">
						<input type="password" class="form-control input-sm" name="confirm_password" value="">
					</div>
				</div>
			</div>
			<div class="panel-footer">
				<button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-floppy-disk"></i> Save</button>
			</div>
		</div>
	</form>
@stop