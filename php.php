<?php

$canciones = $_POST["canciones"];
$repeticiones = $_POST["repeticiones"];
$Crepeticiones = $repeticiones * 5;
$dinero = $_POST["dinero"];
$cambio = $dinero - $Crepeticiones;

 echo "<h1> Estado:</h1>";
if ($Crepeticiones > $dinero){
echo "El dinero no es suficiente para llevar a cabo la compra";
} else { echo "Compra realizada exitosamente";
}
 
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

 echo "<h1> Dinero ingresado: </h1>" . "Q." . $dinero;
 echo "<h1> Cambio:</h1>" ."Q."  .  $cambio;
 echo "<br>";
 echo "<br>";
 echo "<br>";
?>

 <button onclick= "window.location.href='index.html'">Cambiar seleccion</button>