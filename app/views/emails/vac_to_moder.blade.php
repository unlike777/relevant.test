<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>
			На сайте была размещена новая вакансия: {{ $obj->title }}
		</h2>
	
		Модерация вакансии <a href="{{ route('moder', array('id' => $obj->id)) }}"></a>
	</body>
</html>
