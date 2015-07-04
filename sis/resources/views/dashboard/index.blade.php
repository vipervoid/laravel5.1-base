@extends('partials/main-header')

@section('breadcrumb')
	<ol class="breadcrumb">
		<li class="active"><i class="glyphicon glyphicon-home"></i></li>
	</ol>
@stop

@section('content')
	<div class="text-center"><h3>{{ Inspiring::quote() }}</h3></div>
@stop