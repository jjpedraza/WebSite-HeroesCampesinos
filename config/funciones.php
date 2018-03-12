<?php

function subir($nombredelcontrol, $archivo, $ext)
				{
				$msgE='';
				
				if (substr($_FILES[$nombredelcontrol]['type'], 0, 11)=="application"){
				$msgE= "ERROR: Es una aplicacion";
				}
				else
				{
				if ($_FILES[$nombredelcontrol]['size']<2000000) {
				//$target_path = "".$donde."/";
				$target_path = $archivo.'.'.$ext;
				if(move_uploaded_file($_FILES[$nombredelcontrol]['tmp_name'], $target_path))
				{ $msgE= "La foto se  ". $archivo.'.'.$ext. " ha guardado exito<br>";
				} else{
				//$msgE= "No se actualizo ".$nombredelcontrol.", ";
				$msgE= "No se actualizo o cargo foto ".$archivo;
				}
				} else {
				$msgE ="ERROR: El archivo que intenta subir es mayor de 2mb";
				}
				
				}
				
				return $msgE;
				}
				
				


function mensaje($mensaje, $link, $tipo){
if ($link=="") {$link = "../index.php";}

if ($tipo=='')
{
		echo '<div id="modal_oscuro"></div>';
		echo '<div id="mensaje">';
		echo '<p>'.$mensaje.'</p>';
		echo '<a class="btn btn-default" href="'.$link.'">Aceptar</a>  ';
		//habla($mensaje);
		echo '</div>';
		
} else
{
	if ($tipo=='error')
	{
		echo '<div id="modal_error"></div>';
		echo '<div id="mensaje">ERROR:';
		echo '<p>'.$mensaje.'</p>';
		echo '<a class="btn btn-default" href="'.$link.'">Aceptar</a>  ';
		//habla($mensaje);
		echo '</div>';

	}


}

}













?>