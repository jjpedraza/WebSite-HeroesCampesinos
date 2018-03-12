<?php	include("config/html_head.php"); ?>

<?php //BARRA DE MENU
include("config/html_menu.php"); ?>


<div style='' syle='width:100%;'>

<!-- <form action='admin.php' method='post'  enctype='multipart/form-data'>
<span><input type='text' placeholder='Nombre de la Publicacion' name='nombre'></span>
<div><label>Fotografia 1</label><input type='file' placeholder='foto 1 de la Publicacion' name='foto1'></div>
<div><label>Fotografia 2</label><input type='file' placeholder='foto 2 de la Publicacion' name='foto2'></div>
<div><label>Fotografia 3</label><input type='file' placeholder='foto 3 de la Publicacion' name='foto3'></div>
<div><label>Fotografia 4</label><input type='file' placeholder='foto 4 de la Publicacion' name='foto4'></div>
<div><label>Fotografia 5</label><input type='file' placeholder='foto 5 de la Publicacion' name='foto5'></div>
<div><label>Fotografia 6</label><input type='file' placeholder='foto 6 de la Publicacion' name='foto6'></div>
<span><label>Descripcion:</label>
<textarea name='descripcion' style='width:100%; height:100px;'></textarea>
</span>
<div><input type='submit' class='btn btn-default' value='Crear Publicacion' name='guardar'></div>
</form> -->
<?php
// $msg="";
// if (isset($_POST['guardar'])){
//     $sql = "INSERT INTO pubs (nombre, descripcion, fecha, hora, estado) VALUES ('".$_POST['nombre']."', '".$_POST['descripcion']."', '".$fecha."','".$hora."', '0')";
//         if ($conexion->query($sql) == TRUE)
//         {  $archivo = 'fotos/'.$_POST['nombre']."_1";
//            $msg = $msg. subir('foto1', $archivo, '.jpg');
           
//            $archivo = 'fotos/'.$_POST['nombre']."_2";           
//            $msg = $msg. subir('foto2', $archivo, 'jpg');

//            $archivo = 'fotos/'.$_POST['nombre']."_3";           
//            $msg = $msg. subir('foto3', $archivo, 'jpg');

//            $archivo = 'fotos/'.$_POST['nombre']."_4";           
//            $msg = $msg. subir('foto4', $archivo, 'jpg');

//            $archivo = 'fotos/'.$_POST['nombre']."_5";           
//            $msg = $msg. subir('foto5', $archivo, 'jpg');

//            $archivo = 'fotos/'.$_POST['nombre']."_6";           
//            $msg = $msg. subir('foto6', $archivo, 'jpg');
           
            

//                 mensaje('Publicacion Guardada correctamente.<br>'.$msg,'admin.php','');}
// 		else {mensaje('ERROR al guardar '.$sql,'admin.php','');}

//}
?>
</div>






<div id='' style='width:100%' >
<h1>Lista de Solicitudes de Afiliados</h1>
	<?php
    $sql = "SELECT * FROM afiliados";
    echo "<table class='tabla'>";
    
    echo "<th>Nombre</th>";
    echo "<th>Correo</th>";
    echo "<th>Telefono</th>";
    echo "<th>Domicilio</th>";
    echo "<th>Fecha</th>";
    
    
    
	$rc= $conexion -> query($sql); while($f = $rc -> fetch_array())
	{   echo "<tr>";
        echo "<td>".$f['nombre']."</td>";
        echo "<td><b>".$f['correo']."</td>";
        echo "<td>";
        echo $f['telefono'];
        echo "</td>";
        echo "<td>";
        echo $f['domicilio'];
        echo "</td>";
        echo "<td><b>".$f['fecha']."</td>";
        echo "</tr>";


    }
    echo "</table>";

	?>
</div>


<?php include("config/html_footer.php"); ?>	