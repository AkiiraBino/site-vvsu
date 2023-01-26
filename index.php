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
					<span style="padding-left: 20%"> Прикладная информатика - бери информатику и прикладывай в любую сферу, например можешь сделать похожий сайт</span>
				</a>
				
				<a href="#window" style="text-align: right">
					<img src="/images/BIS.jpg" style="float: right;"/>
					<span style="padding-right: 20%"> Информационные технологии и системы - проектируй системы, базы и хранилища данных, анализируй их </span>
				</a>
				
				<a href="#window">
					<img src="/images/BIN.jpg" style="float: left;"/>
					<span style="padding-left: 20%"> Программная инженерия - создавай крутые дизайны, персонажей для игр, заставляй их оживать </span>
				</a>
				
				<a href="#window" style="text-align: right">
					<img src="/images/BIK.jpg"  style="float: right;"/>
					<span style="padding-right: 20%"> Инфокоммуникационные технологии и системы связи - администрируй системы, работай с интернетом вещей </span>
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
							<p> Хочешь к нам? Заполни анкету!</p>
							<p>
								<label for="email">Твоя почта: </label>
								<input type="email" required placeholder="user@mail.ru" id="email" name="email"/>
							</p>
							<p>
								<label for="phone">Твой номер: </label>
								<input type="tel" required placeholder="89999999999" pattern="\d{11}" id="phone" name="phone"/>
							</p>
							<p>
								<label for="phone">Твое имя: </label>
								<input type="text" required placeholder="Иван" id="name" name="name"/>
							</p>
						</fieldset>

						<p>
							<button type="submit">Отправить</button>
						</p>
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