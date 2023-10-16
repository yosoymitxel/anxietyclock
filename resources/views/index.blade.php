<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AnxietyClock</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
	<style>
		span{
			font-family: 'Orbitron', sans-serif;
		}
	</style>
</head>
<body>
  	
	<main id="main" class="">
		<section id="contenedor-reloj" class="w-screen h-screen grid justify-center content-center text-center">		
			<div id="reloj" class="bg-blue-100 p-6 border-slate-100 rounded-lg shadow-lg text-blue-900 h-48 w-48 text-xl grid justify-center content-center text-center">
				<div id="contenedor-hora-minutos">
					<span id="hora">Iniciando reloj</span>
					<span id="minutos"></span>
				</div>
				<div id="contenedor-segundos"class="text-center">
					<span id="segundos"></span>
				</div>
			</div>
		</section>
	</main>
	
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script id="clock.js">
		// Función para generar el reloj
		function generarReloj() {
		  // Actualizamos el reloj cada segundo
		  setInterval(function() {
			actualizarReloj();
		  }, 1000);
		}

		// Función para actualizar el reloj
		function actualizarReloj() {
			// Obtenemos la hora actual
			let hora = new Date().getHours();
			let minutos = new Date().getMinutes();
			let segundos = new Date().getSeconds();

			// Actualizamos el texto de la hora en el reloj
			$('#hora').html(hora < 10 ? '0'+hora : hora)

			// Definimos el tipo de minutos
			if (minutos < 30) {
				minutos = " < 30";
			} else if (minutos === 30) {
				minutos = " : 30";
			} else {
				minutos = " > 30";
			}
			
			$('#minutos').html(minutos)

			// Agregamos el texto de los segundos al div
			$('#segundos').html(segundos < 10 ? '0'+segundos : segundos)
		}

		// Llamamos a la función para generar el reloj
		generarReloj();
	</script>
</body>
</html>




