<?php
	//check that user is logged in
	session_start();
	if(!isset($_SESSION['user'])){
		//if there is not a user logged in - redirect to main login page
		header("Location: http://intranet/Training");
	}
?>

<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="quiz.css">
	<title>Service Agent Exam</title>
</head>
<body>

	<div id="topbar">
		<div id="quote">"The Best Training In Car Rental!"</div>
	</div>
	
	<div id="titlebar">
			<img src="../ezlogo.png" id="logo">
			
			<!--Header buttons -->
			<div style="float: right; position: relative; right: 20%;">Logged in as: <?php echo $_SESSION['user']; ?> <a href="http://intranet/training/main.php" class="topButton">Main Page</a><a href="http://intranet/training/account.php" class="topButton">Account</a><a href="http://intranet/training/logout.php" class="topButton">Logout</a></div>
		</div>
	
	
	<form action="serviceExamCompleted.php" method="post">
		<div class="submitBtn"><h1>El Examen de Agente de Servicio</h1></div>
		
		<div class="question">
			<h3>1. Qu&eacute; afirmaci&oacute;n describe mejor su papel como agente de servicio?</h3>
			<input type="radio" name="q1" value="a">Yo estoy a cargo de la limpieza de los veh&iacute;culos <br>
			<input type="radio" name="q1" value="b">Mi funci&oacute;n es conseguir los coches a trav&eacute;s de la lin&iacute;a de limpieza r&aacute;pdicimo <br>
			<input type="radio" name="q1" value="c">Mi papel es proporcionar a nuestros clientes los veh&iacute;culos que est&aacute;n limpios y en buenas condiciones mec&aacute;nicas de una manera conveniente y segura <br>
			<input type="radio" name="q1" value="d">Mi papel no se menciona aqu&iacute;<br>
		</div>
		
		<div class="question">
			<h3>2. Al limpiar el interior de un veh&iacute;culo, que debe incluir: </h3>
			<input type="radio" name="q2" value="a">Maletero<br>
			<input type="radio" name="q2" value="b">Consolas<br>
			<input type="radio" name="q2" value="c">Guantera<br>
			<input type="radio" name="q2" value="d">Debajo y detr&aacute;s de los asientos <br>
			<input type="radio" name="q2" value="e">Todo lo anterior </br>
		</div>
		
		<div class="question">
			<h3>3. &iquest;Cu&aacute;ntos pa&ntilde;os de limpieza deber&iacute;a tener? </h3>
			<input type="radio" name="q3" value="a">Uno - utilizado en todas las superficies <br>
			<input type="radio" name="q3" value="b">Dos - uno para el vidrio y otro para otras superficies <br>
			<input type="radio" name="q3" value="c">Tres - Uno para el vidrio, uno para consolas, y uno para el salpicadero <br>
		</div>
		
		<div class="question">
			<h3>4. &iquest;Cu&aacute;l es el proceso de pasar la aspiradora a las alfombras de piso?</h3>
			<input type="radio" name="q4" value="a">Pase la aspiradora en el interior del veh&iacute;culo <br>
			<input type="radio" name="q4" value="b">Pase la aspiradora en el fuera del veh&iacute;culo <br>
			<input type="radio" name="q4" value="c">Sacudir las al fombras - no pase la aspiradora</br>
			<input type="radio" name="q4" value="d">Haga lo que sea m&aacute;s r&aacute;pido </div>
		
		<div class="question">
			<h3>5. Un veh&iacute;culo que huele a humo debe ser: </h3>
			<input type="radio" name="q5" value="a">Quedarse con las ventanas abiertas, en la l&iacute;nea  <br>
			<input type="radio" name="q5" value="b">Ponerse a un lado para la limpieza adicional <br>
		</div>
		
		<div class="question">
			<h3>6. &iquest;Al estacionar un veh&iacute;culo en la l&iacute;nea , los cinturones de seguridad deben quedar abrochados? </h3>
			<input type="radio" name="q6" value="a">S&oacute;lo el cintur&oacute;n de seguridad del conductor se debe dejar abrochado <br>
			<input type="radio" name="q6" value="b">Todos los cinturones de seguridad deben quedar abrochados<br>
			<input type="radio" name="q6" value="c">Ninguno de los cinturones de seguridad deben quedar abrochados<br>
			<input type="radio" name="q6" value="d">Todos menos el cintur&oacute;n de seguridad del conductor se debe dejar abrochado </br>
		</div>
		
		<div class="question">
			<h3>7. El radio se debe dejar encendido y el volumen bajito cuando se estaciona en la l&iacute;nea. </h3>
			<input type="radio" name="q7" value="a">Verdadero - Deja la radio a un nivel c&oacute;modo <br>
			<input type="radio" name="q7" value="b">Falso - Apaga el radio<br>
		</div>
		
		<div class="question">
			<h3>8. Elija el Check-Out Slip que est&aacute; llenado correctamente cuando se entrega al quiosco: </h3>
			<input type="radio" name="q8" value="a"><img src="checkOutSlipC.png">
			<input type="radio" name="q8" value="b"><img src="checkOutSlipD.png"><br>
		</div>
		
		<div class="question">
			<h3>9. Nunca ponga un veh&iacute;culo en la l&iacute;nea  si: </h3>
			<input type="radio" name="q9" value="a">Luz de presi&oacute;n de los neum&aacute;ticos est&aacute; encendida <br>
			<input type="radio" name="q9" value="b">Luz del motor est&aacute; encendida <br>
			<input type="radio" name="q9" value="c">Veh&iacute;culo huele a humo<br>
			<input type="radio" name="q9" value="d">El llavero de control remoto no funciona correctamente <br>
			<input type="radio" name="q9" value="e">Hay quebraduras en el espejo retrovisor o los espejos laterales<br>
			<input type="radio" name="q9" value="f">Todo lo anterior<br>
		</div>
		
		<div class="question">
			<h3>10. Al limpiar los bolsillos de los asientos / guanteras / debajo de los asientos / etc ... </h3>
			<input type="radio" name="q10" value="a">Siempre mire antes de tocar - una inspecci&oacute;n visual de los objetos peligrosos antes de tocar<br>
			<input type="radio" name="q10" value="b">Tome - r&aacute;pidamente la basura y escombros sin mirar para ahorrar tiempo valioso<br>
		</div>
		
		<!--User information-->
		<div class="userInfo">
			<div style="float: left; line-height: 30px;">El pasado 6 de sociales:<br>Nombre de pila: <br>Apellido: <br>Ubicaci&oacute;n:<br></div>
			<div style="float: left; line-height: 30px;">
				 <input type="number" min="100000" max="999999" name="employeeID" required="required"  value="<?php echo $_SESSION['last6']; ?>"><br>
				 <input type="textbox" name="firstName" required="required" value="<?php echo $_SESSION['firstname']; ?>"><br> 
				 <input type="textbox" name="lastName" required="required" value="<?php echo $_SESSION['lastname']; ?>"><br>
				 <div><?php echo $_SESSION['location']; ?></div>
				 <input type="hidden" name="location" value="<?php echo $_SESSION['location']; ?>">
			</div>
			
			<!--Hidden language variable-->
			<input type="hidden" name="language" value="spanish">
			
			<div>Por favor, introduzca su informaci&oacute;n personal y haga clic en el bot&oacute;n 'Corrija Mi Examen' para recibir su calificaci&oacute;n. Si usted no pasa usted puede volver a tomar la prueba tras consultar a las diapositivas de informaci&oacute;n.</div>
		</div>
		
		<!--Submit Button-->
		<div class="submitBtn">
			<input type="submit" value="Corrija Mi Examen" class="button">
		</div>
	</form>
</body>
</html>