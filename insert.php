<?php
include("conexion.php");
$con = conectar();

$nombre = trim($_POST['nombre']);
$apellido = trim($_POST['apellido']);
$telefono = trim($_POST['telefono']);
$correo = trim($_POST['correo']);


if( strlen($nombre) > 1 && strlen($apellido) > 1 && strlen($telefono) > 1 && strlen($correo) > 1 )
{
    $sql = "INSERT INTO Clientes(Nombre, Apellido, Telefono, Correo) VALUES('$nombre','$apellido','$telefono','$correo')";
    $query= mysqli_query($con,$sql);
    
    if($query){
        Header("Location: clientes.php");
        
    }else {
    }
}

?>