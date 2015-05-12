		<?php
			include("php/partes/header.php");
			include("php/funciones.php");
			
		?>
		<ul>
			<a href="noticias.php?quemostrar=todas&num=1">Todas</a><br>
			<a href="noticias.php?quemostrar=lsa&num=1">Sobre Comunidad LSA</a><br>
			<a href="noticias.php?quemostrar=gen&num=1">Interés General</a><br>
			</ul>	
			<?php
            	$conexion = conectar();
		    	//cuantos resultados voy a mostrar
		   		$registros=2;
		    	//controlo la categoria de las noticias a mostrar
		    	if(isset($_GET['quemostrar'])){
            		$quemostrar=$_GET['quemostrar'];
            	}else{
            		$quemostrar="todas";
            	}
            	//controlo el numero de pagina de los resultados obtenidos
            	if(isset($_GET['num'])){
					$pagina=$_GET['num'];
				}else{
					$pagina=1;
				}
				//en donde inicio
				$inicio=($pagina-1)*$registros;
            	//seleccionar contenido de la base de datos para mostrar
            	switch ($quemostrar) {
            		case 'lsa': $consulta=mysqli_query($conexion, "SELECT id FROM noticias WHERE categoria LIKE 'Sobre Comunidad LSA'");
            	            	$mostrar=mysqli_query($conexion,"SELECT fecha,titulo,contenido,categoria FROM noticias WHERE categoria LIKE 'Sobre Comunidad LSA' ORDER BY fecha DESC LIMIT $inicio,$registros" );
            					break;
            		case 'gen': $consulta=mysqli_query($conexion, "SELECT id FROM noticias WHERE categoria LIKE 'Interés General'");
            					$mostrar=mysqli_query($conexion, "SELECT fecha,titulo,contenido,categoria FROM noticias WHERE categoria LIKE 'Interés General' ORDER BY fecha DESC LIMIT $inicio,$registros");
            					break;
            		default: $consulta=mysqli_query($conexion, "SELECT id FROM noticias");
            			 	$mostrar=mysqli_query($conexion, "SELECT fecha,titulo,contenido,categoria FROM noticias ORDER BY fecha DESC LIMIT $inicio,$registros");
            			 	break;
            	}
            	//cuantos registros devolvio la consulta a la base de datos
            	$num_registros=mysqli_num_rows($consulta);
            	//numero de paginas para el indice
           		$num_paginas=ceil($num_registros/$registros);
            	//mostrar
            	while($filas=mysqli_fetch_array($mostrar)){
				    if($filas['categoria']=="Sobre Comunidad LSA"){
                        echo '<br>'.$filas['titulo'].'<pre><i>'.$filas['fecha'].'  -  <a href="">'.$filas['categoria'].'</a></i></pre><br>'.$filas['contenido'];
                    }else if($filas['categoria']=="Interés General"){
                        echo '<br>'.$filas['titulo'].'<pre><i>'.$filas['fecha'].'  -  <a href="">'.$filas['categoria'].'</a></i></pre><br>'.$filas['contenido'];
                    }
			    }
				//paginacion
				echo '<br><br><br>Mostrando resultados página : <br>';
				if($pagina>1){
               		echo ' <a href="noticias.php?quemostrar='.$quemostrar.'&num='.($pagina-1).'"> <<< Anterior - </a> ';
            	}
				for($i=1;$i<=$num_paginas;$i++){
			 		//no creo el enlace a la pagina en la que ya estoy
			    	if($i==$pagina){
			    		echo $i.' - ';
			    	}else{
			    		echo '<a href="noticias.php?quemostrar='.$quemostrar.'&num='.$i.'">'.$i.' - </a> ';
			    	}
				}
				if($pagina<$num_paginas){
			    	echo ' <a href="noticias.php?quemostrar='.$quemostrar.'&num='.($pagina+1).'"> Siguiente >>></a> ';
				}
			?>
<!-- Este es el pie de pagina -->
		<?php
			include("php/partes/footer.php");
		?>