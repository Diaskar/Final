<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="mainstyle.css" type="text/css" rel="stylesheet">
	<link rel="icon" href="content/index.png" type="favicon/x-icon">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" >
	<link href="details.css" rel="stylesheet" type="text/css">
	<script src="jquery.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="mainjs.js"></script>
	<script>
		$(document).click(function(){
		    $("#img1").click(function(){
		        $("#form").animate("fast");
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
<script> 
$(function(){
    $("#load").click(function(e){
        e.preventDefault();
        $("#frame22").slice(0, 1).show("slow");
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
<body>
	<div class = 'dark'></div>
	<div id="header"></div>
	<div id="navigation">
		<div id="nav-l">
			<ul class="nav nav-tabs">
				<li class="nav-b"><a href="mpage.php">Main</a></li>
				<li class="nav-b"><a href="news.php">News</a></li>
				<li class="nav-b"><a href="details.php">Details</a></li>
				<li class="nav-b"><a href="gallery.php">Gallery</a></li>
			</ul>

		</div>
		<div id="nav-r">
			<?php  	
			session_start();
			if(!empty($_SESSION['email'])){
				echo '
				<li>
				<div id="img" style="margin-left:405px;border:1px solid black;" >'.$_SESSION['email'].'</div>	
				<div id="form"><form><input ng-model="search" type="search" placeholder="Search"></input></form></div>
				<a href="signout.php" style="color:grey;margin-left:430px;">Sign Out<a></li>
		';}
			
			else{
				echo'
		
			<div id="img"><img src="content/adduser.png"/></div>			
			<div id="img1"><a href="#"><img src="content/loop.png"/></a></div>
			<div id="form"><form><input ng-model="search" type="search" placeholder="Search"></input></form></div>

					';}
		?>
		</div>
	</div>
	<div id="section">
		<div id="left-sec">
						<div id="container">
						<div class="controller" id="prev"></div>
						<div id="slider">
						<img src="content/bmwsto.jpg	" width="1090" height="620">
						<img src="content/bmwsto2.jpg" class = 'imageLook' width="1090" height="620">
						<img src="content/bmwsto3.jpg" width="1090" height="620">
						<img src="content/bmwsto4.jpg" width="1090" height="620">
						</div>
						<div class="controller" id="next"></div>
						</div>
		</div>
		
		<div id="right-sec">
			<div class="frame">
				<img src="content/koleso.jpg" class = 'imageLook1' width="259" height="180">
				<h3>The newest inovation in BMW !</h3>
				<p>For ALPINA, a technology driven company, standstill is a foreign word. Since the introduction of the B7 Bi-Turbo, the engineers from Buchloe, Germany, have been continuously working on the details of the turbo charging and intercooler system. </p>
			</div>
			<div class="frame">
				<img src="content/akpp.jpg"  class = 'imageLook2' width="259" height="180">
				<h3>The newest inovation in BMW !</h3>
				<p>For ALPINA, a technology driven company, standstill is a foreign word. Since the introduction of the B7 Bi-Turbo, the engineers from Buchloe, Germany, have been continuously working on the details of the turbo charging and intercooler system. </p>
			</div>
			<div class="frame">
				<img src="content/transmission.jpg" class = 'imageLook3' width="259" height="180">
				<h3>The newest inovation in BMW !</h3>
				<p>For ALPINA, a technology driven company, standstill is a foreign word. Since the introduction of the B7 Bi-Turbo, the engineers from Buchloe, Germany, have been continuously working on the details of the turbo charging and intercooler system. </p>
			</div>
			<div class="frame">
				<img src="content/engine.jpg" class = 'imageLook4' width="259" height="180">
				<h3>The newest inovation in BMW !</h3>
				<p>For ALPINA, a technology driven company, standstill is a foreign word. Since the introduction of the B7 Bi-Turbo, the engineers from Buchloe, Germany, have been continuously working on the details of the turbo charging and intercooler system. </p>
			</div>
				<div id="frame22">
				<div class="frame2">
				<img src="content/brakes.jpg" class = 'imageLook5' width="259" height="180">
				<h3>The newest inovation in BMW !</h3>
				<p>For ALPINA, a technology driven company, standstill is a foreign word. Since the introduction of the B7 Bi-Turbo, the engineers from Buchloe, Germany, have been continuously working on the details of the turbo charging and intercooler system. </p>
			</div>
				<div class="frame2">
				<img src="content/accesories.jpg" class = 'imageLook6' width="259" height="180">
				<h3>The newest inovation in BMW !</h3>
				<p>For ALPINA, a technology driven company, standstill is a foreign word. Since the introduction of the B7 Bi-Turbo, the engineers from Buchloe, Germany, have been continuously working on the details of the turbo charging and intercooler system. </p>
			</div>
				<div class="frame2">
				<img src="content/key.jpg" class = 'imageLook7' width="259" height="180">
				<h3>The newest inovation in BMW !</h3>
				<p>For ALPINA, a technology driven company, standstill is a foreign word. Since the introduction of the B7 Bi-Turbo, the engineers from Buchloe, Germany, have been continuously working on the details of the turbo charging and intercooler system. </p>
			</div>
				<div class="frame2">
				<img src="content/vyhlop.jpg" class = 'imageLook8' width="259" height="180">
				<h3>The newest inovation in BMW !</h3>
				<p>For ALPINA, a technology driven company, standstill is a foreign word. Since the introduction of the B7 Bi-Turbo, the engineers from Buchloe, Germany, have been continuously working on the details of the turbo charging and intercooler system. </p>
			</div>
			</div>
			<div id="load"><a href="#">Load more...</a></div>
				
	
	<div id="footer">
		<div id="wrapper2">
					<li class="wrapper2"><a href="http://facebook.com/"><img src="content/facebook.png" width="35" height="35"></a></li>
					<li class="wrapper2"><a href="http://vk.com/"><img src="content/vk.png" width="35" height="35"></a></li>
					<li class="wrapper2"><a href="http://instagram.com/"><img src="content/instagram.png" width="35" height="35"></a></li>
					<li class="wrapper2"><a href="http://twitter.com/"><img src="content/twitter.png" width="35" height="35"></a></li>
		</div>
		<div id="wrapper3">
			<ul>
				<li class="footer-m"><a href="mpage.php">Главная</a></li>
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