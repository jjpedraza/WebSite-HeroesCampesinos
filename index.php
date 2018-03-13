<!DOCTYPE html>
<?php 	require("config/config.php"); ?>
<?php 	require("config/funciones.php"); ?>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CENTRAL CAMPESINA HEROES CAMPESINOS DEL BICENTENARIO AC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="config/estilo_base.css" />
	
	<style>
	body {
		margin: 0px; padding: 0px;
		font-family:"Regular";
		font-size: 14pt;
	}
	#afiliacion{
		width: 100%; height:100%;
		padding: 5px;
		position:fixed;
		top:100px;
		z-index:400;

		background-color:white; color: gray;
	}
	input[type='text'], input[type='tel']{
		background-color:transparent;
	}
	#superior2{
		background-color: black; opacity: 0.5;
		color: white;
		width:100%; height:100px;
		position: fixed; top:0px;
		margin: 0px;
		z-index: 100;
	}

	h1 {
		font-size: 14pt; 
		color: white;
	}
	#contenido{
		position: fixed; top:0px;
		width:100%; height:100%;
		z-index: 0;
	}
	#slider{
		position: fixed; top:0px;
		width:100%; height:100%;
		z-index: 0;
		
	}
	#slider img {
		width:100%; height:100%;
	}
	table {
		margin: -2px;
	}
	#menu {
		background-color: transparent;  color: white;
		width:50%; height:30px;
		position: fixed; right: 0px; top:60px;
		font-size: 14pt;

	}
	#menu a {
		margin: 5px;
		color: white;
		vertical-align:middle;
		opacity:0.5;
		font-size:11pt;
	}
	#menu a:hover{
		color:cyan;
		opacity: 1;
		transition: all .4s linear;
	}


	
	
	#quienessomos{
		transition: all .8s linear;
		width:50%;
		background-color:black;
		opacity: 0.6;
		color:white;
		position: fixed;
		top:100px; 
		z-index:200;
		overflow: auto;
		font-size:10pt;
		height:100%
	}

	#logo {
		width: 200px; height:200px;
		position: fixed;
		top:0px; left:0px;
		z-index: 1000;
	}

	#video {
		position: fixed;
		top: 180px; left: 5px;
		border: 1px white solid;
		padding: 2px;

		width: 350px; 
		z-index: 1500;
		background-color: gray;
		opacity: 0.6;
	}
	#video:hover {
		opacity:1;
	}

	#donar {
		position: fixed;
		bottom: 10px; right: 10px;
		border: 0px white solid;
		padding: 2px;

		width: 350px; 
		z-index: 1500;
		background-color: transparent;
		opacity: 0.7;
	}
	#donar:hover {
		opacity:1;
	}
	@media only screen and (max-width:500px) {
			#donar {
				top:150px; right:10px; width:100px;
			}
			#video {
		width:200px;}

		#quienessomos{width:100%; top:140px; background-color:transparent;}
		#contenido img {
			height:800px;
			width: 200%;
			
			
		}


		h1 {
			font-size:10pt;
		}

		#menu {
			background-color: black; opacity: 0.8; 
			width: 100%;
			top:100px;
		}
		#menu a  {font-size: 12pt;}
		input {
			width:100%;
		}
		form div {width:90%;}
		#afiliacion{
		width: 100%; height:100%;
		padding: 5px;
		position:fixed;
		top:130px;
		}
	}
	</style>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 

	<script type="text/javascript">//<![CDATA[
		$(function(){
		    $('#slider img:gt(0)').hide();
		    setInterval(function(){
		      $('#slider img:first-child').fadeOut(0)
		         .next('img').fadeIn(1000)
		         .end().appendTo('#slider');}, 5000);
		});
		//]]>
	</script>



</head>
<body>	
<img id='logo' src='img/logo2.png' style='width:140px; height:90px;'>
	<div id='superior2'>
	
		<table width=100% border=0>
		<tr>
		<td width=200px></td>		
		<td valign=top align=center>
		<h1>CENTRAL CAMPESINA <B>HEROES CAMPESINOS DEL BICENTENARIO </B>AC</h1>

		<div id='menu'>
			<a href='?='>Regresar </a>
			<a href='?pag=quienessomos'>Quienes somos </a>
			<a href='?pag=afiliacion'>Afiliacion </a>
			<a href='?pag=contacto'>Contacto </a>			
		</div>

		</td>
		</tr>
		</table>
	</div>
<script>	
	function cerrar(){		
		document.getElementById('video').style.display='none';
		//alert('x');
	}

</script>

	<div id='contenido'>
	<div id='donar'>
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" value="S7YMDRC933M68">
		<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
		<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
		</form>

	</div>
	<div id='video'>
		<video controls="controls"  autoplay="autoplay" poster="videos/heroes.jpg" style="width:100%" title="Sin título" loop="loop" onended="var v=this;setTimeout(function(){v.play()},300)">
		<source src="videos/heroes.m4v" type="video/mp4" />
		<source src=videos/heroes.webm" type="video/webm" />
		<source src=videos/heroes.ogv" type="video/ogg" />
		<source src=videos/heroes.mp4" />
		<object type="application/x-shockwave-flash" data="videos/flashfox.swf" width="1280" height="720" style="position:relative;">
		<param name="movie" value="videos/heroes.swf" />
		<param name="allowFullScreen" value="true" />
		<param name="flashVars" value="autoplay=true&amp;controls=true&amp;fullScreenEnabled=true&amp;posterOnEnd=true&amp;loop=true&amp;poster=eh5v.files/html5video/Sin_t%C3%ADtulo.jpg&amp;src=Sin_t%25C3%25ADtulo.m4v" />
		<embed src="videos/flashfox.swf" width="1280" height="720" style="position:relative;"  flashVars="autoplay=true&amp;controls=true&amp;fullScreenEnabled=true&amp;posterOnEnd=true&amp;loop=true&amp;poster=videos/heroes.jpg&amp;src=videos/heroes.m4v"	allowFullScreen="true" wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer_en" />
		<img alt="Sin título" src="videos/heroes.jpg" style="position:absolute;left:0;" width="100%" title="Video playback is not supported by your browser" />
		</object>
		</video>



	<span onclick='cerrar();' style='background-color:white; color: gray; padding:4px; margin: 4px; border-radius:5px;cursor:pointer;
	bottom:0px; postition:relative; z-index:1600px;
	'>Cerrar</span>
	</div>	
		<div id="slider">
		<?php
		$directorio = opendir("fotos/"); //ruta actual
		while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
		{
			if (is_dir($archivo))//verificamos si es o no un directorio
			{
			}
			else{
				echo "<img src='fotos/".$archivo."'>";
			}
		}
			
		?>	
		</div>
		
	    
	</div>





	<?php
	
	if (isset($_GET['pag'])){
		if ($_GET['pag']=='quienessomos'){
			echo "<div id='quienessomos' >
			<p>	Somos una Organización Campesina la cual nos dedicamos a la gestión del medio rural y urbano para el desarrollo del mismo.</p>
			<p>Promovemos mediante tecnologías alternativas y sustentables, la producción  nacional de alimentos estratégicos, para la soberanía y seguridad alimentaria de la nación Mexicana.
			</p>
			<p>Al igual impulsamos programas, recursos publico y privados destinados a apoyar el desarrollo de grupos vulnerables en el medio Rural y/o Urbano, hombres, mujeres, niños, jóvenes, discapacitados y ancianos.
			</p>
			<p>Promovemos la Organización, difusión, realización de encuentros, foros, cursos, seminarios, talleres, diplomados, coloquios, congresos,intercambio de experiencias, y platicas técnicas, profesionales, culturales,u otras relacionadas con el objeto social de la Asociación.</p>
			</div>";
		}

		if ($_GET['pag']=='afiliacion'){
			echo "<div id='afiliacion'>";
			echo "<h1>AFILIATE a nuestra organizacion</h1>";
			echo "<form action='index.php?pag=afiliacion' method='POST'>";
			echo "<div><input type='text' name='nombre' placeholder='Tu Nombre'></div>";
			echo "<div><input type='text' name='correo' placeholder='correo electronico'></div>";
			echo "<div><input type='tel' name='tel' placeholder='Tu Telefono'></div>";
			echo "<div><input type='text' name='domicilio' placeholder='Tu Domicilio'></div>";
			echo "<div><input type='submit' name='guardar_afiliacion' value='Enviar' class='btn btn-default'>";
			
			echo "</form>";
			echo "</div>";
			if (isset($_POST['guardar_afiliacion'])){
			    $sql = "INSERT INTO afiliados (nombre, correo, tel, domicilio, fecha) 
				VALUES ('".$_POST['nombre']."', '".$_POST['correo']."', '".$_POST['tel']."','".$_POST['domicilio']."', '".$fecha."')";
				if ($conexion->query($sql) == TRUE)
        		{mensaje('Afiliacion registrada','index.php','');}
			}

		}
		
		if ($_GET['pag']=='contacto'){
		echo "<div id='afiliacion'>";
			echo "<h1>Contactanos</h1>";
			echo "<p>";
			echo "Estamos a tus ordenes en los Telefonos: 8331856583 y correo electronicos:  hervert.nilo@heroescampesinos.org y  hervert.nilo@hotmail.com";
			echo "</p>";

			

			
		}
	}

	?>
	
	
</body>
</html>