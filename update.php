<?php

include("conexion.php");
$con = conectar();

$id = trim($_POST['id']);
$nombre = trim($_POST['nombre']);
$apellido = trim($_POST['apellido']);
$telefono = trim($_POST['telefono']);
$correo = trim($_POST['correo']);

$sql = "UPDATE Clientes SET  Nombre ='$nombre', Apellido ='$apellido', Telefono ='$telefono', Correo ='$correo' WHERE Id = '$id'";
$query = mysqli_query($con, $sql);

    if($query){
        Header("Location: clientes.php");
    }
?>