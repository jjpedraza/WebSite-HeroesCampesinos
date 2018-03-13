<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	@media only screen and (max-width:500px) {
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
</head>
<body>

<p style='margin: 30px; width:100%; margin-top: 200px; font-size: 14pt; text-align: center;'>
	<br>
	<img src='img/logo.png' style="width:200px;" 	>
	<br>
	<b>Su donativo fue cancelado</b> si desea contactarnos hagalo a travez del correo electronico <b>herver.nilo@heroescampesinos.org</b> o al Telefono 833 185 6583
</p>

</body>
</html>