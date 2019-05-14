<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Whoozl</title>
		<link rel="stylesheet" href="css/app.css">
	</head>
	<body>
		@include('inc.navbar')
		<div class="wrapper">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					@include('inc.sidebar')
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					@yield('content')
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					@include('inc.sidebar')
				</div>
			</div>
		</div>
	</body>
</html>