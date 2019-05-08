<!-- Manual de PHP -->
<html>
<head>
	<title> Ejemplo de PHP</title>
</head>
<body>
<?php
print "Mi_array es $mi_array<BR>";
print "Mi_array[5] es $mi_array[5]<BR>";
$mi_array[5] = "Posicion 6ta";
print "Mi_array[5] es $mi_array[5]<BR>";
print "Mi_array es $mi_array<BR>";

$cad = "A esta cadena";
$cad = $cad . " le vamos a añadir más texto.";

echo $cad;

?>
</body>
</html>