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
	<title>Harassment Exam</title>
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
	
	
	<form action="harassmentExamCompleted.php" method="post">
		<div class="submitBtn"><h1>PREVIENE  EL ACOSO EN EL LUGAR DE TRABAJO</h1></div>
		<div class="question">
			<h3>1. Yo entiendo el acoso sexual est&aacute; prohibido por la ley y por la pol&iacute;tica de <br>EZ Rent- A-Car .</h3>
			<input type="radio" name="q1" value="a">Verdadero<br>
			<input type="radio" name="q1" value="b">Falso<br>
		</div>
		
		<div class="question">
			<h3>2. 2-	Entiendo que el acoso o la discriminaci&oacute;n basiedo de sexo, raza, color, religi&oacute;n , origen nacional , edad, discapacidad , ascendencia , o cualquier otra caracter&iacute;stica protegida por leyes federales, estatales o locales es ilegal y viola la pol&iacute;tica  de <br>E-Z Rent- A-Car .</h3>
			<input type="radio" name="q2" value="a">Verdadero<br>
			<input type="radio" name="q2" value="b">Falso<br>

		</div>
		
		<div class="question">
			<h3>3. 3-	Entiendo que el acoso sexual incluye avances no deseados , el inter&eacute;s rom&aacute;ntico , o otra conducta no deseada que puede ser verbal , visual o f&iacute;sica .</h3>
			<input type="radio" name="q3" value="a">Verdadero<br>
			<input type="radio" name="q3" value="b">Falso<br>
		</div>
		
		<div class="question">
			<h3>4. Entiendo que una forma grave de acoso sexual incluye beneficios de ofrecimiento de empleo a cambio de favores sexuales o alternativa que amenaza el trabajo de una persona si no  est&aacute;n de acuerdo a la oferta .</h3>
			<input type="radio" name="q4" value="a">Verdadero<br>
			<input type="radio" name="q4" value="b">Falso<br>
		</div>
		
		<div class="question">
			<h3>5. Entiendo que es ilegal y una violaci&oacute;n de la pol&iacute;tica de E-Z Rent- A-Car tomar represalias contra alguien que se resiste a la conducta no deseada, presenta una queja sobre acoso o acoso percibido, o participa en una investigaci&oacute;n.</h3>
			<input type="radio" name="q5" value="a">Verdadero<br>
			<input type="radio" name="q5" value="b">Falso<br>
		</div>
		
		<div class="question">
			<h3>6. Yo entiendo que puedo estar sujeto a una acci&oacute;n disciplinaria hasta e incluyendo la terminaci&oacute;n si me involucro en una discriminaci&oacute;n ilegal o acoso .</h3>
			<input type="radio" name="q6" value="a">Verdadero<br>
			<input type="radio" name="q6" value="b">Falso<br>
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