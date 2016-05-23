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
	<link href="news.css" rel="stylesheet" type="text/css">
	<script src="jquery.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="mainjs.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
	<script>
		$(document).ready(function(){
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
$(document).ready(function(){
    $("#load").click(function(){
        $("#frame22").slideToggle();
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
						<img src="content/zavod.jpg	" width="1090" height="620">
						<img src="content/zavod2.jpg" width="1090" height="620">
						<img src="content/zavod3.jpg" width="1090" height="620">
						
						</div>
						<div class="controller" id="next"></div>
						</div>
		</div>
		
	
		<div id="right-sec">
			<div class = 'firstnews'>
				<img src="content/dlyanews.jpg" class = 'imageLeft'></img>
				<div class = 'textNews'><h2>BMW M could launch a 7 Series on steroids with some help from Rolls-Royce

</h2><p>The BMW 7 Series doesn’t lack power, but the Munich-based car maker has always stopped short of offering a true sport-focused version of its flagship sedan to take on Mercedes-AMG’s S63 and S65. While a M7 still isn’t in the cards for the time being, a new report finds a performance-tuned model called M760i could join the 7 lineup in the coming months.
Enthusiast website BMW Blog reports the M760i will use a 6.6-liter V12 engine borrowed from the Rolls-Royce’s Wraith and Ghost models. The naturally-aspirated engine will send approximately 624 horsepower and 590 pound-feet of torque to the rear wheels via an eight-speed automatic transmission. Visually, the M760i will boast a sportier-looking front fascia with a deeper bumper, side skirts, a revised rear end, and bigger alloy wheels. 

</p></div>
			</div>
			<div class = 'secondnews'>
				<div class = 'textNews2'><h2>BMW Will End The M2 In 2020</h2><p>The days of the M2 are already numbered, at least according to German BMW news site. It claims that the car will be killed off by BMW in 2020, essentially making it a limited edition vehicle. The move is probably to help make the M2 feel more special, which would be a similar strategy as the 1 Series M.While it might seem weird, the BMW M2 hasn’t even been launched on the open market, yet the car already has an expiration date.
BMW has invested quite a bit into the M2, which promises to please enthusiasts who are upset about the softening of the brand’s performance models. The car is powered by a brand-new 3.0-liter inline six-cylinder engine, which incorporates M TwinPower Turbo technology. Output is excellent, with BMW claiming a peak 370 horsepower and 343 lb.-ft. of torque. Thanks to an overboost function, torque can increase temporarily to 369 lb.-ft.




</p></div>
				<img src="content/dlyanews2.jpg" class = 'imageRight'></img>
			</div>
		</div>
		<div id="right-sec">
			<div class = 'firstnews'>
				<img src="content/dlyanews3.jpg" class = 'imageLeft'></img>
				<div class = 'textNews'><h2>BMW widens luxury lead over Mercedes, Lexus</h2><p>DETROIT -- BMW topped Mercedes-Benz in U.S. luxury sales during November and widened its lead over its German rival for the year.

Sales at BMW AG’s namesake brand in November rose 3.2 percent to 32,003, as deliveries of the X3 sport utility vehicle more than doubled. For the year, BMW's U.S. sales grew 4.4 percent to 311,398 vehicles.

Mercedes, in its U.S. sales report released today, said November luxury sales fell 13 percent to 30,043 vehicles. For the year, Mercedes' U.S. sales have increased 4 percent to 308,885 vehicles. The results for Mercedes were delayed by a day because of a technical glitch. </p></div>
			</div>
			<div class = 'secondnews'>
				<div class = 'textNews2'><h2>Open-Air Electrification: BMW to Add i8 Spyder Plug-in Hybrid</h2><p>BMW plans to launch an open-top version of its i8 hybrid sports car, CEO Harald Krüger has told the German business paper Handelsblatt. Such a model has been expected to come to market ever since BMW unveiled a concept car in April 2012. However, sales of the regular i8 have been so good that there was little need to boost the model by adding a topless variant.

The i8 Spyder, as we expect it to be called, likely will be fitted with an ultra-lightweight carbon-fiber top. Under the skin, it will use an updated version of the current i8 powertrain; we expect it to keep the 1.5-liter three-cylinder engine, which could be mated to a more powerful version of the front-mounted electric motor. The battery pack may be upgraded to reach a range of more than 30 miles, not least in order to comply with China’s requirements for plug-in hybrids.</p></div>
				<img src="content/BMWI8.jpg" class = 'imageRight'></img>
			</div>
		</div>
		
	</div>

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