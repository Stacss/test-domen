<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>работа с импут</title>
</head>
<body>
	<h1>THIS IS INPUT</h1>
	<h2>укажите марку машины</h2>
		<form action="app/chek.php" method="post">
			<p>марка<input type="text" name="name" placeholder="fiat"></p>
			<p>модкль<input type="text" name="model" placeholder="punto"></p>
			<p>год выпуска<input type="text" name="year" placeholder="1999"></p>
			<p>вин номер<input type="text" name="vin" placeholder="sjnbaap12u0324567"></p>
			<input type="submit" value="отправить">
		</form>	
	
	
</body>
</html>