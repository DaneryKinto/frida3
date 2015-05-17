<?php
include "header.php";
require_once('../php/funciones.php');
 $palabra = "0";
if (isset($_GET['palabra'])) {
    $palabra = $_GET['palabra'];
}
    $conexion=conectar(); 
    $modificar = "SELECT * FROM paginas WHERE id='".$palabra."'";	
	$resultado_modificar = mysqli_query($conexion,$modificar);
?>
 	<div class="col-lg-8">
				<form enctype="multipart/form-data" action="../php/palabra_modificada.php" method="POST" role="form" class="col-md-5 up">
					<legend>Modificar contenido</legend>
				    <?php 
				    while($modificar= mysqli_fetch_array($resultado_modificar)){
                    echo   "<div class='form-group'>
								<label for='palabra'>Palabra:</label>
								<input type='text' class='form-control' name='palabra' id='palabra' value='".$modificar['palabra']."'>
								<input type='hidden' name='id_pal' value='".$modificar['id']."'/ >
							</div>
							
							<div class='form-group'>
								<label for='img'>Imagen:</label>
								<input type='file' class='form-control' name='img' id='img' value='".$modificar['imagen']."'>
							</div>

							<div class='form-group'>
								<label for='alt'>Titulo alternetivo (imagen):</label>
								<input type='text' class='form-control' name='alt' id='alt' value='".$modificar['alt']."'>
							</div>

							<div class='form-group'>
								<label for='video'>Video:</label>
								<input type='text' class='form-control' name='video' id='video' value='".$modificar['video']."'>
							</div>
							
							<div class='form-group'>
								<label for='dvideo'>Descripción del video:</label>
								<input type='text' class='form-control' id='dvideo' name='dvideo' value='".$modificar['d_video']."'>
							</div>
							
							<div class='form-group'>
								<label for='categoria'>Categoría:</label>
								<input type='text' class='form-control' id='categoria' name='categoria' value='".$modificar['categoria']."'>
							</div>";}     
				    ?>							
					<button type="submit" class="btn btn-primary">Guardar cambios</button>
					<button type="button" class="btn btn-primary" onclick="history.back()">Cancelar</button>
				</form>
			  </div>
		</div>
    </div>
    <div class="col-md-1"></div>   
  </div>
	</div>
		<!--Script cuenta la longitud de palabras escritas-->
		<script>
			contenido_textarea = ""
			num_caracteres_permitidos = 90

			function valida_longitud(){
			   num_caracteres = document.forms[0].descripcion.value.length

			   if (num_caracteres > num_caracteres_permitidos){
			      document.forms[0].descripcion.value = contenido_textarea
			   }else{
			      contenido_textarea = document.forms[0].descripcion.value
			   }

			   if (num_caracteres >= num_caracteres_permitidos){
			      document.forms[0].caracteres.style.color="#ff0000";
			   }else{
			      document.forms[0].caracteres.style.color="#000000";
			   }

			   cuenta()
			}
			function cuenta(){
			   document.forms[0].caracteres.value=document.forms[0].descripcion.value.length
			}
		</script> 
		<?php include "footer.php" ?>
