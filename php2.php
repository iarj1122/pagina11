<?php
$Usuario=$_POST['Usuario'];
$Correo_Institucional=$_POST['Correo_Institucional'];
$Contraseña=$_POST['Contraseña'];
include("php.php");
//Agregar registros a la base de datos
$sql = "INSERT INTO estudiantes(Usuario, Correo_Institucional,Contraseña) VALUES('$Usuario','$Correo_Institucional','$Contraseña')";
$result = mysqli_query($cone,$sql);
if($result)
{
    echo "Registro creado exitosamente";
}
else{
    echo "Error en la conexion";
}
mysqli_close($con);
?>