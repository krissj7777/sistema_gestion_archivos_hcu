<?php 
   session_start();
   if(isset($_SESSION['usuario'])){

      include "header.php";

 ?>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h4 class="display-4">Gestor de archivos</h4>
    <span class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarArchivos">
        <span class="fa-solid fa-circle-plus"></span>Agregar archivos
    </span>
    <hr>
    <div id="tablaGestorArchivos"></div>
  </div>
</div>

<!--modal para agreagar archivos-->

<!-- Modal -->
<div class="modal fade" id="modalAgregarArchivos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmArchivos" enctype="multipart/form-data">
            <label>Categoria</label>
            <div id="categoriasLoad"></div>
            
            <label>Selecciona Archivos</label>
            <input type="file" name="archivos[]" id="archivos" class="form-control" multiple="multiple ">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btnGuardarArchivos">Guardar Archivos</button>
      </div>
    </div>
  </div>
</div>






<!-- Modal -->
<div class="modal fade" id="visualizarArchivo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Archivo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="archivoObtenido"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      
      </div>
    </div>
  </div>
</div>


<?php  include "footer.php" ?>

<script src="../js/gestor.js"></script>
<script type="text/javascript">

	$(document).ready(function() {
		$('#tablaGestorArchivos').load("gestor/tablaGestor.php");
		$('#categoriasLoad').load("categorias/selectCategorias.php");

        $('#btnGuardarArchivos').click(function() {
            agregarArchivosGestor();
             });
	   });
</script>
<?php 

    }else{
    	 header("location:../index.php");
    }
 ?>