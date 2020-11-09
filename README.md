# Proyecto WebSite Heroes Campesinos
Este es un proyecto de pagina web en el que se requeria un entorno completamente visual, donde se tuvieran fotos en modo 
de diapositivas slider, y un video, en el que siempre se escuchara aunque se estuviese en otra seccion, asi como un apartado para afiliacion.

![alt text](https://github.com/printepolis/nilo/blob/master/nilo%20(1).jpg)

### Que puedes encontrar de interesante en el codigo?

>Un javascript para la presentacion de las fotos
```javascript 
		$(function(){
		    $('#slider img:gt(0)').hide();
		    setInterval(function(){
		      $('#slider img:first-child').fadeOut(0)
		         .next('img').fadeIn(1000)
		         .end().appendTo('#slider');}, 5000);
		});
		
	
```
  
  
  
  >PHP: Leer todas las fotos de un directorio; una vez con esto puedes realizar un CSS sobre #slider img {}, en mi caso hize un full screen   y quedaron de fondo
 ```
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
 ```
    
 
![alt text](https://github.com/printepolis/nilo/blob/master/nilo%20(2).jpg)

### Es un proyecto pequeño, para hacerse en una tarde. Espero y te sirva de punto de partida
