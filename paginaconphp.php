<?php

$anios = 24; //variable de tipo integer.
$nombre = "jose juan"; //variable de tipo string.
$casado = true; //variable de tipo  boolean.
$sueldo = 4025.43; //variable de tipo float

// arreglo de 4 tipos de datos
$persona_array = array('anios'=>$anios , 'nombre'=>$nombre , 'casado'=>$casado, 
'sueldo'=>$sueldo);

// objeto de 4 tipos de datos
$persona_object = (object)$persona_array;

// mostramos los valores de las variables
echo "variable de tipo integer: ";
echo $anios;
echo "<br>";
echo "variable de tipo string: ";
echo $nombre;
echo "<br>";
echo "variable boolean: ";
echo $casado;
echo "<br>";
echo "variable de tipo double: ";
echo $sueldo;
echo "<br>";

echo "variable de tipo object: ";
echo $persona_object->anios;
echo "-";
echo $persona_object->nombre;
echo "-";
echo $persona_object->casado;
echo "-";
echo $persona_object->sueldo;
echo "<br>";

echo "variable de tipo array:";
echo "<br>";

var_dump($persona_array);

?>
