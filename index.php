<?php 
include("connector.php");

$sql= "SELECT  * 
FROM newsletter 
order by fecha DESC
LIMIT 3
 ";

$resultado=$conn->query($sql);

if ($resultado->num_rows>0) {
  $filas=$resultado->fetch_all(MYSQLI_ASSOC);
  }
  else{
     echo $conn->error;
  }
  
 
   include('templates/head.php')
  ?>

<body>

<?php  include('templates/header.php');  ?>


 
    
    <div class="carousel "  id="merivideo2" >
       <div class="container cap"> 
        <h1>Bienvenidos</h1>
        <p class="text-light"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit ipsum dolor sit amet consectetur adipisicing elit.
                  </p>
      </div> 
     </div>
   
  </div>
  <section class="bg-light text-dark s1 pt-3 pb-5" style="position: relative; z-index:99999">
    <div class="container2 text-center m-auto mt-5 pb-4">
    <h4 style="text-transform: uppercase"><i class="text-secondary f2 bi-newspaper mx-2"></i> ÚLTIMAS NOTICIAS</h4>
    <br><br>
    <div class="row   d-flex justify-content-between">
   
    <?php  foreach ($filas as $fila): 
                    $id =$fila["id"];
                    $des =$fila["bajada"]?>
    <div class="col-md-4 col-noticia" id="<?php echo'n'.$id ?>">
        <div style="background: url('<?php echo $fila["img"]; ?>')  center 0px no-repeat"  class="img" alt=""></div>
     <p
     onmouseover="mostrar('<?php echo $id ?>', '<?php echo 'p'.$id ?>', '<?php echo 'n'.$id ?>')" 
    onmouseleave="ocultar('<?php echo $id ?>', '<?php echo 'p'.$id ?>', '<?php echo 'n'.$id ?>')"  
     class="t1  text-center" id="<?php echo 'p'.$id ?>">  
        <span><?php echo $fila["titulo"]; ?></span>
         <span id="<?php echo $id ?>" class="descripcion"><?php echo limitar_cadena($des, 123,"<a href='ver-producto.php?id=$id' class='f1'><b> ...</b></a>") ?></span>
    <a class="text-light f1 leer pt-2" href="noticia.php?id=<?php echo $id ?>"> + LEER</a>  

       </p>
    </div>
    <script>$('<?php echo '#'+$id ?>').hide();</script>
    <?php   endforeach ; ?>

    
    </div>
    </div>
</section>



<?php include('templates/footer.php');?>
