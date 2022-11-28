<?php 
include("connector.php");
$id= $_GET['id'];

$sql= "SELECT * from newsletter where id = $id 
 ";
$resultado=$conn->query($sql);

if ($resultado->num_rows>0) {
  $filas=$resultado->fetch_all(MYSQLI_ASSOC);
  }
  else{
     echo $conn->error;
  }
  $fila= $filas[0];
      
 
   include('templates/head.php')
  ?>

<body>

<?php  include('templates/header.php');  ?>



  <section class="text-dark noticia pt-3 pb-5">
    <div class="container text-left m-auto pb-4">
   <span class="text-secondary f1"> <a class="text-dark f1" href="newsletter.php"><i class="text-secondary f1 bi-newspaper mx-2"></i>« <b>Newsletter</b></a> | <?php echo $fila["titulo"]; ?></span>
    <div class="row pt- mt-5">
        <div class="col-md-5 ">  
            <p class="bajada"><?php echo $fila["bajada"]; ?></p>               
            <h4 style="" class="text-start titulo-not"><?php echo $fila["titulo"]; ?></h4>
            <p class="text-left text-secondary descripcion-noticia"> <?php echo $fila["descripcion"]; ?>  
            <br> <br>  </p>
            <span class="f1 text-secondary" style="font-style: italic ">  <?php echo '<i class="bi bi-pencil-square"></i>' .$fila["autor"]; ?> </span> <br>    
            <span class="f1 text-secondary" style="font-style: italic "><i class="bi bi-calendar3"></i></i> <?php echo $fila["fecha"]; ?> </span>  
       
            <div class=" float-end mt-2"> <a title="Compartir en WhatsApp" target="_blank" href="https://api.whatsapp.com/send?text=[NOTICIA LOREM ]"><i class="text-secondary bi-share-fill"></i></a>    </div> 

        </div>
        <div class="col-md-7 text-end">
            <div style="background: url('<?php echo $fila["img"]; ?>')  0px 0px no-repeat;"  class="img" alt="">       </div>
        </div>
       
           
       </div>
    </div>
 
</section>

<?php include('templates/footer.php');?>
