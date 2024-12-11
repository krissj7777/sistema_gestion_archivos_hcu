<?php 
  session_start();
  require_once "../../clases/Conexion.php";
  $idUsuario =$_SESSION['idUsuario'];
  $conexion = new Conectar();
  $conexion = $conexion->conexion();
 ?>

<div class="table-responsive">
	<table class="table table-hover table-dark" id="tablaCategoriasDataTable">
		<thead>
			<tr style="text-align: center;">
					<td>Nombre</td>
					<td>Fecha</td>
					<td>Editar</td>
					<td>Eliminar</td>
			</tr>
		</thead>
		<tbody> 
     <?php 
          $sql = "SELECT id_categorias,
          				 nombre,
          				 fechaInsert
          				 FROM t_categorias
          				  WHERE id_usuario ='$idUsuario'";
          	$result = mysqli_query($conexion, $sql);
          	while($mostrar = mysqli_fetch_array($result)){
          		$idCategoria =$mostrar['id_categorias'];
          	
      ?>

			<tr style="text-align: center;">
				<td><?php echo $mostrar['nombre']; ?></td>
				<td><?php echo $mostrar['fechaInsert']; ?></td>
				<td style="text-align: center;">
					<span class="btn btn-success btn-sm" onclick="obtenerDatosCategoria('<?php echo $idCategoria ?>')" data-toggle="modal" data-target ="#modalActualizarCategoria">
						<span class="fa-solid fa-pen-to-square"></span>
					</span>
				</td>
				<td >
					<span class="btn btn-primary btn-sm" onclick="eliminarCategoria('<?php echo $idCategoria ?>')">
						<spam class="fa-solid fa-trash"></spam>
					</span>
				</td>
			</tr>
			<?php  
		}
			 ?>
		</tbody>
	</table>
</div>

<script type="text/javascript">
	$(document).ready(function(){
	$('#tablaCategoriasDataTable').DataTable();
		});
</script>