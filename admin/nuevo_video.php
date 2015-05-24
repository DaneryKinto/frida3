<?php include "header.php"; include "../php/funciones.php";?>
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4 container well">
          <?php 
            //si existe un error al subir algo se devuelvo con get
            if(isset($_GET['error'])){
              switch ($_GET['error']) {
                case '0':
                if(isset($_GET['palabra'])){
                $palabra=$_GET['palabra'];
                  echo "<div class=bg-danger>
                  <p>Ya existe un video con el titulo $palabra
                  <a href=#>haga click aqui para editarlo.</a></p>
                  </div>";
                }
                if(isset($_GET['direccion'])){
                  $direccion=$_GET['direccion'];
                  echo "<div class=bg-danger>
                  <p>Ya existe un video con la misma dirección 
                    <a href=#>haga click aqui para editarlo.</a></p>
                  </div>";
                }
                  break;
                
                default:
                  # code...
                  break;
              }
            }
           ?>
          <form action="../admin/ABM_Video.php" method="POST" role="form" enctype="multipart/form-data">
          <form action="ABM_Video.php" method="POST" enctype="multipart/form-data" role="form">
              <legend>Nuevo video</legend>
              
              <!--  NUeva palabra -->
              <div class="form-group">
                  <label for="palabra">Palabra</label>
                  <input type="text" class="form-control" id="palabra" autofocus name="palabra" placeholder="Nombre de la palabra a publicar">
              </div>
                
              <!-- Imagen representativa -->
              <div class="form-group">
                  <label for="imagen">Imagen</label>
                  <input type="file" class="form-control" name="imagen" id="imagen">
              </div>

              <!-- Titlulo alternativo de la imagen -->
              <div class="form-group">
                  <label for="alt">Descripción de la imagen</label>
                  <input type="text" class="form-control" name="alt" id="alt" placeholder="Una pequña descripcion de la imagen">
              </div>
          
              <!-- URL del video -->
              <div class="form-group">
                  <label for="url">Video</label>
                  <input type="text" class="form-control" name="url" id="url" placeholder="Ej: https://www.youtube.com/watch?v=5ycILaRB3b4">
              </div>

              <!-- Descripcion del video -->
              <div class="form-group">
                  <label for="des_video">Descripción del video</label>
                  <textarea rows="3" cols="32" class="form-control" name="des_video" id="des_video" placeholder="Pequeño texto descriptivo del video"></textarea> 
              </div>

              <!-- categoría -->
              <div class="form-group">
                  <label for="categoria">Categoría</label>
                  <input type="text" class="form-control" name="categoria" id="categoria">
              </div>                            
              

              <button type="submit" class="btn btn-primary">Subir</button>
              <button type="reset" class="btn btn-primary">Borrar campos</button>

          </form>

        </div>
    </div>    

<?php include "footer.php";?>

