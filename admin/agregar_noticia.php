<div class="container">
  <?php
  if(isset($_GET['error'])){
              echo '<div class="col-lg-4 col-lg-offset-4 alert alert-danger">
              <strong>Error</strong>
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              ';
              switch ($_GET['error']) {
                case '10':
                  echo "<p>Debe ingresar un título.</p>";
                  break;
                case '11':
                  echo "<p>No escribio nada en el cuerpo del documento.</p>";
                  break;
                case '12':
                  echo "<p>Ocurrio un error en la subida, reintentelo en un momento.</p>";
                  break;
                case '13':
                  echo "<p>Ocurrio un error en la subida, reintentelo en un momento.</p>";
                  break;
                

                  
                  break;

              }
              echo "</div>";
            }
           ?>
</div>
<div class="container">
  
<script src="ckeditor/ckeditor.js"></script>

<h3>Añadir una noticia</h3>
    <form name="carga" id="carga" action="admin/cargar_noticia.php" method="post" enctype="multipart/form-data">
       <label for="titulo">Titulo:</label><input type="text" id="titulo" name="titulo"><br>
       <label for="cate">Categoría:</label>
            <select id="cate" name="cate">
               <option>Sobre Comunidad LSA</option>
               <option>Interés General</option>
            </select><br>
       <textarea name="contenidos" id="contenidos" cols="30" rows="10">
          

       </textarea>
       
       <input type="button" value="Agregar Noticia" onClick="if(confirm('¿Está seguro de que quiere cargar la noticia?')){ document.carga.submit()}">
     </form>

     <script type="text/javascript">
        CKEDITOR.replace('contenidos', {
          "extraPlugins": "imgbrowse",
          "filebrowserImageBrowseUrl": "/frida3/ckeditor/plugins/imgbrowse/imgbrowse.html?imgroot=frida3/img/",
          "filebrowserImageUploadUrl": "/frida3/ckeditor/plugins/imgupload/imgupload.php"
        });
     </script>
</div>