<!-- Manual de PHP -->
<html>
<head>
	<title> Ejemplo de PHP</title>
</head>
<body>
<?php
/*
chop(cadena). Elimina los saltos de línea y los espacios finales de una cadena.
*/

if (chop("Cadena \n\n ") == "Cadena")
	echo "Iguales<br><br>";

?>
</body>
</html>