		<?php
		//muestra el resultado de la busqueda, o el contenido de lo que llegue por GET
		//CABECERA incluye el head (el css js), el nav. 
			include("php/partes/header.php");
			
		?>
		<div class="container">
			<div class="col-lg-9">
				<div class="row well-lg">
					
			<?php 
			//resolver lo que nos mandan por GET
			if(isset($_GET['type'])){
				include("php/funciones.php");
				//si es un video
				if($_GET['type']=="video"){
					$enlace=conectar();
					$id=$_GET['id'];
					$buscar="SELECT * FROM paginas WHERE id='$id'";
					$consulta_b=mysqli_query($enlace,$buscar);
					while ($registro=mysqli_fetch_array($consulta_b)) {
						echo '<div class="col-lg-9">';
						echo '<h2>'.$registro['palabra'].'</h2>';
						echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/'.$registro["video"].'" frameborder="0" allowfullscreen></iframe>';
						echo '<img src="img/subidas/'.$registro["imagen"].'"</img>';
						echo '</div>';
						echo '<div class="col-lg-3">';
						echo '<h5>Descripción del Video</h5>'.$registro["d_video"];
						$cat=$registro["categoria"];
						echo '</div>';
					}
					$type="video";
				}
				elseif($_GET['type']=="new"){
					$enlace=conectar();
					$id=$_GET['id'];
					$buscar="SELECT * FROM noticias WHERE ID='$id'";
					$consulta_b=mysqli_query($enlace,$buscar);
					while ($registro=mysqli_fetch_array($consulta_b)) {
						echo '<div class="col-lg-12">';
						echo '<h2>'.$registro['titulo'].'</h2>';
						echo 'Fecha de Publicación: '.$registro["fecha"];
						echo '<p>'.$registro["contenido"].'"</p>';
						echo '</div>';
						$cat=$registro["categoria"];
					}
					$type="new";
				}
			}

			 ?>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="well">
				<h4>Relacionados</h4>
				<?php
				switch ($type) {
				 	case 'new':
				 		$relac="SELECT titulo,id FROM noticias WHERE categoria='$cat' LIMIT 10";
				 		$consulta_r=mysqli_query($enlace,$relac);
						while ($reg_relac=mysqli_fetch_array($consulta_r)) {
					echo '<a href="ver.php?type='.$type.'&id='.$reg_relac["id"].'">'.$reg_relac["titulo"].'</a></br>';
				}
				 		break;
				 	case 'video':
				 		$relac="SELECT palabra,id FROM paginas WHERE categoria='$cat' LIMIT 10";
				 		$consulta_r=mysqli_query($enlace,$relac);
				while ($reg_relac=mysqli_fetch_array($consulta_r)) {
					echo '<a href="ver.php?type='.$type.'&id='.$reg_relac["id"].'">'.$reg_relac["palabra"].'</a></br>';
				}
				 		break;
				 	default:
				 		# code...
				 		break;
				 } 
				
				 ?>
				</div>
			</div>
		</div>
		<?php
		//Este es el pie de pagina
			include("php/partes/footer.php");
		?>
