function agregarCategoria(){
    var categoria =$('#nombreCategoria').val();
  
                      if(categoria == ""){  
                        swal("Debes agregar una categoria");
                         return false;
                      } else{
                        $.ajax({
                           type:"POST",
                           data:"categoria=" + categoria,
                           url:"../procesos/categorias/agregarCategoria.php",

                           success:function(respuesta){
                            
                              respuesta = respuesta.trim();
                                if(respuesta == 1){
                                    $('#nombreCategoria').val("");
                                     $('#tablaCategorias').load("categorias/tablaCategoria.php");
                                  swal(":D","Agregado con exito!","success");
                                } else 
                                {
                                   swal(":(","Fallo al agregar!","error");
                                }
                        }
                      });
                  }
}


function eliminarCategoria(idCategoria){
    idCategoria = parseInt(idCategoria);
    if(idCategoria < 1){
        swal("No tienes de id de categoria!");
        return false;
    } else{
      //*********************************
         swal( {
              title : "¿ Estás seguro de eliminar esta categoria? ",
              text : " Una vez eliminado, ¡no podrás recuperarse" , 
              icon : " " , 
              buttons : true , 
              dangerMode : true , 
            } )
  .then( ( willDelete ) =>  { 
  if( willDelete ) {  
            $.ajax({
                type:"POST", 
                data: "idCategoria="+ idCategoria,
                url: "../procesos/categorias/eliminarCategoria.php",
                success:function(respuesta){
                    respuesta = respuesta.trim();
                        if(respuesta == 1){
                            $('#tablaCategorias').load("categorias/tablaCategoria.php");
                            swal ( " ¡Puf! ¡Eliminado con exito! " , { 
                            icon:" " , 
                       } ) ;
                   } else{
                       swal(":(","Fallo al eliminar","error");
                   }
                }
            });
    } 
  });
     //*************************************
    }
}



function obtenerDatosCategoria(idCategoria){
    $.ajax({
        type:"POST",
        data:"idCategoria=" + idCategoria,
        url:"../procesos/categorias/obtenerCategoria.php", 
        success:function(respuesta){
           respuesta =JSON.parse(respuesta);
           
           $('#idCategoria').val(respuesta['idCategoria']);
           $('#categoriaU').val(respuesta['nombreCategoria']);
        }
    })
}
 
function actualizaCategoria(){
    if($('#categoriaU').val()==""){
       swal("No hay categorias!!");
       return false;
    }else{
        $.ajax({
            type:"POST",
            data:$('#frmActualizaCategoria').serialize(),
            url:"../procesos/categorias/actualizaCategoria.php",
            success:function(respuesta){
                respuesta = respuesta.trim();
                if(respuesta == 1){
                    $('#tablaCategorias').load("categorias/tablaCategoria.php");
                swal(":D","Actualizado con exito!","success");
                }else{
                   swal(":(", "Fallo al Actualizar!","error"); 
                }
            }

        })
    }
}