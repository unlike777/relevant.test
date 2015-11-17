<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>
			Ваша вакансия успешно размещена на сайте и ожидает модерации
		</h2>
		
		<div>
			Как только ее проверит наш модератор, она будет доступна для просмотра
		</div>
	
		Посмотреть вакансию <a href="{{ route('view', array('id' => $obj->id)) }}"></a>
	</body>
</html>
