<?php
include("conexion.php");
//Agregar registros a la base de datos
$sql = "INSERT INTO usuarios(nombre, correo_institucional, Grupo, Turno, Carrera) VALUES('ivan', 'al21311258@.utcj.edu.mx')";
$result = mysqli_query($cone,$sql);
if($result)
{
    echo "Registro creado exitosamente";
}
else{
    echo "Error en la conexion";
}
mysqli_close($con);
//$cone->close();