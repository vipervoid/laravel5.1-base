@extends('partials.main-header')
@section('content')

	<form action="" method="POST" class="">
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
		<div class="col-md-offset-4 col-md-4">	
			<h2>Login</h2>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="form-group">
						<label class="control-label">Username</label>
						<div class="input-group">
							<input type="text" name="username" class="form-control" value="" />
							<span class="input-group-addon">
								<i class="glyphicon glyphicon-user"></i>
							</span>
						</div>
						
					</div>
					<div class="form-group">
						<label class="control-label">Password</label>
						<div class="input-group">
							<input type="password" name="password" class="form-control" value="" />
							<span class="input-group-addon">
								<i class="glyphicon glyphicon-lock"></i>
							</span>
						</div>
						
					</div>	
				</div>
				<div class="panel-footer">
					<button class="btn btn-primary btn-sm btn-block">Login</button>
				</div>
			</div>
		</div>
	</form>
@stop