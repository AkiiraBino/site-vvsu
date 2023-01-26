<!DOCTYPE html>
<html>
	
	<head>
		<meta name="viewport" charset="UTF-8" content="width=device-width">
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	
	<body style="background-color: #1560BD">
		<div class="main_form">
			<div id="header">
				<a href="index.php">
					<img src="/images/logo_white.png" id="logo_form"/>
				</a>
				<p class = "text_form">
					<a href="events.php" style="padding-left:2%; padding-right:2%;"> Мероприятия </a>
					<a href="about.php"> О нас </a>
				</p>
			</div>
			
			<div id="main">
				<a href="#window">
					<img src="/images/BPI.jpg" style="float: left;"/>
					<span> Прикладная информатика - бери информатику и прикладывай в любую сферу, например можешь сделать похожий сайт</span>
				</a>
				
				<a href="#window" style="text-align: right">
					<img src="/images/BIS.jpg" style="float: right;"/>
					<span> Информационные технологии и системы - проектируй системы, базы и хранилища данных, анализируй их </span>
				</a>
				
				<a href="#window">
					<img src="/images/BIN.jpg" style="float: left;"/>
					<span> Программная инженерия - создавай крутые дизайны, персонажей для игр, заставляй их оживать </span>
				</a>
				
				<a href="#window" style="text-align: right">
					<img src="/images/BIK.jpg"  style="float: right;"/>
					<span> Инфокоммуникационные технологии и системы связи - администрируй системы, работай с интернетом вещей </span>
				</a>
				
				<div id="window">
					<video src="/video/dod.mov" controls></video>
					<a href="#" id="window_close">
						<image src="/images/close.svg"/>
					</a>
				</div>
				
				<div class="text_cart" style="margin-left: 25%;">
					<form action="update.php" method="POST">
						<fieldset>
							<p> Анкета отправлена, спасибо!</p>
						</fieldset>

					</form>
				</div>
			</div>
			
			<div id="footer">
				<a href="index.php">
					<img src="/images/logo_white.png" id="logo_form"/>
				</a>
				<p class = "text_form">
					По всем вопросам: г. Владивосток, ул. Гоголя 41
				</p>
				<p class = "text_form">
					© 2022, Институт информационных технологий и систем "ИТС ВВГУ"
				</p>
			</div>
		</div>
	</body>
	<script src="snow.js">

	</script>
</html>

<?php
	include 'database.php';
	session_start();

	$email = "not available";
	$number = 0;
	$name = "not available";
	$session_name = session_name();
	$session_id = session_id();

	if(isset($_POST["name"])){
	  
		$name = htmlspecialchars($_POST["name"]);
	}
	if(isset($_POST["phone"])){
	  
		$number = htmlspecialchars((string)$_POST["phone"]);
	}
	if(isset($_POST["email"])){
	  
		$email = htmlspecialchars($_POST["email"]);
	}
	load_base($name, $number, $email, $session_id, $session_name);
	
?>