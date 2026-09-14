<?php

$canciones = $_POST["canciones"];
$repeticiones = $_POST["repeticiones"];
$Crepeticiones = $repeticiones * 5;
$dinero = $_POST["dinero"];
$cambio = $dinero - $Crepeticiones;


echo "<p>Confirma tu compra</p>";
 echo "<h1> Estado:</h1>";
if ($Crepeticiones > $dinero){
echo "<h2>El dinero no es suficiente para llevar a cabo la compra</h2>";
} else { echo "<h2>Compra realizada exitosamente</h2>";
}
 
switch($canciones){
case 1;
echo "Angel - Shaggy <br>";
break;
case 2;
echo "Human Nature - Michael Jackson <br>";
break;
case 3;
echo "Stand by me - Ben E. King <br>";
break;
case 4;
echo "ABC - The Jackson 5 <br>";
break;
case 5;
echo "Bad - Michael Jackson <br>";
break;

}
 
echo "<h1>La cancion que selecciono es:</h1>"  . "<h2>$canciones</h2>";

 echo "<h1> Tus repeticiones solicitadas serian: </h1>" . "<h2>$repeticiones</h2>";
 echo "<h1> Total a pagar:</h1>"  .  "<h2>Q.$Crepeticiones</h2>";
 echo "<br>";

 echo "<h1> Dinero ingresado: </h1>" .  "<h2>Q.$dinero</h2>";
 echo "<h1> Cambio:</h1>" .  "<h2>Q.$cambio</h2>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
?>

 <button onclick= "window.location.href='index.html'">Cambiar seleccion</button>
 <style>
    body{
        background-color:#f8b9b9;
       
    }
    h1{
        font-size: 50px;
        text-align:center;

    }
button{
    font-size: 40px;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    background-color: #680909;
    color: #f8b9b9;
    margin-left:600px;
}
h2{
    text-align:center;
    font-size: 40px;
    color: #9d2a2a;
}
p{
    font-size:90px;
    color: #680909;
    text-align: center;
}



 </style>
 