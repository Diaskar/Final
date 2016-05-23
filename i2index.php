<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Регистрация</title>
		<link href="mainstyle.css" type="text/css" rel="stylesheet">
		<script src="mainjs.js" type="text/javascript"></script>
	</head>
	<body>
		<div class="wrapper">
			<div class="title">
				<span>Регистрация</span>
			</div>
			<div class="as_item_main">
				<form method="post" action="reg.php">	
					<ul class="reg_ul">
						<li>
							<input id="email" type="text" name="email" placeholder='Email'>
						</li>
						<li>
							<input id="password" type="password" name="password" placeholder='Пароль'>
						</li>
						<li>
							<input id="name" type="text" name="name" placeholder='Имя'>
						</li>
						<li>
							<input id="surname" type="text" name="surname" placeholder='Фамилия'>
						</li>
						<li>
							<button type="submit">Зарегистрироваться</button>
						</li>
					</ul>
				</form>
			</div>
			<div class="nextpage">
				<p>Уже зарегистрированы? <a href="logn.php">Войдите</a></p>
			</div>
		</div>
	</body>
</html>