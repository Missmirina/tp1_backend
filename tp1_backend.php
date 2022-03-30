<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Trabajo Practico N°1</title>
  </head>
  <body>
    <h1>Ejercicio 1</h1>
    <?php
    echo "Hola Mundo";
    ?>
    <hr>
    <h1>Ejercicio 2</h1>
    <?php $saludos= "HOLA MUNDO";
    echo $saludos; ?>
    <hr>
    <h1>Ejercicio 3</h1>
    <h5>Variables: $numero1=15 $numero2=20;</h5>
    <?php
    $numero1 = 15;
    $numero2 = 20;
echo "Suma"."\n". $numero1 + $numero2 . "<br>";
echo "Resta"."\n". $numero1 - $numero2 . "<br>";
echo "Multiplicacion"."\n". $numero1 * $numero1 . "<br>";
echo "Divición"."\n". $numero1 / $numero1 . "<br>";
    ?>
    <hr>
    <h1>Ejercicio 4</h1>
    <?php
    $cel=20;
    $far= ($cel*1.8000)+32;
    echo "La transformación de grados Celsius a Fahrenheit, para el valor $cel °C es $far" ;
    ?>
    <hr>
    <h1>Ejercicio 5</h1>
    <?php
    echo "Rectangulo" . "<br>";
    $base=18;
    $altura=12;
    echo "Perímetro = " . ($base*$altura)*2 . "<br>"."Area = " . $base*$altura . "<br>";
    ?>
    <?php
    echo "Circulo" . "<br>";
    $radio=30;
    $pi=3.14;
    echo "Perímetro = " . 2*$pi*$radio . "<br>"."Area = " . 2*$pi*($radio*$radio);
    ?>
  </body>
</html>
