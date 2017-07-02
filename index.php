<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>работа с PHP</title>
</head>
<body>
	<?php 
	echo '<h1>hello world! this is php!</h1>'
	?>
	<p>test git</p>
	<?php $name="Стас"; $ago="30"; $textName="Ваше имя:"; $textEgo="Ваш возраст:";?>
	<?php ?>
	<?php echo "$textName $name $textEgo $ago"?>
	<?php $a=$textName.$name?>
	<?php $b=$textEgo.$ago?>
	<br>
	<?php echo $a." ".$b?>
	<?php $c="$a.$b"?>
	<br>
	<?php echo $c?>
	
	
	<div class="calc">
	<?php $nomer1=4; $nomer2=2;?>
	<?php $otvet=$nomer1+$nomer2; $otvet1=$nomer1/$nomer2; $otvet2=$nomer1*$nomer2; $stepen=$nomer1**$nomer1 ?>
	<?php echo "сложение 4 и 2 = $otvet... деление 4 и 2 = $otvet1.... умножение 4 и 2 = $otvet2.... квадрат 4 = $stepen";?>
	<br>
	<?php $god="2017"; $year=$god-$ago?>
	<?php echo "домашка: год рождения $year"?>
	
	<br>
	
	<?php 
		define("cont", "ЭТО КОНСТАНТА!!! ЧУВАК");
		
		echo cont;
		$age=20;
		if ($age>=18 and $age<=58) {
			echo 'Вам щё работаь и работать!!1!';
		};
		if ($age>=59) {
			echo 'пора на пенсию';
		}
		if ($age<=17) {
			echo 'рано работать';
		}
		?>
		
		<br><br><br><br>
		<?php   
			$bmw = array (
				"model" => "x5",
				"speed" => "120",
				"doors" => "5",
				"year" => "2006"
			);
			echo 'BMW ', $bmw[model], $bmw[speed], $bmw[doors], $bmw[year]; 
			
			$opel = array (
				"model" => "Костра",
				"speed" => "1000",
				"doors" => "17",
				"year" => "1988"
			);
			echo 'opel ', $opel[model], $opel[speed], $opel[doors], $opel[year]; 
			
			$tayota = array (
				"model" => "",
				"speed" => "120",
				"doors" => "5",
				"year" => "2006"
			);
			echo 'tayota ', $tayota[model], $tayota[speed], $tayota[doors], $tayota[year]; 
		?>
		<br>
		<a href="input.php" style="font-size: 30px;">зайди</a>
	</div>
</body>
</html>