<?php
	//check that user is logged in
	session_start();
	if(!isset($_SESSION['user'])){
		//if there is not a user logged in - redirect to main login page
		header("Location: http://intranet/Training");
	}
?>

<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>Preventing Harassment in the Workplace</title>

		<meta name="author" content="Donerys Cuevas & Dante Marone">

		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		 
		<link rel="stylesheet" href="../css/reveal.min.css">
		<link rel="stylesheet" href="../css/theme/EZ.css" id="theme">
		<link rel="stylesheet" href="../css/theme/EZAdtl.css">
		
		<script src="../imagePlay.js" type="text/javascript"></script>

		<!-- For syntax highlighting -->
		<link rel="stylesheet" href="../lib/css/zenburn.css">

		<!-- If the query includes 'print-pdf', include the PDF print sheet -->
		<script>
			if( window.location.search.match( /print-pdf/gi ) ) {
				var link = document.createElement( 'link' );
				link.rel = 'stylesheet';
				link.type = 'text/css';
				link.href = 'css/print/pdf.css';
				document.getElementsByTagName( 'head' )[0].appendChild( link );
			}
		</script>
		
		<style>
			body{
				background: url("../resources/swoop.png");
				background-size: 100%;
				background-repeat: no-repeat;
			}
			
		</style>
		

		<!--[if lt IE 9]>
		<script src="../lib/js/html5shiv.js"></script>
		<![endif]-->
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

		<div class="reveal">

			<!-- Any section element inside of this container is displayed as a slide -->
			<div class="slides">
				<section>
					<h3>E-Z Rent-A-Car</h3>
					<h1>PREVENIR EL ACOSO EN EL LUGAR DE TRABAJO</h1>
					
				</section>
				
				<section>
					<h2>NAVEGAR POR ESTA PRESENTACIÓN </h2>
					<p>Utilice las flechas del teclado para navegar izquierda y derecha a través de las diapositivas <br><img src="../resources/arrowsKeyboard.png"></p><br>
					<p class="fragment roll-in">También puede utilizar las flechas en la parte inferior derecha para avanzar o reproducir diapositivas </p>
				</section>
				
				<section style="background-color: #ffffff; color: #000000;">
					<div style="float: left;">
						<h2>pretest</h2>
						<p style="font-size: .75em">Por favor, marque verdadero o falso para cada una.</p>
						<p>Un ambiente hostil permite que la empresa complete mas más trabajo.  <input type="checkbox">V or <input type="checkbox">F</p>
						<p>Yo no soy responsable de un ambiente hostil.   <input type="checkbox">V or <input type="checkbox">F</p>
						<p>Ser un hombre, una hembra no puede causarme a tener un ambiente hostil.  <input type="checkbox">V or <input type="checkbox">F</p>
						<p>Sólo el supervisor (s) tendrá que ir a la corte a través de una demanda judicial de ambiente hostil.  <input type="checkbox">V or <input type="checkbox">F</p>
						<p>La diversidad en el lugar de trabajo no es importante para los objetivos de la compania.   <input type="checkbox">V or <input type="checkbox">F</p>
					</div>
				</section>
				
				<section>
					<p>Un ambiente de trabajo hostil no sirve ningún propósito bueno e interfiere con el progreso de E-Z Rent-a-Car. </p>
					<br>
					<p>La prevención / eliminación de acoso es la responsabilidad de <br><h2>TODOS</h2></p>
				</section>
				
				<section>
					<p>Tenemos que <span style="font-size: 1.5em;">aprender </span> qué hacer</p>
					<br>
					<p>No se convierta en el próximo caso!</p>
					<br>
					<p style="margin-left: 25%">o peor</p>
					<br>
					<p style="background-color: #1c5ba8; margin: 0 auto; width:50%; border: 5px solid #ffffff;">El siguiente <span style="text-decoration: underline; color: #ff0000; font-size: 1.5em;">caso TRIBUNAL</span></p>

				</section>
				
				<section style="text-align: left">
					<h2>OBJETIVOS DEL CURSO:</h2>
					<p>Darse cuenta de la importancia de las políticas de EZ Rent-A-Car y la ley. </p>
					<br>
					<p><span style="text-decoration: underline;">Para que todos los empleados sepan </span> que tienen derecho a trabajar en un ambiente de respeto.</p>
					<br>
					<p>Para examinar nuestras actitudes, creencias y acciones hacia aquellos que son diferentes. </p>
					<br>
					<p>Conocer los diferentes tipos de acoso.</p>
				</section>
				
				<section>
					<h2>OBJETIVOS DEL CURSO CONT. </h2>
					<p>Entender cuyo trabajo es <span style="color: #ff0000; text-decoration: underline;">detener</span> el acoso.</p>
					<br>
					<p>Entender que se es espera cuando el acoso occure.</p>
					<br>
					<p>entender como lirriar cuando occure.</p>
				</section>
				
				

				<section>
					<p>Todo debemos estar familiarizado con las consecuencias jurídicas de acoso.</p>
					<br><br>
							 <p>Si usted no esta familiarizado</p>
					<br><br>
					<p>POR FAVOR - solicite las asistencia de la empresa para la revisión de las leyes.</p>
				</section>
				
				<section>
					<h2>las POLÍTICAS de E-Z RENT-A-CAR CON RESPECTO A LOS TIPOS DE ACOSO INCLUYEN: </h2>
					<br>
					<br>
					<ul style="float: left; margin-left: 25%;">
						<li>Libre de conductas ilícitas, como la discriminación y el acoso laboral.</li>
						<li>Responsabilidades </li>
						<li>Tipos de acoso</li>
						<li>Procedimientos para reportar</li>
						<li>Consecuencias</li>
					</ul>
				</section>
				
				
				<!---Continue translating below this line-->

				
				<section>
				<h2>¿QUÉ TIPO DE COMPORTAMIENTO ES INACEPTABLE EN EL LUGAR DE TRABAJO?</h2>
				<p class="fragment fade-in"><span class="fragment fade-out">¿Una palmadita en la espalda?</span></p>
				<p class="fragment fade-in"><span class="fragment fade-out">¿Una pareja de casados se besan delante de de sus compañeros de trabajo?</span></p>
				<p class="fragment fade-in"><span class="fragment fade-out">¿El coqueteo?</span></p>
				<p class="fragment fade-in"><span class="fragment fade-out">¿Carteles políticos?</span></p>
				<p class="fragment fade-in"><span class="fragment fade-out">¿Bromas sobre la religión? </span></p>
				<h3 class="fragment fade-in"> No hay una respuesta clara a esta pregunta </h3>
				</section>
				
				<section>
					<p>¿Cuál es el tipo más común de acoso en el lugar de trabajo de hoy en día? </p>
					<br>
					<h1 class="fragment roll-in"><img src="../resources/sexualHarassment.jpg" width="50%"><br>Acoso sexual</h1>

				</section>
				
				<section>
					<h2>TIPOS DE ACOSO</h2>
					<li>Quid Pro Quo</li>
					<li>Ambiente Hostil</li>
					<li>Mismo Sexo</li>
					<li>Persona Que No Sea Empleado</li>
					<li>Tercero</li>
					<li>Represalias contra otros</li>

					
				</section>
				
				<section>
					<h2>QUID PRO quo acoso</h2>
					<p style="color: #ff0000;">Flagrante - incluso una ocurrencia se considera ilegal</p>
					<br>
					<p>Quid pro quo significa "esto por aquello", y es el acoso que involucra a alguien con autoridad sobre la víctima, utilizando su posición para obtener favores sexuales. 
					<br>
					<br>
					Ejemplo:
					<br>
					Un supervisor exige favores sexuales a cambio de un mejor tratamiento de un subordinado, o amenace al subordinado con el despido, descenso de grado, o transferencia a menos que se les da favores sexuales. 
				</section>
				
				<section>
					<h2>Ambiente Hostil o Acoso</h2>
					<p style="color: #ff0000;">Menos obvio, pero a menudo la base para las acusaciones de acoso sexual.</p>
					<br>
					Ejemplo:
					<br>
					Si la conducta de referencia sexual crea un ambiente de trabajo hostil por otro empleado, esto es acosto sexual. 
				</section>

				<section>
					<h2>Ambiente Hostil o Acoso</h2>
					 <p>Es Probable que los tribunales encuentran un ambiente de trabajo hostil illegal donde haya:</p>
					<p style="color: #ff0000; float: left;">pornografía </p>                            <p style="color: #ff0000; float: right; clear: right;">Lengua vulgar</p>
                      <p style="color: #ff0000; float: right; clear: right;">preguntas embarazosas</p>
					<p style="color: #ff0000; float: left;">Tocar sexual</p>                       <p style="color: #ff0000; float: right; clear: right;">Bromas sexuales</p>
					<p style="color: #ff0000; float: left;">Comentarios Degradantes</p>              <p style="color: #ff0000; clear: both;">Las proposiciones sexuales</p>
				</section>
				
				<section>
					<h2>pendiente resbaladiza</h2>
					<img src="../resources/slipperySlope.png">
				</section>
				
				<section style="font-size: .9em">
					<h2>acoso cibernético</h2>
					<img src="http://intranet.ezrac.com/training/resources/chat.png" style="float: right; width: 30%; border-radius: 10px; margin: 3%;">
					<p><br>Los correos electrónicos, comentarios y fotos que publicas en línea pueden ganar una vida propia y volver en tu contra.</p>
					<p>Tenga en cuenta, no es sólo el lugar de trabajo las actividades que pueden convertirse en un problema. </p>
					<p>Piense con cuidado acerca de cómo participar en actividades fuera del lugar de trabajo puede extenderse a los lugares de trabajo. </p>
					<p>
				</section>
				
				<section style="font-size: .9em">
					<h2>acoso cibernético</h2>
					<img src="http://intranet.ezrac.com/training/resources/chat2.png" style="width: 30%; float: left; border-radius: 10px;">
					<div style="width: 65%; float: right;">
						<p>Sea consciente de acoso en línea a través de medios electrónicos, tales como:</p>
						<ul style="float: left;">
							<li>Mensajes de texto 
							<li>Facebook y otros medios sociales 
							<li>Conversaciones cibernetico 
							<li>Mensajes instantáneos 
							<li>Correo electrónico 
						</ul>
					</div>
					<p style="clear: both;">El acoso cibernético puede causar un lugar de trabajo hostil y crear animosidad entre los compañeros de trabajo</p><br>
					<p style="clear: both;">El acoso en línea es acoso. (online harassment is harassment)</p>
				</section>
				
				<section>
					<h2>Grave o dominante</h2>
					<p>La conducta del acosador debe ser severo o penetrante para ser clasificado como acoso.</p>
					<br><br>
					<p>Anque una sola solicitud que no sea deseada o un commentario sexual podria offender o sea inappropriado, puede que no sea acoso sexual. Sin embargo, una serie de incidentes separados relativamente menores pueden sumar al acoso si los incidentes afectan a su entorno de trabajo. </p>
				</section>
				
				<section>
					<h2>Acoso no-SEXUAL</h2>
					<p>Conducta no sexual también puede ser el acoso sexual si está acosado porque usted es mujer, en lugar de hombre, o porque usted es hombre, en lugar de la hembra. </p>
					<br>
					<br>
					<p>Por ejemplo, puede ser el acoso sexual si usted es un hombre que trabaja como agente de servicio de limpieza de los coches en un equipo de todas hembras, y a usted es el unico que con frecuencia les ocultan las herramientas por sus companeras de trabajo.</p>
				</section>
				
				<section>
					<h2>Preguntas que debe hacerse</h2>
					<div class="floatLeft">
						<ul style="float: left;">
						<li>¿Cuántas veces se produjeron los incidentes?</li>
						<li>¿Cuanto tiempo lleva que el Acosta a estado sucediendo?</li>
						<li>¿Cuántos otros han sido acosados?</li>
						<li>¿Quiénes fueron los testigos del acoso?</li>
						</ul>
					</div>
					<div class="floatRight">
						<img src="../resources/sexualHarassment2.jpg">
					</div>
				</section>
				
				<section>
					<h2>ACOSO DEL MISMO SEXO</h2>
					Acoso de hombre a hombre, y de  mujer a  otra mujer.
					<br>
					<br>
					En 1998 la Corte Suprema declaró que el acoso entre personas del mismo sexo es ilegal y no será tolerado.

				</section>
				
				<section>
					<h2>ACOSO NO EMPLEADO</h2>
					<p>Acoso en el trabajo por un no-empleado, por ejemplo, Los vendedores, clientes o visitantes no es una conducta excusable.<p>
					<br>
					<br>
					<p>Acoso en el trabajo por un no-empleado puede llevar a acusaciones de acoso, así como se fuera un empleado. </p>
				</section>

				<section>
					<h2>Acoso de tercera persona</h2>
					Comportamiento que no se encuentra ofensivo por parte de algunos,  puede facilitar un ambiente ofensivo para otros. 
					<br><br>
					<img src="../resources/3rdParty.jpg"><br>
					ejemplo: 
					<br>
					Un grupo de epleados que hablan de la vida sexual de ellos, o chistes etnicos o creencias religiosas en la presencia de otras personas que se siente muy incomodo, con la conversaciion.
				</section>
				
				
				<section>
					<h2>OTROS TIPOS DE ACOSO</h2>
					<p style="float: left; clear: left;">raza </p>                        <p style="float: right; clear: right;">discapacidad </p>
					<p style="float: left; clear: left;">religión </p>                    <p style="float: right; clear: right;">Orientación Sexual </p>
					<p style="float: left; clear: left;">origen Nacional</p>        <p style="float: right; clear: right;">embarazo</p>
					<p style="float: left; clear: left;">edad </p>                               <p style="float: right; clear: right;">Apariencia física </p>
								 <p style="clear: both;">Afiliación Política</p>
				</section>
				
				<section>
					<h2>DISCRIMINACIÓN Y LA LEY</h2>
					<p>En 1964 el Congreso aprobó la Ley de Derechos Civiles que prohíbe la discriminación en el lugar de trabajo basado en 5 características protegidas: </p>
					<br><br>
					<ul>
						<li>Raza </li>
						<li>Color </li>
						<li>Religión </li>
						<li>Origen Nacional </li>
						<li>Sexo </li>
					</ul>
				</section>
				
				<section>
					<h2>CARACTERÍSTICAS AÑADIDas </h2>
					<p>Con los años esta lista para incluir otras características protegidas añadidas por las leyes federales, estatales y leyes locales <p>
					<br>
					<li>Discapacidades 
					<li>Edad 
					<li>Información Genética 
					<br><br>
					<p>El acoso basado en una característica se considera discriminación, ya que desalienta a los empleados</p>
				</section>
				
				<section>
					<h2>Raza / color</h2>
					<p>DeFINIDA COMO ASCENDENCIA O CARACTERISTICAS  etnicas de una persona<p>
					<img src="../resources/colorHarassment.jpg">
					<p>Como todos somos miembro de una raza o somos de un color determinado, todos somos de esta categoria.</p>
					
				</section>
				
				<section>
					<h2>RELIGIÓN </h2>
					<p>se define ampliamente como creencias morales o éticas de un individuo. </p>
					<img src="../resources/faith.jpg" width="50%">
					<p>La ley ofrece protección a los grupos o individuos que no pertenecen a las religiones tradicionalmente reconocidos. Para estar protegido por la ley, estas creencias deben rendir sinceramente con la fuerza de los valores religiosos tradicionales. </p>
				</section>
				
				<section>
					<h2>EDAD </h2>
					<p>Se define como el número de años transcurridos desde el nacimiento de una persona. </p>
					<img src="../resources/ageDiscrimination.jpg" width="60%">
					<p>La ley federal sólo protege a las personas mayores de 40 años de edad. </p>
				</section>
				
				<section>
					<h2>DISCAPACIDAD </h2>
					<p>Se define como una condición física o mental que limita sustancialmente una o más actividades importantes de la vida. </p>
					<img src="../resources/disabled.jpg">
					<p>Debe interferir significativamente con la vida de una persona a ser protegida por la ley </p>
				</section>
				
				<section>
					<h2>ORIENTACIÓN SEXUAL </h2>
					<p>Se define como la preferencia sexual de una persona </p>
					<img src="../resources/orientation.png">
				</section>
				
				<section>
					<h2>EMBARAZO</h2>
					<img src="../resources/pregnancy.jpg">
					<p>Las leyes estatales y federales protegen el embarazo (incluso la posibilidad de embarazo), parto y condiciones médicas relacionadas. </p>
				</section>
				
				<section>
					<h2>afiliación política</h2>
					<p>Tratar a alguien de manera diferente en función de su afiliación política es ilegal </p>
					<img src="../resources/political.jpeg">
					<p>Lo mejor es mantener a los sujetos de la materia político fuera del lugar de trabajo </p>
				</section>
				
				<section>
					<h2>APARIENCIA FÍSICA </h2>
					<img src="../resources/facialFeatures.jpg">
					<p>Como una personsa se parece. Estructura de color del pelo facial, altura, tipo de cabello, etc ... </p>
				</section>
				
				<section>
					<h2>VETERANO / ESTADO MILITAR </h2>
					<img src="../resources/veteran.jpg">
					<p>La ley protege a la discriminación de las personas que han servido o sirven en las fuerzas armadas de nuestra nación </p>
				</section>
				
				<section>
					<h2>ESTADO DE CIUDADANÍA </h2>
					<img src="../resources/residentAlien.gif">
					<p>Es ilegal prohibir el empleo o promociones basadas en la ciudadania de una persona.</p>
				</section>
				
				<section>
					<h2>REPRESALIAS </h2>
					<p>La represalia ocurre cuando alguien es tratado injustamente después de iniciar una queja de acoso </p>
					<br>
					<p>Este trato injusto puede venir en varias formas: rehuir, evitar o ostracismo, o dar la espalda </p>
					<br>
					<p>La ley es clara: La represalia es ilegal. </p>
					
				
				</section>
				
				<section>
				<h2>EL LUGAR DE TRABAJO DEBE SER un lugar respetable.</h2>
					<p>Gastamos una cantidad significativa de tiempo en nuestro lugar de trabajo. <p>
					<br>
					<br>
					<p>Muchos de nuestros puestos de trabajo ya son estresantes sin el estrés añadido de acoso. <p>

				</section>
				
				<section>
					<h2>¿PORQUE COMPORTAMIENTO RESPETUOSO?</h2>
					<li>Nadie quiere trabajar en un entorno en el que él o ella se Siente acosado y incomodo.</li>
					<br>
					<li>El comportamiento respetuoso facilita que los empleados sean más productivos. </li>
					<br>
					<li>el comportamiento de acoso irrespetuoso puede costar al autor su trabajo. </li>
				</section>
				
				<section>
				<h2>¿PORQUE COMPORTAMIENTO RESPETUOSO?</h2>
				<li>Los estudios demuestran que el 50% de los casos de acoso sexual los compañeros de trabajo o compañeros eran los presuntos acosadores. </li>
					<br>
				<li>En sólo el 26% participo el supervisor inmediato. </li>
					<br>
				<li>La reforma de 1991 con el Título VII del Acto de Derechos Civiles de 1964 permite a las víctimas a recuperar daños punitivos. </li>
					<br>
				<li>demandas por acoso suelen tener consecuencias personales, legales y financieros para el acosador. </li>
				</section>
				
				<section>
				Sería mejor parar: 
				<br>
				<br>
				<img src="../resources/stopHarassment.png" style="border: 5px solid #ffffff; width: 50%;">
				</section>
				
				<section>
				Los bloques de construcción<br><br>
				<div style="background-color: #1c5ba8; padding: 5px; border: 5px solid #ffffff; width:30%; margin: 0 auto;">EL<br>
				 LUGAR DE TRABAJO RESPETUOSO </div>
				 <div style="background-color: #1c5ba8; padding: 5px; width: 40%; margin: 0 auto;">apreciar la diversidad </div>
				 <div style="background-color: #1c5ba8; padding: 5px; width: 50%; margin: 0 auto;">DIFERENCIAS ACEPTAR </div> 
				 <div style="background-color: #1c5ba8; padding: 5px; width: 75%; margin: 0 auto;">IGUALDAD</div>
				 <br>
				 <p>La base de la igualidad, de aceptar a nuetras diferencias, y apreciando nueastra diversidad permitira pas en nuestro lugar de trabajo.</p>
				</section>
				
				<section>
				¿Cómo <span style="font-size: 2em; text-decoration: underline;">detenemos</span> comportamiento irrespetuoso?
				</section>
				
				<section>
					<h1>S<br>
					T<br>
					O<br>
					P<br></h1>
				</section>

				<section>
					<div style="float: left;"><h1>S<br>
					T<br>
					O<br>
					P<br></h1></div>
					<br>
					<p style="float: left">ource</p>
					<br>
					<br>
					<br>
					<br>
					<div style="font-size: .8em; width: 70%; position: absolute; top: 10%; left: 30%;">La persona que tiene la conducta irrespetuosa tiene la responsabilidad de dejar de comportarse de tal manera. 
					<br>
					<br>¿Pero, qué pasa y <span style="text-decoration: underline;">nosotros</span>?<br><br> ¿Somos parte del problema?    <br><br>¿Hemos añadido a la conducta irrespetuosa?</div>
				</section>
				
				<section>
				<div style="float: left;">
				<h1>S<br>
					T<br>
					O<br>
					P<br></h1></div>
					<br>
					<br>
					<br>
					<br>
					<div style="float: left;">arget</div><br>
					<br>
					<div style="font-size: .8em; width: 70%; position: absolute; top: 10%; left: 30%;">El acosado debe ayudar a enfrentar el acoso / acosador! Si nos sentimos ofendidos por las acciones o palabras de otros, tenemos que hacerles saber y pedir que se detengan. <br>
					<br>
					<p>No tenga miedo de hacer frente a su acosador. </p>
					<br>
					CONDISDER ESTO: <br>
					La persona de la conducta irrespetuosa quisas ni siqiera sabe que su comportamiento es ofensivo para nosotros. ¿Cómo puede esta persona corrige su comportamiento si él o ella no es consciente de su impacto? </div>
				</section>
				
				<section>
				<div style="float: left;">
				<h1>S<br>
					T<br>
					O<br>
					P<br></h1></div>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<div style="float: left;">bserve</div><br>
					<div style="font-size: .8em; width: 70%; position: absolute; top: 10%; left: 30%;">Los que observan el comportamiento irrespetuoso o Acosamiento tienen las responsabilidad de evitar que cuando se produce; y uno se da cuenta reporter, NUNCA un expectador sera inocente!
					<br>
					<br>
					Es simplemente lo  mas correcto que hacer.
					<br>
					<br>
					Cuando observamos una conducta de acoso podemos pensar que debemos permanecer fuera de él y  que  no es asunto nuestro. Esta es la actitud  muy equivocada  
					<br>
					<br>
					Un lugar de trabajo respetuoso es un asunto de todos. </div>
				</section>
				
				<section>
				<div style="float: left;">
				<h1>S<br>
					T<br>
					O<br>
					P<br></h1></div>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<div style="float: left;">erson in authority</div><br>
					<div style="font-size: .8em; width: 70%; position: absolute; top: 10%; left: 30%;">
					Cada persona en autoridad tiene el deber de mantener el lugar de trabajo libre de acoso y conducta ofensiva. 
					<br>
					<br>
					Incluso si usted no es el supervisor de la persona, usted todavía tiene la responsabilidad de detener el acoso si observa o si recibe la queja. Tu mismo te abres a reponsabilidad si recibes una queja y no reportas adecuadamente.
					<br>
					<br>
					Cada persona con autoridad tiene una reponsabilidad crucial para crear un lugar de trabajo repetuoso.
					</div>
				</section>
				
				<section>
					<h2>PASOS PARA LAS VICTIMAS</h2>
					<p>¿Qué debe hacer si se siente acosado? <p><br>
					<ul style="float: left;">
						<li>Diga algo de inmediato </li>
						<li>Dígale al acosador </li>
						<li>Dígale a su jefe </li>
						<li>Dígale al jefe de su supervisor si su supervisor es el problema </li>
						<li>Obtenga ayuda de recursos humanos o en cualquier lugar hasta la "cadena de mando" </li>
					</ul>					
				</section>
				
				<section>
					<h2>TOMAR MEDIDAS</h2>
					<p>Tomar medidas, no deje que el comportamiento continúe. 
					<br><br>
					<p>Si usted no se siente cómodo diciéndole al acosador directamente, póngase en contacto con su jefe o los recursos humanos en busca de ayuda. 
					<br><br>
					<p>Los números telefónicos de recursos humanos y funcionarios de la empresa se pueden encontrar en la guía telefónica en la intranet de E-Z Rent-A-Car: </p>
					<br>
					<h3>HTTP://INTRANET.EZRAC.COM/</h3>
				</section>
				
				<section>
				Cuidado con lo que dices ... <br><br>CÓMO lo dices ............... <br><br>Antes de hablar! 
				<img src="../resources/speakNoEvil.png">
				</section>
				
				<section>
				<h2>E-Z Rent-A-Car <br>PREVIENE  EL ACOSO EN EL LUGAR DE TRABAJO</h2>
				<p>Estamos comprometidos a proporcionar un lugar de trabajo libre de discriminación ilegal, acoso y represalias. El entrenamiento de acoso que ha recibido hoy es una parte de ese esfuerzo. Por favor, tome la prueba de entrenamiento para completar su información. </p>
				<br>
				<br>
				<a href="../Quizzes/harassmentExam_es.php" class="button">Tome el Examen</a>
				</section>
				

				
				
			</div>

		</div>

		<script src="../lib/js/head.min.js"></script>
		<script src="../js/reveal.min.js"></script>

		<script>

			// Full list of configuration options available here:
			// https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				controls: true,
				progress: true,
				history: true,
				center: false,
				slidenumber: true,
				hideAddressBar: true,

				theme: Reveal.getQueryHash().theme, // available themes are in /css/theme
				transition: Reveal.getQueryHash().transition || 'default', // default/cube/page/concave/zoom/linear/fade/none

				// Parallax scrolling
				// parallaxBackgroundImage: 'https://s3.amazonaws.com/hakim-static/reveal-js/reveal-parallax-1.jpg',
				// parallaxBackgroundSize: '2100px 900px',

				// Optional libraries used to extend on reveal.js
				dependencies: [
					{ src: '../lib/js/classList.js', condition: function() { return !document.body.classList; } },
					{ src: '../plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: '../plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: '../plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
					{ src: '../plugin/zoom-js/zoom.js', async: true, condition: function() { return !!document.body.classList; } },
					{ src: '../plugin/notes/notes.js', async: true, condition: function() { return !!document.body.classList; } }
				]
			});

		</script>

	</body>
</html>
