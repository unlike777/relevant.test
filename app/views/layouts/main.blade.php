<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">

		<link type="text/css" rel="stylesheet" href="/css_js/style.css">
	</head>
	<body>

		<div class="header">
			<div class="site__name">
				<a href="{{ route('home') }}">Биржа труда</a>
			</div>
			
			<div class="add"><a href="{{ route('add') }}">Добавить вакансию</a></div>
		</div>
	
		@yield('content')
		
	</body>
</html>
