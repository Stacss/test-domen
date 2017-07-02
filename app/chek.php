<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>получаем данные отправки</title>
</head>
<body>
	<h2>Поздравляю, ваша машина!</h2>
	<?php
			$auto = array($name = $_POST['name'],$model = $_POST['model'],$year = $_POST['year'],$vin = $_POST['vin']);  //_POST - это метод указанный в index.php, данная команда записывает значение value в указанную переменную имя инпута переменной одинаковы
			
			echo "марка: ".$name."<br>"."модель: ".$model."<br>"."год: ".$year."<br>"."VIN: ".$vin."<br>";
			if ($year<=2000) {
			echo 'Ваша машина довольно стара, пора ее на свалку';
			};
			if ($yaer<=2010 and $year>=2001) {
			echo 'Ваша машина еще более-менее, но будет часто ломаться';
			};
			if ($year>=2011) {
			echo 'Ваша машина еще хорошая';
			}
		
	?>
	<?php
		
	?>
</body>
</html>