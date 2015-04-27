<?php
	
	$busqueda = $_POST["b"];
	if(!empty($busqueda)){
		//si no esta vacio el campo, hago la busqueda
		buscar($busqueda);
	}
	function buscar($b){
		//funciones posee la conexion 
	require("funciones.php");
	//la funcion conectar devuelve una variable de conexion $enlace
	$enlace=conectar();
	//recibo el campo mandado via ajax
			$busqueda_bd="SELECT * FROM noticias WHERE titulo LIKE '%".$b."%'";
			$query=mysqli_query($enlace,$busqueda_bd);
			$cantidad=mysqli_num_rows($query);
			if($cantidad == 0){
				//no hay coincidencias
				echo "<h2>No existen coincidencias</h2>";
			}
			else{
				//si hay alguna coincidencia
				while ($fila=mysqli_fetch_array($query)) {
					echo $fila["contenido"];
					echo "<br>";
				}
			}
		}
	
 ?>