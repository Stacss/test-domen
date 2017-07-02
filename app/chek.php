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
				echo 'Ваша машина довольно стара, пора ее на свалку!<br>';
			}
			elseif ($year>=2011){
				echo 'Ваша машина еще хорошая!<br>';
			}
			else {
				echo "машина неплохая, но будет ломаться!<br>";
			};
			switch ($name) {
				case "bmw":
					echo $name." - это европейская авто!<br>";
					break;
				case "audi":
					echo $name." - это европейская авто!<br>";
					break;
				case "skoda":
					echo $name." - это европейская авто!<br>";
					break;
				case "volkswagen":
					echo $name." - это европейская авто!<br>";
					break;
				case "porsche":
					echo $name." - это европейская авто!<br>";
					break;
				case "nissan":
					echo $name." - это японская авто!<br>";
					break;
				case "toyota":
					echo $name." - это японская авто!<br>";
					break;
				case "mazda":
					echo $name." - это японская авто!<br>";
					break;
				case "mitsubishi":
					echo $name." - это японская авто!<br>";
					break;
				case "kia":
					echo $name." - это корейская авто!<br>";
					break;
				case "hyundai":
					echo $name." - это корейская авто!<br>";
					break;
				case "daewoo":
					echo $name." - это корейская авто!<br>";
					break;
			}
	?>
	<?php
		
	?>
</body>
</html>