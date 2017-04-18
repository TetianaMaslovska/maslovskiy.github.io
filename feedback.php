<!DOCTYPE html>

<html>
<meta charset="utf-8">
<head>
	<?php $title="Feedback"; 
	
	require_once "blocks/head.php";
	?>
	
</head>
<body>
	<?php require_once "blocks/header.php"?>
	
	<div id="wrapper">
			<div id="leftCol">
					<input type="text" placeholder="Name" id="name" name = "name"><br />
					<input type="text" placeholder="E-mail" id="email" name = "email"><br />
					<input type="text" placeholder="Subject" id="subject" name = "subject"><br />
					
					<textarea name="message" placeholder="Text" id="message"></textarea><br />
					<div id =  "messageShow"></div>
					<input type="button" name = "done" id="done" value="Send">
			</div>
			<?php require_once "blocks/rigthCol.php"?>
	</div>
	<?php require_once "blocks/footer.php"?>
</body>
</html>