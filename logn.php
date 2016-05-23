.<!DOCTYPE html>
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
				<span>Вход</span>
			</div>
			<div class="as_item_main">
				<form method="post" action="login.php">	
					<ul class="reg_ul">
						<li>
							<input id="email" type="text" name="email" placeholder='Email'>
						</li>
						<li>
							<input id="password" type="password" name="password" placeholder='Пароль'>
						</li>
						<li>
							<button type="submit">Войти</button>
						</li>
					</ul>
				</form>
			</div>
			<div class="nextpage">
				<p>Нет аккаунта? <a href="i2index.php">Зарегистрируйтесь</a></p>
			</div>
		</div>
	</body>
</html>