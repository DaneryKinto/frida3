<?php include "../php/funciones.php";

// Compramos la sesion. (Faltante).

// Guardamos lo que recibimos del formulario en variables.
// Falta usuario.
    $palabra = $_POST['palabra'];
    $alt = $_POST['alt'];
    $url = $_POST['url'];
    $dvideo = $_POST['des_video'];
    $categoria = $_POST['categoria'];
    $imagensubida = "true";
    $tamanioimg = $_FILES['imagen']['size'];
    $nombre = $_FILES['imagen']['name'];
    $nombretemp = $_FILES['imagen']['tmp_name'];
    $tipoimg = strtolower($_FILES['imagen']['type']);
    $direccion = "../img/subidas/$nombre";
    
    // Comprobamos que el tamaño de imagen no pase de los 400kb, 409600 bytes.
    if ($tamanioimg > 409600){
        echo "Tu imagen debe ser menor a 400kb";
        $imagensubida = "false";
    } // Comprobamos el formato de imagenes permitidas.
    	else if (!( $tipoimg == "image/jpg" OR $tipoimg == "image/gif" OR $tipoimg == "image/jpeg" OR $tipoimg == "image/png")){
        	echo "Solo se permiten imágenes jpg o gif.";
    		$imagensubida = "false";
    	}  // Si la imagen paso las pruebas. 
    		else if($imagensubida == "true"){
        		if (move_uploaded_file ( $nombretemp , $direccion)){
            		// Obtenemos la fecha de creacion del post con la hora del servidor.
            		$fecha = time();
            		$conexion = conectar();
            		// Hacemos la consulta.
            		$consulta = "INSERT INTO paginas (fecha, palabra, imagen, alt, video, d_video, categoria) VALUES ('$fecha', '$palabra', '$nombre', '$alt', '$url', '$dvideo', '$categoria')";
            		$resultado = mysqli_query($conexion, $consulta);
            		//Si ocurre un error en la consulta.
            		if(!$consulta=mysqli_query($conexion,$consulta)){ 
                		echo "<div class='alert alert-warning text-center' role='alert'>Error al subir el archivo 1 Vuelve a intentar<br> 
                 		<span class='label label-warning'><a href='../admin/subirvideo.php'>Regresar</a></span></div>";
            		} else{
                		//subido correctamente
                        header("location:index.php?action=subido");
            		}
        		}   
    		}else{
        		echo "<div class='alert alert-warning text-center' role='alert'>Error al subir el archivo 2 Vuelve a intentar<br> 
                <span class='label label-warning'><a href='../admin/subirvideo.php'>Regresar</a></span></div>";
    		}
?>








