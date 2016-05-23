<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="mainstyle.css" type="text/css" rel="stylesheet">
	<link rel="icon" href="content/index.png" type="favicon/x-icon">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" >
	<link href="mpage.css" rel="stylesheet" type="text/css">
	<script src="jquery.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="mainjs.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
	<script>
		$(document).ready(function(){
		    $("#img1").click(function(){
		        $("#form").show("fast");
		    });
		    $('#img').click(function(){
		    	$('.registration').fadeIn();
		    	$('.dark').fadeIn();
		    });
		    $('.dark').click(function(){
		    	$('.registration').fadeOut();
		    	$('.dark').fadeOut();
		    });
		});
</script>

</script>
	<script src="carousel.js"></script>
	<script src="jquery.cycle.all.js"></script>
	<script type="text/javascript">
	$('#slider').cycle({ 
    fx:     'scrollHorz', 
    speed:  '1000',  
    next:   '#next', 
    prev:   '#prev' 
});
	</script>

</head>
<div class="registration">
			<div class="title">
				<span>Регистрация</span>
			</div>
			<div class="as_item_main">
				<form method="post" action="reg.php" class = 'fform'>	
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
<body ng-app="main" ng-controller="main-ctrl">
	<div class = 'dark'></div>
	<div id="header"></div>
	<div id="navigation">
		<div id="nav-l">
			<ul class="nav nav-tabs">
				<li class="nav-b"><a href="mpage.html">Main</a></li>
				<li class="nav-b"><a href="news.html">News</a></li>
				<li class="nav-b"><a href="details.html">Details</a></li>
				<li class="nav-b"><a href="gallery.html">Gallery</a></li>
			</ul>

		</div>
		<div id="nav-r">
			<div id="img"><img src="content/adduser.png"/></div>
			<div id="img1"><a href=""><img src="content/loop.png"/></a></div>
			<div id="form"><form><input ng-model="search" type="search" placeholder="Search"></input></form></div>

		</div>
	</div>
	<div id="section">
		<div id="left-sec">
						<img src="content/BMW7.jpg" width="1050" height="620">
		</div>
	</div>
			
	
	<div id="footer">
		<div id="wrapper2">
					<li class="wrapper2"><a href="#"><img src="content/facebook.png" width="35" height="35"></a></li>
					<li class="wrapper2"><a href="#"><img src="content/vk.png" width="35" height="35"></a></li>
					<li class="wrapper2"><a href="#"><img src="content/instagram.png" width="35" height="35"></a></li>
					<li class="wrapper2"><a href="#"><img src="content/twitter.png" width="35" height="35"></a></li>
		</div>
		<div id="wrapper3">
			<ul>
				<li class="footer-m"><a href="mpage.html">Главная</a></li>
				<li class="footer-m"><a href="http://www.bimmerpost.com/">Форум</a></li>
				<li class="footer-m"><a href="https://en.wikipedia.org/wiki/History_of_BMW">Истории</a></li>
				<li class="footer-m"><a href="contacts.html">Контакты</a></li>
				<li class="footer-m"><a href="">Местоположение</a></li>
			</ul>	
		</div>
		<div id="wrapper4"><p>© 2016 Suleyman Demirel University/BMWclub. All rights reserved.</p></div>
	</div>
</body>
</html>