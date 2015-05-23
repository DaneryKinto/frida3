<?php
      include("../php/partes/header.php");
      include("../php/funciones.php");
      include("header.php");      
    ?>
<script src="../ckeditor/ckeditor.js"></script>

<h3>Añadir una noticia</h3>
    <form name="carga" id="carga" action="cargar_noticia.php" method="post" enctype="multipart/form-data">
       <label for="titulo">Titulo:</label><input type="text" id="titulo" name="titulo"><br>
       <label for="cate">Categoría:</label>
            <select id="cate" name="cate">
       	       <option>Sobre Comunidad LSA</option>
       	       <option>Interés General</option>
            </select><br>
       <textarea class="ckeditor" name="contenidos" id="contenidos" cols="30" rows="10"></textarea>
       
       <input type="button" value="Agregar Noticia" onClick="if(confirm('¿Está seguro de que quiere cargar la noticia?')){ document.carga.submit()}">
     </form>
<!-- Este es el pie de pagina -->
    <?php
      include("../php/partes/footer.php");
    ?>