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

<body style="background: #000!important">

<?php  include('templates/header.php');  ?>


 
    
    <div class="carousel "  id="merivideo2" >
       <div class="container cap"> 
        <h1>-- Bienvenidos --</h1>
        <p class="text-light"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit ipsum dolor sit amet consectetur adipisicing elit.
                  </p>
      </div> 
      <svg version="1.1" id="Capa_1" class="planta" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1052 1772" style="enable-background:new 0 0 1052 1772;" xml:space="preserve">

    <defs>
        <linearGradient id="lgrad-p" gradientTransform="rotate(75)"><stop offset="45%" stop-color="#4fa82f"></stop><stop offset="99%" stop-color="#7ea605"></stop></linearGradient>
        <linearGradient id="lgrad-s" gradientTransform="rotate(75)"><stop offset="45%" stop-color="#2eff70"></stop><stop offset="99%" stop-color="#00872b"></stop></linearGradient>
        <linearGradient id="lgrad-g" gradientTransform="rotate(75)"><stop offset="45%" stop-color="#aec200"></stop><stop offset="99%" stop-color="#d4e640"></stop></linearGradient>
      </defs>
<g>
	<path class="p2" d="M477,1547c0,0-260-90-278-270l0,0c230,72,275.49,229.04,275.49,229.04"/>
	<path class="p2" d="M477,1532c0,0-154-105-278-255"/>
</g>
<g>
	<path class="p3" d="M440,1120c0,0-217.45-113.92-278-186"/>
	<path class="p3" d="M437,1078c0,0-44.01-71.81-151.34-101.01s-138.28-51.61-138.28-51.61S252.11,1108.82,443,1154"/>
</g>
<g>
	<path class="p4" d="M350,735c0,0-212.89-42.28-290.12-96.09"/>
	<path class="p4" d="M339.24,698.15c0,0-57.24-54.69-161.8-55.44c-104.56-0.75-138.07-13.69-138.07-13.69
		s139.24,141.55,323.58,136.75"/>
</g>
<g>
	<path class="p5" d="M474,1506c0,0,167-93,257-211"/>
	<path class="p5" d="M474,1484c0,0,36-93,139-135s131-68,131-68s-80,206-264,274"/>
</g>
<g>
	<path class="p6" d="M443,1161c0,0,148.85-144.64,174-219"/>
	<path class="p6" d="M443,1138c0,0,24.13-74.77,91.04-123.56c66.91-48.79,82.48-72.59,82.48-72.59S573.78,1099.92,453,1182"/>
</g>

<g>
	<path class="p8" d="M741,423c-32-64,25-264,25-264s58,150-6,248"/>
	<path class="p8" d="M766,177c0,0-29,209-17,237"/>
</g>
<g>
	<path class="p9" d="M782.73,379.03c79.21-86.17,228.95-61.3,228.95-61.3s-178.51,129.35-265.6,103.81"/>
	<path class="p9" d="M760,407c0,0,211-86,252-89"/>
</g>
<g>
	<path class="p10" d="M340.71,699.9c-24.13-114.53,83.1-221.97,83.1-221.97s1.6,220.44-69.78,276.49"/>
	<path class="p10" d="M350.26,734.65c0,0,52.56-221.71,73.94-256.82"/>
</g>
<g>
	<path class="p11" d="M259,374c-25.19-65.91-112.15-67.5-112.15-67.5s71.2,112.2,125.67,117.28"/>
	<path class="p11" d="M267.97,412.54c0,0-99.05-95.15-121.35-105.96"/>
</g>
<g>
	<path class="p12" d="M268,396c4.32-85.25,103.25-133.5,103.25-133.5S333.77,397.77,273,424"/>
	<path class="p12" d="M268,409c0,0,81.94-125.72,103.55-146.49"/>
</g>
<g>
	<path class="p7" d="M438,1107c0,0,1-379,345-724c0,0,97-122,118-169"/>
</g>
<g>
	<path class="p1" d="M484,1746c0,0-6-344-35-570C424.41,984.41,190,110,186,98s16-42,43-14"/>
</g>
</svg>

     </div>
   
  </div>
  <section class="bg-light text-dark s1 pt-3 pb-5" style="position: relative; z-index:99999">
    <div class="container2 text-center m-auto mt-5 pb-4">
    <h4 style="text-transform: initial"><i class="text-secondary f2 bi-newspaper mx-2"></i> ÚLTIMAS NOTICIAS</h4>
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
