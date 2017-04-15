<?php
	if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
		$redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['Request_URL'];
		header('HTTP/1.1 31 Moved Permanently');
		header('Location: ' . $redirect);
	}
?>

<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<title>ymundurs</title> <!--название сайта-->
		<link rel="stylesheet" type="text/css" href="css/main.css" charset="utf-8">
		<meta name="description" content="Переводчик технической документации, англо-русский перевод, переводчик, сайт-визитка переводчика и многое другое"> 
		<meta name="keywords" content="Ymundurs, Юрий Мундурс, Переводчик, сайт-визитка"> <!--Для продвижения сайтов в поисковых системах-->
		<meta name="viewport" content="width=device-width, initial-scale=1"> <!--Тег для увеличения масштаба сайта(в основном на моб)-->
		<link rel="shortcut icon" type="image/x-icon" href="img/vocabulary.ico"> <!--картинка возле названия сайта во вкладке-->
		<link rel="stylesheet" href="css/font-awesome.min.css">

	</head>

	<body>	
		<div class="wrapper">
		<header>
			
			<div id="logo">
				<a href="https://ymundurs.com" title="На главную">Yuri Mundurs 
				<span>ENG-RUS Translator</span> </a>
				</div>

			<div id="menuShow"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<div id="hideMenu">
				<div id="about">
					<a href="#"  title="Резюме"><i class="fa fa-address-card-o" aria-hidden="true"></i>  Резюме</a>
					<a href="#"  title="Ваши отзывы"><i class="fa fa-comments-o" aria-hidden="true"></i> Отзывы</a>
					<a href="#"  title="Написать мне письмо"><i class="fa fa-rss" aria-hidden="true"></i> Контакты</a>			
				</div>

			<div id="mobileMenu">

					<a href="#"  title="Резюме"><i class="fa fa-address-card-o" aria-hidden="true"></i>  Резюме</a><br>
					<a href="#"  title="Ваши отзывы"><i class="fa fa-comments-o" aria-hidden="true"></i> Отзывы</a><br>
					<a href="#"  title="Написать мне письмо"><i class="fa fa-rss" aria-hidden="true"></i> Контакты</a><br>
					
			
		</header>

		<nav>
			
		</nav>


		<div class="content">
		
		</div>

		<div class="resume">
		sadas;d;alsdk';l
		asldk;kalsdk;las
		alk;sd;kldakl;asd
		l;asdl;kasd;klasdkl;
		lk;'asd;klasdlk;kasld;
		;lasdl;adslk;adsklads
		';;lkasdkl;asdk;l;asdkl
		'as;kld;lkas;kladsk;l
		';lkasdk;ladsk;l
		</div>
	
		<div class="footer">
			<div id="site_name">
				<span>Y.Mundurs - качественные переводы</span>
			</div>
			<div id="clear">
			</div>
			 <div id="rights">
			 	<a href="">Все права защищены &copy: 2017, Ukraine </a>

		</div>

		


		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>﻿
		<script type="text/javascript" scr="jquery.sticky.js"></script>
		<script>
			
			$('#menuShow').click (function () {
		if ($('#mobileMenu').is(':visible'))
			$('#mobileMenu').hide ();
		else
			$('#mobileMenu').show ();
		});﻿

		$(window).scroll(function() {
		if ($(this).scrollTop() > 1){
		$('header').addClass("sticky");
		}
		else{
		$('header').removeClass("sticky");
}
});
		
		

		window.onresize = function (event) {
			$('#mobileMenu').hide ();
		};
		</script>
	</body>

</html>