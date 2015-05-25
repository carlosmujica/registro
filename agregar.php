<?php

//Conexion a mysql
$conexion= mysql_connect("localhost","registro","registro");

//Nombro variables con metodo POST
$Nombre= $_POST['Nombre'];
$Apellido= $_POST['Apellido'];
$Comentario= $_POST['Comentario'];
//Selecciono mi Base de Datos
mysql_select_db("registro",$conexion);


//Añado la onulta
$sql="INSERT INTO comentario (`nombre`, `apellido`, `comentario`) VALUES ('$Nombre','$Apellido','$Comentario')";

$resultado=mysql_query($sql);

//Cierro
mysql_close($conexion);

?>