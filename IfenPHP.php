<html>
<head>
<title> USO DE IF CON PHP </title>	
</head>
<body>

<h1> Ejercicio de if usando PHP</h1>

<?php
$tipo="";
$grosor=0.33;
$diametro=1.25;
$marca="Kimashuki";

if($diametro>1.4){
	echo " La rueda es para un vehiculo grande ";
}
else {
	if($diametro<=1.4){
	echo "La rueda es para un vehiculo pequeño";	
	}
	else{
	echo " No existe un tamaño valido de llanta ";	
	}

}


?>


</body>	
</html>