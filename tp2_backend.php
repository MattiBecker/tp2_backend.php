<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <p>Ejercicios</p>
    <br> <hr>
    <p>1:</p>
    <?php
    $a = 8;

     if ($a > 0) {
       echo "$a es un numero positivo";  }

    ?>
    <br>
    <p>2:</p>
    <?php
    $b = 6;
    if ($b > 1 & $b < 10){
      echo "$b es mayor a 1 y menor a 10"; }
     ?>

     <br>
     <p>3:</p>


      <?php
    $b = 1;
    if (($b > 10 )| ($b < 2)){
      echo "$b no es mayor a 10 si menor a 2";
    }
     ?>
     <!-- // Profe acá no me queda muy en claro la consigna. -->

     <br>
     <p>4:</p>
     <?php
     $numero1 = 20;
     $numero2 = 10;

     if ($numero1 > $numero2 ){
         echo "Total suma" .($numero1 + $numero2);
         echo "Total resta" .($numero1 - $numero2);

        
   }
      ?>


  </body>
</html>
