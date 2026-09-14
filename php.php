<?php

$canciones = $_POST["canciones"];
$repeticiones = $_POST["repeticiones"];
$Crepeticiones = $repeticiones * 5;
 
switch($canciones){
case 1;
echo "Cancion 1  <br>";
break;
case 2;
echo "Cancion 2 <br>";
break;
case 3;
echo "Cancion 3 <br>";
break;
case 3;
echo "Cancion 4 <br>";
break;
case 3;
echo "Cancion 5 <br>";
break;

}
 echo "<h1>La cancion que selecciono es:</h1>"  . $canciones;

 echo "<h1> Tus repeticiones solicitadas serian: </h1>" . $repeticiones;
 echo "<h1> Total a pagar:</h1>" ."Q."  .  $Crepeticiones;
 echo "<br>";
 echo "<br>";
 echo "<br>";
?>

 <button onclick= "window.location.href='index.html'">Cambiar seleccion</button>