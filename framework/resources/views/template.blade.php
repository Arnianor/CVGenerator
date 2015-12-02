<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		{!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') !!}
		{!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css') !!}
	
		{!! HTML::style('css/stylesheet.css') !!}

		<!--[if lt IE 9]>
			{{ Html::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') }}
			{{ Html::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
		<![endif]-->
		
		<!-- <link rel="stylesheet" href="../css/stylesheet.css"> -->
		@yield('head')
	</head>
	<body>
		<div class="col-sm-offset-3 col-sm-6 col-md-offset-2  col-md-8">
			@yield('content')
		</div>
	</body>
</html>