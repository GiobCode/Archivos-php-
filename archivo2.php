<!DOCTYPE html>
<html>
<body>



<div style ="background: Black; color: white; width: 400px;">

<h2>Suma de dos numeros enteros en php</h2><br>
<?php
   
  
       $na = 10;
       $nb = 333;

       echo "La suma de ".$na." + ".$nb." = ".($na+$nb);
?>

</div>

<div style ="background: Black; color: white; width: 400px;">

<h2>Suma de dos numeros decimales en php</h2><br>
<?php
   
  
       $na = number_format(13.3,2);
       $nb = number_format(5.5,2);
       echo "La suma de ".$na." + ".$nb." = ".($na+$nb);
?>

</div>

<div style ="background: Black; color: white; width: 400px;">

<h2>Multplicacion de enteros  en php</h2><br>
<?php
   
       $na = 5;
       $nb = 10;

       echo "La Multiplicacion de ".$na." X ".$nb." = ".($na * $nb);
?>

</div>

<div style ="background: Black; color: white; width: 400px;">

<h2>Concatenacion de palabras en php</h2><br>
<?php
   


       $cadena1 = "Hola amigos";
       $cadena2 = "como estan";


      echo "Palabra 1 :".$cadena1."<br>";
      echo "Palabra 2 :".$cadena2."<br>";

      echo"La concatenacion de las dos palabras es :<br>" .$cadena1." ".$cadena2;
?>

</div>



</body>
</html>
