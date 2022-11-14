<?php
$conexion = mysqli_connect("localhost", "root", "12345678");
mysqli_select_db($conexion, "estudiantes");
mysqli_query($conexion, ' UPDATE `contenedores` SET `ESTADO`= "0" WHERE ID_CONTENEDOR = "C001" ' );
?>