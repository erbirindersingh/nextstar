<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Whoozl</title>
		<link rel="stylesheet" href="css/app.css">
		<link rel="stylesheet" href="css/custom.css">
	</head>
	<body>
		@include('inc.navbar')
		<div class="wrapper">
			<div class="row">
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					@yield('content')
				</div>
				
			</div>
		</div>
		@include('inc.footer')
	</body>
</html>