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
	<title>Driver Exam</title>
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
	
	
	<form action="driverExamCompleted.php" method="post">
		<!--Header uses submitBtn class for similar appearance-->
		<div class="submitBtn"><h1 class="button">Examen de Conductor</h1></div>
		<div class="question">
			<h3>1. &iquest;En su pocicion de conductor, la opci&oacute;n que mejor describe sus principales funciones?</h3>
			<input type="radio" name="q1" value="a">Corriendo coches de ida y vuelta al aeropuerto<br>
			<input type="radio" name="q1" value="b">Llevando los clientes al aeropuerto<br>
			<input type="radio" name="q1" value="c">Cambiando aceite<br>
			<input type="radio" name="q1" value="d">Garantizando la presentaci&oacute;n fant&aacute;stica de veh&iacute;culos y la prestaci&oacute;n eficiente<br>
		</div>
		
		<div class="question">
			<h3>2. &iquest;Cu&aacute;l es el proceso correcto al inspeccionar un veh&iacute;culo por los da&ntilde;os?</h3>
			<input type="radio" name="q2" value="a">Avance r&aacute;pido por todo el veh&iacute;culo y mire al rededor <br>
			<input type="radio" name="q2" value="b">Entra en el veh&iacute;culo e inspecionalo por da&ntilde;os despu&eacute;s <br>
			<input type="radio" name="q2" value="c">Comience en la parte delantera y camine alrededor del veh&iacute;culo, a su izquierda, inspecci&oacute;nando de cerca para buscara los da&ntilde;os <br>
			<input type="radio" name="q2" value="d">Esto lo hace el Agente del Kiosk <br>
		</div>
		
		<div class="question">
			<h3>3. &iquest;Cu&aacute;ndo se debe devolver un veh&iacute;culo que no est&aacute; en condicion para rentar? </h3>
			<input type="radio" name="q3" value="a">La luz del motor est&aacute; encendida <br>
			<input type="radio" name="q3" value="b">Las ventanas no se enrollen<br>
			<input type="radio" name="q3" value="c">Hay una goma lisa<br>
			<input type="radio" name="q3" value="d">Todos mencionados<br>
		</div>
		
		<div class="question">
			<h3>4. &iquest;Cu&aacute;l es el proceso si encuentro un art&iacute;culo personal en los veh&iacute;culos (gafas de sol, iPad, zapatos, etc ...)? </h3>
			<input type="radio" name="q4" value="a">Usted puede mantenerlos - Los art&iacute;culos dejados en los veh&iacute;culos son propiedad de EZ Rent-A-Car y los empleados de nosotros<br>
			<input type="radio" name="q4" value="b">Enviar el art&iacute;culo a a corporaci&oacute;n<br>
			<input type="radio" name="q4" value="c">D&eacute; el art&iacute;culo a un supervisor con el n&uacute;mero de unidad que se le atribuye </br>
			<input type="radio" name="q4" value="d">Ponga el producto en el kiosko 
		</div>
		
		<div class="question">
			<h3>5. &iquest;Si usted encuentra un arma en un veh&iacute;culo, qu&eacute; debe hacer? </h3>
			<input type="radio" name="q5" value="a">Darsela a su gerente<br>
			<input type="radio" name="q5" value="b">Alerte a su gerente - no toque! <br>
			<input type="radio" name="q5" value="c">Retire el arma del veh&iacute;culo para que sus compa&ntilde;eros de trabajo u otros no sean heridos por ella<br>
			<input type="radio" name="q5" value="d">Ninguno es el procedimiento correcto <br>
		</div>
		
		<div class="question">
			<h3>6. &iquest;Se puede utilizar el tel&eacute;fono celular mientras se conduce un veh&iacute;culo en E-Z Rent-A-Car?</h3>
			<input type="radio" name="q6" value="a">S&iacute;, siempre y cuando no afecte su capacidad para conducir con seguridad <br>
			<input type="radio" name="q6" value="b">No, est&aacute; en contra de la pol&iacute;tica de empresa de utilizar un tel&eacute;fono celular o dispositivo electr&oacute;nico mientras estaba de servicio <br>
		</div>
		
		<div class="question">
			<h3>7. Si un cliente o cliente potencial le hace una pregunta: </h3>
			<input type="radio" name="q7" value="a">Explique que usted s&oacute;lo conduce coches y no puede ayudarle<br>
			<input type="radio" name="q7" value="b">D&iacute;gale al cliente que tienen que ir al kiosko<br>
			<input type="radio" name="q7" value="c">Sonr&iacute;a y asegurele al cliente que va encontrar un empleado que pueda ayudarle<br>
			<input type="radio" name="q7" value="d">Sonrisa y marcharse en silencio - si usted no sabe la respuesta, es mejor no confundir al cliente<br>
		</div>
		
		<div class="question">
			<h3>8. &iquest;Cu&aacute;l es la velocidad correcta para moverse a trav&eacute;s de la l&iacute;nia de lavado?</h3>
			<input type="radio" name="q8" value="a">15 millas por hora <br>
			<input type="radio" name="q8" value="b">No superior a 5 millas por hora<br>
			<input type="radio" name="q8" value="c">Tan r&aacute;pido como puedas, hay un mont&oacute;n de coches para lavar<br>
		</div>
		
		<div class="question">
			<h3>9. &iquest;Cu&aacute;l es la pol&iacute;tica de ID para los conductores?</h3>
			<input type="radio" name="q9" value="a">Debe tener una licencia de conducir v&aacute;lida <br>
			<input type="radio" name="q9" value="b">Debe llevar y la exhibici&oacute;n el ID de E-Z Rent-A-Car<br>
			<input type="radio" name="q9" value="c">Debe llevar el uniforme<br>
			<input type="radio" name="q9" value="d">Todo es requierar<br>
			<input type="radio" name="q9" value="e">Nada es requiere<br>
		</div>
		
		<div class="question">
			<h3>10. &iquest;Qui&eacute;n est&aacute; permitido en los veh&iacute;culos de alquiler cuando el veh&iacute;culo no est&aacute; en alquiler?</h3>
			<input type="radio" name="q10" value="a">Se permite que el conductor que transporte el veh&iacute;culo y cualquier empleado que utilize el veh&iacute;culo para los negocios E-Z Rent-A-Car<br>
			<input type="radio" name="q10" value="b">Mientras el veh&iacute;culo este asegurado se puede utilizar si no esta en alquiler <br>
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