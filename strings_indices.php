<!-- Manual de PHP -->
<html>
<head>
	<title> Ejemplo de PHP</title>
</head>
<body>
<?php
$comida["Mallorca"] = "Sopas";
$comida["Valencia"] = "Paella";
$comida["Madrid"] = "Cocido";

echo 'La comida de la ciudad de Mallorca es ' . $comida["Mallorca"];
echo "\n";
echo "La comida de la ciudad de Valencia es " . $comida["Valencia"];
echo "\n";
echo "La comida de la ciudad de Madrid es " . $comida["Madrid"];
?>
</body>
</html>