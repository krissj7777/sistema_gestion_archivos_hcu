<?php 
 
  session_start();
  if(isset($_SESSION['usuario'])){
  include "header.php";

 ?>

   <div class="container">
   	   <div class="row">
   	         <div class="col-sm-12">
   		         <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/bienvenidos.gif" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
       
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../img/bienvenidos2.gif" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>

   	         </div>
       </div>
   </div>



<?php 
 include "footer.php";
  }else{
  	header("location:../index.php");
  }
 ?>