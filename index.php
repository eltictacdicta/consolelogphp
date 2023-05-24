<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de console log desde php</title>
</head>
<body>
    <h1>Ejemplo de uso de console.log desde PHP</h1>
    <p>En este ejemplo vamos a usar una función que nos manda un console.log a la consola del navegador. En este ejemplo hay 3 tipos de variables</p>
    <ul>
        <li>
            Una variable $frutas que es un array de frutas con los valores de Manzana y Pera
        </li>
        <li>
            Una variable $fruta string simple con el valor de Melon
        </li>
        <li>
            Una variable $objFruta que es un objeto de la clase Fruta con 2 parametros, nombre y color. Con los valores nombre que es Sandia y color que es Verde 
        </li>
    </ul>
    <p>Para ver los resultados pulsa F12 en tu navegador y podrás ver por consola los resultados.
        La función te permite poner comentarios personalizados como segundo parametro.
    </p>
</body>
</html>

<?php
include("./console.php");
$frutas=array('Manzana','Pera');
$fruta="Melon";
class Fruta {
  // Propiedades
  public $nombre;
  public $color;
}
$objFruta=new Fruta();
$objFruta->nombre="Sandia";
$objFruta->color="Verde";
php_console_log($frutas);
php_console_log($fruta);
php_console_log($objFruta);
//Ahora añadimos comentarios personalizados
php_console_log($frutas,"Array de frutas:");
php_console_log($fruta, "Fruta:");
php_console_log($objFruta,"Objeto de fruta:");
?>