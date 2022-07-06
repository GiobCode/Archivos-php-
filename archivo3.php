<!DOCTYPE html>
<html>
<body>



<div style ="background: Black; color: white; width: 400px;">

<h2>Numero mayor de dos numeros</h2><br>
<?php
   
      
       $na = 5000;
       $nb = 333;

       echo "Numero 1 : ".$na."<br>";
       echo "Numero 2 : ".$nb."<br><br>";

       if($na > $nb)
       {
              echo "El numero mayor es: ".$na;
       }else
       {
              echo "El numero mayor es:  ".$nb;
       }
?>

</div>

<div style ="background: Black; color: white; width: 400px;">

<h2>Numero menor de tres numeros</h2><br>
<?php
   
       
       function menor($a,$b){
            if($a < $b)
            {
              return $a;
            }
            return $b;
       }


       $na = 1;
       $nb = 333;
       $nc = 100;
       
       echo "Numero 1 : ".$na."<br>";
       echo "Numero 2 : ".$nb."<br>";
       echo "Numero 3 : ".$nc."<br> <br>";

       echo "El numero de menor es :".menor(menor($na,$nb),$nc);


?>

</div>



</body>
</html>
