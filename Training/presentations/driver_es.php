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

		<title>REGULACIONES DEL CONDUCTOR</title>

		<meta name="description" content="Excellent Vehicle Condition">
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
		

		<!--[if lt IE 9]>
		<script src="../lib/js/html5shiv.js"></script>
		<![endif]-->
		
		<style>
		.floatRight{
		width: 48%;
		float: right;
		}

		.floatLeft{
			width: 48%;
			float: left;
		}
		</style>
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
					<h3>regulaciones DEL CONDUCTOR</h3>
					<h1>CONDICIÓN VEHÍCULO EXCELENTE</h1>
				</section>
				
				<section>
					<h2>NAVEGACIÓN POR ESTA PRESENTACIÓN</h2>
					<p>Usa las flechas del teclado para navegar izquierda y derecha a través de las diapositivas <br><img src="../resources/arrowsKeyboard.png"></p><br>
					<p class="fragment roll-in">También puede utilizar las flechas en la parte inferior derecha para avanzar o reproducir diapositivas</p>
				</section>
				
				<section>
					<div class="floatLeft">
						<h2>SE TOMA UN EXAMEN</h2>
						<p>Esta información va acompañada por un examen que usted debe tener una puntuación de 100% en pasar.</p><br>
						<p>Siéntase libre de tomar notas a medida que avanza a través de los módulos de información - puede utilizar sus notas en el examen.</p>
					</div>
					<div class="floatRight">
						<img src="../resources/EZTraining.png">
					</div>
				</section>
				
				<section>
						<h2>SU PAPEL</h2>
					<ul>	
						<li class="fragment roll-in">Como conductor, usted tiene un papel vital en nuestra organización.</li>
						<li class="fragment roll-in">Sus principales funciones son asegurar  presentación fantástica de vehículos y la transportación eficiente de vehículos hacia y desde el área de servicio, mantenimiento y áreas de retorno.</li>
						<li class="fragment roll-in">A veces también tendrá que ayudar a los pasajeros con los problemas de los vehiculos.</li>
					</ul>
					<img src="../resources/driver.jpg">
				</section>
				
				<section>
					<div class="floatLeft">
						<ul>	
							<li class="fragment roll-in">Habrá momentos en que los clientes pueden solicitar su asistencia. Si usted no puede asistirlos, asegúrese de encontrar a un empleado que los pueda asistir.</li>
							<li class="fragment roll-in">Ofrecer siempre un servicio con una sonrisa.</li>
							<li class="fragment roll-in">Recuerde: El tiempo del cliente es valioso </li>
						</ul>
					</div>
					<div class="floatRight">
						<img src="../resources/smileElectric.png">
					</div>
				</section>
						
				
				<section>
					<h2>RESPONSABILIDADES DEL CONDUCTOR</h2>
					<div class="floatRight">
						<ul>
							<li class="fragment roll-in">Presentación</li>
							<li class="fragment roll-in">Comprobación de las luces de servicio</li>
							<li class="fragment roll-in">Avastecimiento de gasolina de los vehículos</li>
							<li class="fragment roll-in">Inspección de los daños</li>
							<li class="fragment roll-in">Completando el check-in / check-out slip</li>
							<li class="fragment roll-in">El transporte de vehículos hacia y desde el área de retorno, área de servicio, áreas de mantenimiento fuera del sitio y el acomodo de los vehículos en la línea</li>
						</ul>
					</div>
					<div class="floatLeft">
						<img src="../resources/uniformAgent.png">
						<li class="fragment roll-in">Conducir y asistir a los clientes en caso de un breakdown</li>
					</div>
				</section>
				
				<section>
					<h2>SERVICIO AL CLIENTE</h2>
					<div class="floatLeft">
						<p class="fragment roll-in">Al recoger un vehículo para ser limpiado, si el cliente se encuentra todavía en el vehículo, debemos hacer contacto visual, darles la bienvenida con una sonrisa, y preguntarles si usted puede llevar el vehículo a limpiar. Desarles  al cliente un maravilloso día y proceder.</p>
					</div>
					<div class="floatRight">
						<img src="../resources/smile.png">
					</div>
				</section>
				
				<section>
					<h2>CONDUCTOR</h2>
					<div class="floatLeft" style="font-size: .9em;">
						<ul>
							<li class="fragment roll-in">llevará a cabo los servicios de mantenimiento no mecánicos regulares tales como:
								<ul>
								<li class="fragment roll-in">Comprobación y mantenimiento de presión de los neumáticos</li>
								<li class="fragment roll-in">Asegurar que todas las luces de mantenimiento esten apagadas</li>
								<li class="fragment roll-in">Avastecimiento de gasolina de los vehículos de una manera segura</li> 
								</ul></li>
							<li class="fragment roll-in">También identificar y reportar cualquier daño al vehículo</li>						
						</ul>
					</div>
					<div class="floatRight">
						<img src="../resources/oilCheck.jpg">
					</div>
					<p class="fragment roll-in">Deberes esenciales y responsabilidades pueden variar según la ubicación</p>
				</section>
				
				<section>
					<h2>INSPECCION DE  DAÑOS</h2>
					<ul>
						<li class="fragment roll-in">El gasto de los daños de Seguros y de vehículos es uno de los gastos más grandes en la industria del alquiler de coches. Su trabajo es ayudar a controlar este gasto y seguir sistemáticamente los procedimientos de E-Z Rent-A-Car que indicamos en los Procedimientos Operativos y en los siguientes ejemplos.</li>
						<li class="fragment roll-in">Antes de la entrega de un vehículo a la línea  por favor inspeccionar y documentar los detalles de la condición del vehículo y buscar nuevos daños en el vehículo.</li>
						<li class="fragment roll-in">Antes de recoger un vehículo de la línea de retorno y su transporte a la línea de servicio, compruebe si el vehículo tiene daños.</li>
						<img src="../resources/moneyBags.png" style="position: absolute; top: 70%; left: 90%; width: 10%;">
					</ul>
				</section>
				
				<section>
					<div class="floatLeft">
						<p>En otras palabras: <span style="text-decoration: underline;">cada vez que se mueve un vehículo, primero debe comprobar si hay nuevos daños en el vehículo.</span></p>
						<li class="fragment roll-in">Comience en la parte delantera del vehículo y camine hacia a la izquierda</li>
						<li class="fragment roll-in">Compruebe si hay abolladuras, arañazos y grietas</li>
						<li class="fragment roll-in">Reporte cualquier daño a un vehículo al kiosco o a un supervisor o usted será responsable.</li> 
					</div>
					<div class="floatRight">
						<img class="fragment roll-in" src="../resources/arrowTop.png">
						<img src="../resources/vehicle.png" style="position: relative; top:-80px;">
						<img class="fragment roll-in" src="../resources/arrowBottom.png" style="position: relative; top:-120px;">
					</div>
				</section>
				
				<section>
					<h2>VEHÍCULO check-out slip</h2>
					<div style="float: left; width: 40%;">
						<img src="../resources/vehicleCheck-OutSlip.png">
					</div>
					<div style="float: right; width: 55%;">
						<ul>
							<li class="fragment roll-in">Cada vehículo tendrá un deslizamiento del vehículo adjunto a las llaves.</li>
							<li class="fragment roll-in">Las siguientes areas deben ser completadas por el conductor antes de presentar las llaves para el agente de contador / kiosco
							<ul>
								<li class="fragment roll-in">Fecha de hoy </li>
								<li class="fragment roll-in"># del espacio</li>
								<li class="fragment roll-in"># de vehiculo</li>
								<li class="fragment roll-in">Millaje fuera (¡Importante!)</li>
								<li class="fragment roll-in">Nivel de gasolina</li>
							</ul></li>
							</ul>
					</div>
				</section>

				
				<section>
					<div style="float: left; width: 55%;">
						<ul>
							<li class="fragment roll-in">Cualquier abolladuras o daños deben estar marcados con los siguientes códigos en el diagrama de vehículo:
							<ul>
								<li class="fragment roll-in">X – Abolladuras,</li>
								<li class="fragment roll-in">M – Faltantes</li>
								<li class="fragment roll-in">O – Rasguños</li>
							</ul></li>
							<li class="fragment roll-in">Firme su nombre en la sección de Remarks</li>
							<li class="fragment roll-in">Recuerde, éstas son copias al carbón. Por favor no doble.</li>
						</ul>
					</div>
					<div style="float: left; width: 40%;">
						<img src="../resources/vehicleCheck-OutSlip_Complete.png">
					</div>
				</section>
				
				<section>
					<div style="width: 55%; float: left;">
						<h2>Etiquetas de las Llaves</h2>
						<p>Es muy importante que todas las llaves tengan una etiqueta adjunta.</p>
						<p>Si el vehículo no tiene una etiqueta de la llave o la etiqueta de la llave está dañada o es ilegible, notifica a un supervisor para conseguir que se sustituya.</p>
					</div>
					<div style="width: 40%; float: right;">
						<img src="../resources/keyTag.png">
					</div>
				</section>
				
				<section>
					<h2>MIRE ANTES DE TOCAR!</h2>
					<p class="fragment roll-in">Compruebe siempre visualmente debajo de los asientos / bolsillos de los asientos / guanteras / etc ... antes de alcanzar el interior como el cliente puede haber dejado algo peligroso:</p>
						<ul>
							<li class="fragment roll-in">Jeringas / Agujas</li>
							<li class="fragment roll-in">Armas</li>
							<li class="fragment roll-in">Narcóticos</li>
							<li class="fragment roll-in">Animales Exóticos</li>
						</ul>
						<img src="../resources/warning.png" style="position: absolute; top: 50%; right: 15%; width: 15%;">
					<p class="fragment roll-in">Nunca toque las armas y narcóticos dejados en un vehículo. Informe a su supervisor inmediato.</p>
				</section>
				
				<section>
					<div class="floatLeft" style="width: 60%;">
						<h2>Objetos PERDIDOS</h2>
						<p>Al recoger los vehículos sucios:</p>
						<ul>
							<li class="fragment roll-in">Revise los asientos delanteros y traseros del vehículo para ver si hay alguna propiedad del cliente</li>
							<li class="fragment roll-in">Busque equipo de E-Z Rent-A-Car, tales como unidades de GPS</li>
						</ul>
						<br><br>
						<p class="fragment roll-in">Si se encuentran articulos, entregue el articulo a su supervisor con el número de unidad del vehículo.</p>
					</div>
					<div class="floatRight" style="width: 39%">
						<img src="../resources/lostAndFound.png" width="50%">
					</div>
				</section>
						
				
				<section>
					<h2>PRESENTACIÓN FINAL del VEHÍCULO </h2>
					<ul>
						<li class="fragment roll-in">Abroche los cinturones (excepto el cinturón de seguridad del conductor) - esto significa que el vehículo fue revisado y se tomaron las medidas de seguridad está en condiciones de trabajo</li>
						<li class="fragment roll-in">Apague la radio</li>
						<li class="fragment roll-in">Asegúrese de que las ventanas esten cerradas
						<li class="fragment roll-in">Ajustar la configuración de control climático a niveles adecuados para las condiciones climáticas</li>
						<li class="fragment roll-in">Estacionar los vehículos de acuerdo con las directrices de su ubicación</li>
						<li class="fragment roll-in">El exterior del vehículo debe estar en buenas condiciones de limpieza a la entrega</li>
					</ul>
				</section>
				
				<section>
					<div class="floatRight">
						<h2>EXCELENCIA ES LA ÚNICA OPCIÓN</h2>
						<p class="fragment roll-in">La forma en que se realice su trabajo afecta directamente a las opiniones de nuestra empresa</p>
						<br>
						<p class="fragment roll-in">Asegúrese de que todo este perfecto para nuestros clientes</p>
					</div>
					<div class="floatLeft">
						<img src="../resources/survey.png">
					</div>
				</section>
				
				
				<section>
					<h2>ASISTENCIA EN CARRETERA / BREAKDOWNS</h2>
					<div class="floatRight">
						<p class="fragment roll-in">Parte de la responsabilidad del agente de servicio  incluye proporcionar asistencia rapida a nuestros clientes</p><br>
						<p class="fragment roll-in">Siempre ofrecer asistencia en carretera con una sonrisa. Pedir disculpas al cliente por la inconveniencia y asegurarles que 
 <br>E-Z Rent-A-Car entiende el valor de su tiempo</p><br>
					</div>
					<div class="floatRight" style="font-size: .75em;">
						<img src="../resources/vehiclePush.jpg">
						<p class="fragment roll-in">Más información sobre los procedimientos de breakdown se puede encontrar en el módulo de breakdowns</p>
					</div>
				</section>
				
				<section>
					<div style="width: 55%; float: left;">
						<h2>SEGURIDAD VEHICULAR</h2>
						<ul>
							<li class="fragment roll-in">Siempre opere vehículos de una manera segura. Esto es especialmente importante al momento de retirar un vehículo de nuestras áreas de retorno</li>  
							<li class="fragment roll-in">A los clientes en los retornos muy a menudo estan en carrera para cumplir con sus vuelos y están menos atentos de lo que sucede a su alrededor</li>
						</ul>
					</div>
					<div style="width: 40%; float: right;">
						<img src="../resources/safetyPolice.png">
					</div>
				</section>
				
				<section>
					<h2>SEGURIDAD VEHICULAR</h2>
					<div class="floatRight">
						<ul>
								<li class="fragment roll-in">Cuando estacione un vehículo,  siempre debe asegurar que hay suficiente espacio para caminar alrededor de ellos y entrar / salir.</li>
								<li class="fragment roll-in">Nunca es buena idea 'bump bumpers'</li>
								<li class="fragment roll-in">Es contra la política de la empresa el usar un teléfono celular o dispositivo electrónico cuando se conduce un vehículo de motor</li>
						</ul>
					</div>
					<div class="floatLeft">
						<img src="../resources/noPhone.png" width="75%">
						<p style="font-size: .75em;">Siempre mantener una velocidad legal y seguir las reglas de la carretera y el aeropuerto / empresa al conducir un vehículo</p>
					</div>
				</section>
				
				<section style="font-size: .8em">
					<p>La política de E-Z Rent-A-Car requiere que todos los empleados deben:
					<ul>
						<li class="fragment roll-in">Tener identificacion de la compania.</li>
						<li class="fragment roll-in">Tener la licencia de conducir cuando se conduce el vehículo</li>
						<li class="fragment roll-in">No estar bajo la influencia de cualquier  sustancias que alteran la mente durante el servicio (E-Z Rent-A-Car es un lugar de trabajo libre de drogas)</li>
						<li class="fragment roll-in">Siempre mantener una velocidad legal, seguir las reglas de la carretera, y acatar las normas del aeropuerto al conducir un vehículo</li>
					</ul>
					<div class="fragment roll-in"><img src="../resources/driveCrazy.png"><p>Nunca maneje de manera insegura en un vehículo de la compañía</p></div>
				</section>
				
				<section>
					<h2>ACCIDENTES</h2>
					<div class="floatRight">
						<p class="fragment roll-in">Si usted está involucrado en un accidente, es política  de E-Z Rent-A-Car  informar inmediatamente a su director en funciones y hacer un informe de accidente el cual debe ser presentado</p><br>
						<p class="fragment roll-in">Si usted está involucrado en un accidente fuera de la propiedad debe llamar de inmediato a la policía para obtener un informe y al gerente de su ubicación</p><br>
					</div>
					<div class="floatLeft">
						<img src="../resources/accident.jpg">
						<p class="fragment roll-in">Cualquier empleado involucrado en un accidente puede ser suspendido en espera de una investigación</p><br>
					</div>
				</section>
				
				<section>
					<h2>SEGURIDAD túnel de lavado</h2>
					<ul>
						<li class="fragment roll-in">Conducir el vehículo a través del lavado de coches a una velocidad no superior a 5MPH</li>
						<li class="fragment roll-in">Al salir del túnel de lavado revisar sus alrededores antes de continuar:
							<ul>
								<li class="fragment roll-in">Hacer a una parada completa</li>
								<li class="fragment roll-in">Mira a la izquierda por si se aproxima tráfico / peatones</li>
								<li class="fragment roll-in">Mire a la direcha por si se aproxima tráfico / peatones</li>
								<li class="fragment roll-in">Es mejor esperar unos segundos que salir y chocar con alguien o algo</li>
							</ul></li>
					</ul><br><br>
					<p class="fragment roll-in">Siguiendo los procedimientos de seguridad evitara daños posibles a los vehículos, peatones y a usted!</p>
				</section>
				
				<section>
					<h2>MANTENIMIENTO</h2>
					<div class="floatLeft" style="width: 70%;">
						<ul>
							<li class="fragment roll-in">Asegúrese de revisar:
								<ul>
									<li class="fragment roll-in">Cualquier luces del tablero interior</li>
									<li class="fragment roll-in">Verifique el líquido lavaparabrisas rutinariamente</li>
								</ul></li>
							<li class="fragment roll-in">Revise todas las llantas en busca de desgaste y presión de aire
								<ul>
									<li class="fragment roll-in">Garantizar la seguridad de nuestros clientes es nuestra prioridad. Los vehículos con un desgaste excesivo en los neumáticos pueden causar condiciones de conducción peligrosas.</li>
									<li class="fragment roll-in">Inspeccione visualmente las llantas para ver si están en necesidad de aire y de la banda de rodadura.</li>
								</ul></li>
						</ul>
					</div>
					<div class="floatRight" style="width:29%;">
						<img src="../resources/dashLights.jpg">
					</div>
				</section>
				
				<section>
					<p>Nunca ponga un vehículo en la línea cuando:</p>
					<ul>
						<li class="fragment roll-in">Cualquiera de las luces del tablero están prendidas</li>
						<li class="fragment roll-in">Cuando elneumático no cumple con las regulaciones</li>
						<li class="fragment roll-in">Huele a humo</li>
						<li class="fragment roll-in">Asientos severamente manchados</li>
						<li class="fragment roll-in">AC / calor / "heater" no está funcionando</li>
						<li class="fragment roll-in">No todos los cinturones de seguridad funcionan correctamente</li>
						<li class="fragment roll-in">No este lleno de gasolina(por ubicación)</li>
						<li class="fragment roll-in">No esta  operando correctamente</li>
						<li class="fragment roll-in">Las luces interiores no funcionan</li>
						<li class="fragment roll-in">Le falta cualquier parte del vehículo (parachoques, faros, etc.)</li>
						<li class="fragment roll-in">Sistema de audio no funciona</li>
					</ul>
					<img src="../resources/maintenanceMan.png" style="position: absolute; top: 25%; left: 80%; width: 20%;">
				</section>
				
				<section style="font-size: .9em;">
					<p>Al estacionar vehículos limpios y listos:</p>
					<ul>
						<li class="fragment roll-in">Siempre respete las normas de circulación y las reglas del aeropuerto</li>
						<li class="fragment roll-in">Mantenga siempre el límite de velocidad legal</li>
						<li class="fragment roll-in">Estacione el vehículo en conformidad con las directrices de su ubicación.</li>
						<li class="fragment roll-in">Siempre estar alerto de cualquier cliente y o compañeros de trabajo en su área y prácticar la seguridad primero!</li>
						<li class="fragment roll-in">Estar informado en cuanto a la presentación de sus vehículos (por su ubicación). Vehículos más agredables deberían exponerse a la vista de los clientes.</li>
						<li class="fragment roll-in">Sepa dónde está su almacen para los diferentes vehículos: hard hold, mantenimiento, que se vende(sold) y los vehículos de accidentes</li>
						<li class="fragment roll-in">Preste atención a que clase de vehículos se nesesitan en el área de la línea e informe a su supervisor.</li>
						<li class="fragment roll-in">Nunca use un teléfono celular o los dispositivos electrónicos cuando se conduce un vehículo.</li>
					</ul>
				</section>
				
				<section>
					<p>E-Z Rent-A-Car está comprometido a proporcionar a nuestros clientes con vehículos limpios, seguros y en buenas condiciones mecánicas</p>
					<img src="../resources/carCheck.png">
					<p>Usted es la última comprobación para asegurar que nuestros clientes consigan los vehículos que se merecen</p>
				</section>
				
				<section>
					<img src="../resources/confetti.gif" style="width: 100%; position: absolute; top: 0; left: 0;">
					<h2>¡felicidades!</h2>
					<p>Con esto concluye la información básica para su posición como conductor</p>
					<br>
					<p>Hay mucho más que aprender a través de capacitación en el trabajo y experiencia en el campo</p>
					<br>
					<p>Si usted tiene alguna duda no dude en preguntar a su supervisor</p>
					<br>
					<p>Siéntase libre de hacer referencia a esta información en cualquier momento</p>
					
					
					<a href="../Quizzes/driverExam_es.php" class="button">Tome el Examen</a>
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
