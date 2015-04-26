<?php
//SUBIR VIDEOS
			require("../php/funciones.php");
			conectar();
			$nombre = $_POST["nombre"];
			$categoria = $_POST["categoria"];
			$url_video = $_POST["video"];
			$nombre = strtolower($nombre);
			$consulta="SELECT * FROM paginas WHERE nombre='$nombre'";
			if(mysqli_num_rows($consulta)){
				header("location:subir.php?error=1")
			}
			//faltan columnas en la tabla
			//
			$result = "INSERT INTO paginas (nombre,categoria,video) VALUES ('$nombre','$categoria','$video')";
			if (mysqli_query($GLOBALS['conexion'],$result))
				echo "<p>Pagina añadida exitosamente</p>";
			else
				echo "<p>Error</p>";
?>