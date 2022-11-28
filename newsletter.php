<?php 
include("connector.php");

$sql= "SELECT * from newsletter
order by fecha DESC
  ";

$resultado=$conn->query($sql);
// $sql1 = "SELECT color from modelos  ";

// $resultado2=$baseDatos->query($sql1);


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


    <div style="background: url('./img/3.jpg')  center -150px no-repeat; background-size: cover; ; height:2cm;" >
        <div class="container">
            <h4 class="pt-4 encabezados">
                <i class="f2 bi-newspaper mx-2 encabezados"></i> Newsletter
            </h4>
        </div>
    </div>

  <section class="m-auto text-dark newletter pt-1 pb-5">
    <div class="container m-auto pt-4  pb-4">
   <div class="row"> 
    
    <?php  foreach ($filas as $fila): 
        $id =$fila["id"];
        $titulo =$fila["titulo"];
        $des =$fila["descripcion"];
        $bajada =$fila["bajada"]?>
    


       <div class=" mt-5 mx-2 <?php echo $fila["columna"]; ?>">
       
                <div style="background: url('<?php echo $fila["img"]; ?>')  center 0px no-repeat"  class="img mb-2" alt=""></div> 
                <span class="f1 text-secondary" style="font-style: italic "><i class="bi me-2 bi-calendar3"></i></i><?php echo $fila["fecha"]; ?> </span>  

                <h4 class="mt-1"><?php echo $titulo ?></h4>
                <p class="  text-left mt-2 text-secondary"> <?php echo $bajada ?><br>
                <br>
                    <a class="text-light f1 bg-blue p-2 px-4 " href="noticia.php?id=<?php echo $id ?>"> LEER +</a>  
                </p>
        </div>
        <?php   endforeach ; ?>
 </div>    
</div>
</section>

<?php include('templates/footer.php');?>
