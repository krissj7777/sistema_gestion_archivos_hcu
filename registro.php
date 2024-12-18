<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="librerias/jquery-ui-1.14.1/jquery-ui.theme.css">
    <link rel="stylesheet" type="text/css" href="librerias/jquery-ui-1.14.1/jquery-ui.css">

</head>
<body>
	<div class="container" id="estiltab">
		<h3 style="text-align:center">Registro de Usuario</h3>
		<hr>
		<div class="row" >
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<form id="frmRegistro" method="post" onsubmit="return agregarUsuarioNuevo()" autocomplete="off">
					 <label>Nombre personal</label>
	                 <input type="text" name="nombre" id="nombre" class="form-control" required ="">
	                 <label>Fecha de Nacimiento</label>
	                 <input type="text" name="fechaNacimiento" id="fechaNacimiento" class="form-control" required ="" readonly="">
	                 <label>Email o correo</label>
	                 <input type="email" name="correo" id="correo" class="form-control" required ="">
	                 <label>Nombre de Usuario</label>
	                 <input type="text" name="usuario" id="usuario" class="form-control" required ="">
	                 <label>Password o contraseña</label>
	                 <input type="password" name="password" id="password" class="form-control" required ="">
	                 <br>
	                 <div  class="row">
	                 	<div class="col-sm-6 text-left">
	                 		<button  class="btn btn-primary">Registrarse</button>
	                 	</div>
                       <div  class="col-sm-6 text-right">
                       	 <a href="index.php" class="btn btn-success">Login </a>
                       		
                       </div>

	                 </div>
	                 <br>
                       
	                 
	                 
				</form>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
	<script src="librerias/jquery-3.7.1.min.js"></script>
	<script src="librerias/jquery-ui-1.14.1/jquery-ui.js"></script>
	<script src="librerias/sweetalert.min.js"></script>
	

	<script type="text/javascript">

         $(function(){
      	var fechaA = new Date();
      	var yyyy = fechaA.getFullYear(); 

      	        $("#fechaNacimiento").datepicker({

                   changeMonth: true,
                   changeYear: true,
                   yearRange:'1900:'+ yyyy, 
                   dateFormat: "dd-mm-yy"  
                 });    

            	}); 
         
     
		function agregarUsuarioNuevo(){
             $.ajax({
             	method: "POST",
             	data: $('#frmRegistro').serialize(),
             	url:"procesos/usuario/registro/agregarUsuario.php",
             	success:function(respuesta){
             
                     respuesta = respuesta.trim();

                     if(respuesta == 1){

                     	  $("#frmRegistro")[0].reset();
                       swal(":D","Agregado con exito","success");
                     } 
                     

                     else{
                     	swal(":(","Fallo al agregar","error");
                     }
             	}
             });
             return false;
		}
	</script>
</body>
</html>