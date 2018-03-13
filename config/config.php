<?php
//PARAMETROS INICIALES


$pyme_name ="CENTRAL CAMPESINA HEROES CAMPESINOS DEL BICENTENARIO AC";
$pyme_text="";
$pyme_tels="";
$pyme_tels2 = "";
$pyme_email="";
$pyme_direccion="";
$pyme_direccion2="";
$versiondeplataforma ="1.4";
global $pyme_name, $pyme_direction, $pyme_tels;


$paginacion= 20;

//configuraciones del sistema
	date_default_timezone_set('Mexico/General');
	mb_internal_encoding('UTF-8');
	mb_http_output('UTF-8');


//PARAMETROS DE CONEXION A LA BASE DE DATOS
	// $dbhost = 'localhost';
	// $dbuser = 'c0270506_nilo';
	// $dbpass = 'felimeZI63';
	// $dbname = 'c0270506_nilo';

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'nilo';

	$conexion = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
	$acentos = $conexion->query("SET NAMES 'utf8'"); // para los acentos
	global $conexion;



//PARAMETROS DE PREFERENCIA
 	$moneda = 'MXN';
 	$moneda_sufijo ='MXN';
 	global $moneda, $moneda_sufijo;

 	$fecha = date('Y-m-d');
	$hora =  date ("H:i:s");
	$tolerancia = "00:10:00";
	global $fecha, $hora, $tolerancia;

	$API_geo = TRUE; // usar Georeferencia
	$API_msg = TRUE; // usar api de notificacines
	$EXIGIR_geo_ini = FALSE; // no se puede accesar a la plataforma sino se aceptan los permisos de geo
	$EXIGIR_geo_mod = TRUE; // no se puede utilizar modulos con geo sino se aceptan los permisos de geo
	


//KEYS GOOGLE
	$key_geo="AIzaSyDFrRZEYqnAuGMggPnDdD2qEm-bOpDdoNA";
	$key_map_static="AIzaSyCc2fdtBRrEiHBG4mEAIrFZ6kUrFbw3VL8";
	$completar1_fecha = "2017-08-03";


// SERVIDOR PARA DATOS SENSIBLES



?>