@extends('partials.main-header')

@section('breadcrumb')
	<ol class="breadcrumb">
		<li><a href="/"><i class="glyphicon glyphicon-home"></i></a></li>
		<li class="active">Expenses</li>
	</ol>
@stop

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			<strong class="pull-left">
				<h4>Manage Expenses</h4>
			</strong>
			<span class="pull-right">
				<a href="/expenses/add" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Create New Expense Report</a>
			</span>
			<div class="clearfix"></div>
		</div>
		<div class="panel-body table-responsive">
			<table class="table table-condensed table-hover table-striped" width="100%">
				<thead>
					<tr>
						<th>Report Name</th>
						<th>Date Started</th>
						<th>Date Ended</th>
					</tr>
				</thead>
			
			</table>

		</div>
	</div>
@stop