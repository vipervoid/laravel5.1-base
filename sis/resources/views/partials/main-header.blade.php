<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SIS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">

	<script type="text/javascript" src="/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	
</head>
<body>
@if (Auth::check())
	@include('partials.navigation')
	@yield('breadcrumb')
@endif

<div class="container-fluid">
	@if (session('systemErrorMsg'))
	    <div class="alert alert-danger">
	        {{ session('systemErrorMsg') }}
	    </div>
	@endif
	@if (session('systemInfoMsg'))
		<div class="alert alert-success">
			{{ session('systemInfoMsg') }}
		</div>
	@endif
	@yield('content')	
</div>

</body>
</html>