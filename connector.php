<?php
// $servername = "localhost";
// $username = "root";
// $password = "fercho123";


$servername = "localhost";
$username = "root";
$password = "";
$base = "rotary";

// Create connection
$conn = new mysqli($servername, $username, $password, $base);

// Check connection
if ($conn-> connect_errno) {
  echo "hubo un error al conectar a la base de datos";
}

function limitar_cadena($cadena, $limite, $sufijo){
  // Si la longitud es mayor que el límite...
  if(strlen($cadena) > $limite){
      // Entonces corta la cadena y ponle el sufijo
      return substr($cadena, 0, $limite) . $sufijo;
  }
  
  // Si no, entonces devuelve la cadena normal
  return $cadena;
} 

?>