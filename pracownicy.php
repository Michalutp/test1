<!DOCTYPE HTML>
<html lang="pl">

<head>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<!--		<link rel="stylesheet" href="style1.css" media="all">-->
	<title>Kontrola dostępu</title>

	<meta name="description" content="karta" />
	<meta name="keywords" content="czas pracy" />

	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

	<link href="css/fontello.css" rel="stylesheet" type="text/css" />

</head>

<body>

	<div class="wrapper">
		<div class="header">
			<div class="logo">
				<span style="color:gray" font-family="sans-serif"><h3><span style="color: black">Kontrola dostępu Rfid RC-522 oraz Picamera </span><span style="color:white">RaspberryPi </span></a>
				<div style="clear:both;"></div>
			</div>
		</div>
		<div class="nav">
			<ol>

				<div id="menu">
					<ol>
						<ol>
							<li><a href="index.php">Strona główna</a></li>
						<li><a href="../sektory.php">Lokalizacja pracownika</a></li>
					

						</ol>

				</div>

		</div>

		<center>
			<div class="center">
				<div class="wrapper">
					<a href="index.php"></a>
					<div class="header">
						<div style="clear:both;"></div>
					</div>
				</div>


				<div class="left">
					<ol>

						<li>
							<a href="pracownicy.php">
								< Wyjdź </a>
						</li>
					

					
						<!--		<li><a href="index2.php">Obiekty</a></li>-->

				</div>


				<div class="right">

					</ol>
					<?php

						
if (isset($_GET['delete_post'])){
	
	include("includes/delete_post.php");}	
								
if (isset($_GET['insert'])){
	
	include("includes/insert_post.php");	
}
			
if (isset($_GET['view_posts'])){
	
	include("view_posts.php");
	
}	
			
if (isset($_GET['edit_post'])){
	
	include("includes/edit_post.php");
	
}		
?>
						<?php
					
			
			if(isset($_GET['index'])){
				
				require("index.php");
						
						}
			
			?>

				</div>

			</div>
	</div>
	<center>


		</br>
		</br>


		<div class="footer"></div>
		</div>

		<script src="jquery-1.11.3.min.js"></script>

		<script>
			$(document).ready(function () {
				var NavY = $('.nav').offset().top;

				var stickyNav = function () {
					var ScrollY = $(window).scrollTop();

					if (ScrollY > NavY) {
						$('.nav').addClass('sticky');
					} else {
						$('.nav').removeClass('sticky');
					}
				};

				stickyNav();

				$(window).scroll(function () {
					stickyNav();
				});
			});
		</script>

</body>

</html>