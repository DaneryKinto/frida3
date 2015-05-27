<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Página</title>

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="stylesheet" type="text/css" href="css/bas.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
</head>
<body>
		
	<div class="container-fluid">
	<nav class="navbar navbar-default navbar-fixed-top">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Comunidad</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	      	<!--en los class de cada li el codigo php detecta la direccion y muestra activo el enlace según corresponda-->
	        <li class=<?php echo (basename($_SERVER['PHP_SELF']) == "index.php" ? "active" : "")?>><a href="index.php">Inicio<span class="sr-only">(current)</span></a></li>
	        <li class=<?php echo (basename($_SERVER['PHP_SELF']) == "servicios.php" ? "active" : "")?>><a href="servicios.php">Servicios</a></li>
	        <li class=<?php echo (basename($_SERVER['PHP_SELF']) == "noticias.php" ? "active" : "")?>><a href="noticias.php?quemostrar=todas&num=1">Novedades</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Diccionario<span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="abecedario.php">Por abecedario</a></li>
	          </ul>
	        </li>
	      </ul>
	      <form class="navbar-form navbar-left" role="search" action="php/buscar.php">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Buscar" id="buscador-nav" name="busqueda-full">
	        </div>
	        <button type="submit" class="btn btn-default">Buscar</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	        <li class=<?php echo (basename($_SERVER['PHP_SELF']) == "admin.php" ? "active" : "")?>>

	        	<a href="admin.php" id=<?php 
	    	if($_SESSION==null){
	    		echo "no-login";
	    	}
	    	 ?> ><span class="glyphicon glyphicon-user"></span></a>

	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	    <div id="resultado">
	    	
	    </div>
		</nav>		
	    	<?php 
	    	if(isset($_SESSION['usuario'])){
	    		echo '<div class="container menu-adminwell well">';
	    		echo "Bienvenidx $_SESSION[usuario] ";
	    		
	    		echo '<div class="btn-group">
				<a href="admin.php?action=nueva_noticia" class="btn btn-primary">Agregar noticia</a>
				<a href="admin.php?action=nuevo_video" class="btn btn-primary">Agregar video</a>
				<a href="#" class="btn btn-primary">Ver Mensajes</a>
				<a href="#" class="btn btn-primary">Editar noticia/video</a>
	    		</div>';
	    		echo ' <a href="php/logout.php "type="button" class="btn btn-danger pull-right">Cerrar Sesion</a>';
	    		echo '</div>';
	    	}
	    	if(isset($_GET['error'])){
	    		switch ($_GET['error']) {
	    			case '1':
	    				echo '<div class="container alert alert-danger">Error los datos ingresados son incorrectos</div>';
	    				break;
	    			
	    			default:
	    				# code...
	    				break;
	    		}
	    	}
	    	 ?>
	    	
	    <div class="navlog col-lg-6 col-lg-offset-3	col-ms-6" id="login">
	    	
	    	<form class="navbar-form" method="post" action="php/login.php">
	    		<label for="usuario" class="col-sm-2"></label>
	    		<input type="text" name="usuario" id="usuario" class="form-control" required="required" placeholder="Usuario">
	    		<input type="password" name="pass" id="input" class="form-control" required="required" placeholder="Contraseña">
	    		<button type="submit" class="btn btn-default">Ingresar</button>
	    	</form>
	    </div>
	  </div><!-- /.container-fluid -->